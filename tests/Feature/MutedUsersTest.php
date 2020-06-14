<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Jobs\FetchMutedUsers;
use Tests\Concerns\CreatesUser;

class MutedUsersTest extends TestCase
{
    use CreatesUser;

    /** @test */
    public function guests_cannot_access_muted_users_page()
    {
        $this
            ->getJson(route('muted'))
            ->assertStatus(401)
        ;
    }

    /** @test */
    public function muted_users_are_listed() : void
    {
        $user = $this->createUser();

        FetchMutedUsers::dispatch($user);

        $this
            ->actingAs($user)
            ->getJson(route('muted'))
            ->assertOk()
            ->assertView()
            ->contains("{$user->muted->count()} muted users")
        ;
    }
}
