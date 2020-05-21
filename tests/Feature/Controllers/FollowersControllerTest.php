<?php

namespace Tests\Feature\Controllers;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class FollowersControllerTest extends TestCase
{
    use WithFaker;

    /** @test */
    public function it_works() : void
    {
        $this
            ->actingAs(factory(User::class)->create())
            ->getJson(route('followers'))
            ->assertOk();
    }
}
