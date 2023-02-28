<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Users') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @if ($users != null)

                    <div>
                        @foreach($users as $user)

                                <h2>
                                    {{ $user['id'] }}
                                </h2>

                                <p>
                                    {{ $user['name'] }}
                                </p>

                        @endforeach
                    </div>

                    @if ($hasMorePages)
                        <div>
                            <button
                                wire:click="loadUsers"
                            >
                                Load More
                            </button>
                        </div>
                    @endif

                @endif
    </div>
</x-app-layout>
