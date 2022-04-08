<x-guest-layout>
    <x-auth-card title="Log in to your Linktree account">
        <x-slot name="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('img/linktree.svg') }}" alt="Logo"></a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full"
                         type="email"
                         name="email"
                         :value="old('email')"
                         placeholder="Username"
                         required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         placeholder="Password"
                         required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>

            @if (Route::has('password.request'))
                <div class="text-center mt-6">
                    <a class="text-base hover:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
            @endif

            <!-- Create account -->
            <p class="mt-8 text-center">
                {{ __('Don`t have an account?') }} <a class="underline font-bold" href="{{ route('register') }}">{{ __('Create One') }}</a>
            </p>
        </form>
    </x-auth-card>
</x-guest-layout>
