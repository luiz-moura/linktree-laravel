<x-guest-layout>
    <x-auth-card title="Thanks for signing up 🥳">
        <x-slot name="logo">
            <a href="{{ route('dashboard') }}"><img src="{{ asset('img/linktree.svg') }}" alt="Logo"></a>
        </x-slot>

        To verify your account, click on the link sent to your inbox ({{ auth()->user()->email }})

        <div class="mt-8">
            <a href="{{ route('links.index') }}">Continue to my Linktree</a>
        </div>
    </x-auth-card>
</x-guest-layout>
