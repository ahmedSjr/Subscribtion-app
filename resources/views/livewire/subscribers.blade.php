<div class="p-6 bg-white border-b border-gray-200">
    <h2 class="text-2xl text-gray-600 mb-6">Subscribers</h2>

    @if ($subscribers->isEmpty())
        <div class="flex w-full bg-blue-300 p-5 rounded-lg">
            <p class="text-gray-600"> No Subscribers Found</p>
        </div>

    @else
        <table class="w-full">
            <thead class="border-b-2 border-gray-300 text-indigo-500">
                <tr class="">
                    <th class="px-6 py-3 text-left">Email</th>
                    <th class="px-6 py-3 text-left">Verified</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($subscribers as $subscriber)
                    <tr class="text-sm text-gray-800 border-b border-gray-600">
                        <td class="px-6 py-4">{{ $subscriber->email }}</td>
                        <td class="px-6 py-4">
                            {{ optional($subscriber->email_verified_at)->diffForHumans() ?? 'Not Verified yet' }}
                        </td>
                        <td>
                            <x-button wire:click="delete({{ $subscriber->id }})"
                                class="border border-red-500  text-white bg-red-500 hover:bg-red-300">Delete
                            </x-button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
