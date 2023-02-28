<x-action-section>
    <x-slot name="title">
        {{ __('User List') }}
    </x-slot>

    <x-slot name="description">
        {{ __('User List.') }}
    </x-slot>
    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-grey">Id</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-grey">Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr class="bg-white">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"> {{ $user->id }} </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"> {{ $user->name }} </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="flex justify-center mt-5">
                                    <x-button class="mt-2" wire:click="loadMore" wire:loading.attr="disabled">
                                        {{ __('Load More') }}
                                    </x-button>
                                </div>

        </div>
    </x-slot>
</x-action-section>
