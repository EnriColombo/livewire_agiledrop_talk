<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users Index') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-2xl mx-4 sm:mx-auto py-10 sm:px-6 lg:px-8">
            @include('partials.messages')

            @forelse($users as $user)
                <ul class="mt-1">
                    <li>
                        <a class="text-indigo-700" href="{{route('users.edit', $user->id)}}">
                            {{$user->name}}
                        </a>
                    </li>
                </ul>

            @empty
                <div>No users to show</div>
            @endforelse
        </div>
    </div>

</x-app-layout>