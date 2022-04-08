<x-guest-layout>
    <x-auth-card title="Enter your Linktree username to receive a password reset email.">
        <x-slot name="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('img/linktree.svg') }}" alt="Logo"></a>
        </x-slot>

        <div class="mb-8 text-base text-gray-800">
            {{ __('When you joined Linktree, you either signed up by creating a username and password, or authorised through Instagram. You’ll only get a password reset email if you signed up with username and password.') }}
        </div>

        <div class="mb-8 text-base text-gray-800">
            {{ __('What happens if I signed up with Instagram?') }}
            <a href="#" class="underline">{{ __('Read here.') }}</a>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full"
                         type="email"
                         name="email"
                         placeholder="Linktree username"
                         :value="old('email')"
                         required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>

            <!-- Back -->
            <p class="mt-8 flex justify-center items-center">
                <span class="mr-2"><svg class="w-3 h-3 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg></span>
                <a class="underline" href="{{ route('login') }}">Back to login</a>
            </p>
        </form>
    </x-auth-card>
</x-guest-layout>
