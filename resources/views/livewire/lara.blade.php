<div>
    <div class="flex flex-col bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 w-full h-screen"
        x-data="{ showSubscribe: false }">
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
        <div class="flex container mx-auto items-center h-full">
            <div class="flex flex-col w-2/3 items-start">
                <h1 class="text-white font-bold text-5xl leading-tight mb-4">Simple Lara NewsLetter lets confirm your
                    future</h1>
                <p class="text-indigo-200 mb-10">Subscribe now and get chance to become a full dev</p>
                <x-button class="py-3 px-8 bg-red-500" x-on:click="showSubscribe = true">Subscribe</x-button>
            </div>
        </div>
        <div class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center w-full h-screen" x-show="showSubscribe"
            x-on:click.self="showSubscribe = false" x-on:keydown.escape.window="showSubscribe = false">
            <div class=" bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 m-auto shadow-2xl rounded-xl p-8">
                <p class="text-white text-5xl font-extrabold text-center mt-5">
                    Let's do it!
                </p>
                <form action="" class="flex flex-col items-center p-24" wire:submit.prevent="subscribe">
                    <x-input class="px-5 py-3 w-80 border border-blue-400" type="email" placeholder="Enter your email"
                        wire:model="email">
                    </x-input>
                    <span class="text-gray-100 text-xs mt-2">
                        We will send you a confirmation email
                    </span>
                    <x-button class="px-5 py-3 mt-5 w-80 bg-blue-500 justify-center">Get In</x-button>
                </form>
            </div>
        </div>

    </div>
</div>
