<x-layouts.full>
    <h2 class="font-semibold leading-none text-center text-xl">
        @choice(':count blocked user|:count blocked users', $user->blocked->count())
    </h2>

    <div class="bg-gray-700 mt-8 py-4 rounded">
        @if ($blockedUsers->isNotEmpty())
            <ul>
                @foreach ($blockedUsers as $blockedUser)
                    <li>
                        <x-user :data="new App\Presenters\UserPresenter($blockedUser)" />
                    </li>
                @endforeach
            </ul>

            <x-pagination :items="$blockedUsers" class="mb-4 mt-8 sm:mx-4" />
        @else
            <p class="my-4 px-4 text-center text-gray-500">You haven't blocked anyone yet.</p>
        @endif
    </div>
</x-layouts.full>
