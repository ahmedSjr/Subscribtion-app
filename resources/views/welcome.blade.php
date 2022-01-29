<x-guest-layout>
    <div class="flex flex-col bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 w-full h-screen">
        <nav class="flex pt-5 justify-between container mx-auto text-indigo-100">
            <a class="text-4xl font-bold" href="/">
                <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
            </a>
            <div class="flex justify-end">
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth

            </div>
        </nav>
    </div>
    <div class="flex flex-col bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 h-screen w-full">


    </div>
</x-guest-layout>
