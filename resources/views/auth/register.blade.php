<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100 dark:bg-gray-900">
        <form method="POST" action="{{ route('register') }}" class="w-full max-w-sm bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" class="text-gray-700 dark:text-gray-300"/>
                <x-text-input id="name" class="block mt-1 w-full text-gray-900" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="text-gray-700 dark:text-gray-300"/>
                <x-text-input id="email" class="block mt-1 w-full text-gray-900" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-gray-700 dark:text-gray-300"/>
                <x-text-input id="password" class="block mt-1 w-full text-gray-900"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700 dark:text-gray-300"/>
                <x-text-input id="password_confirmation" class="block mt-1 w-full text-gray-900"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
            </div>

            <div class="flex items-center justify-between mt-6">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-primary-button class="ml-4 bg-indigo-600 hover:bg-indigo-700 focus:bg-indigo-700 text-gray-100">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
