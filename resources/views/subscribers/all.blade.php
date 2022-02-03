<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($subscribers as $subscriber)
                                    <tr class="text-sm text-gray-800 border-b border-gray-600">
                                        <td class="px-6 py-4">{{ $subscriber->email }}</td>
                                        <td class="px-6 py-4">
                                            {{ optional($subscriber->email_verified_at)->diffForHumans() ?? 'Not Verified yet' }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>