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
                    <h1 class="mb-3">Editing link</h1>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('links.update', $link) }}">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-2 gap-4">
                            <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Name')" />

                                <x-input id="name" class="block mt-1 w-full"
                                         type="name"
                                         name="name"
                                         value="{{ $link->name }}"
                                         required />
                            </div>

                            <!-- Link -->
                            <div>
                                <x-label for="link" :value="__('Link')" />

                                <x-input id="link" class="block mt-1 w-full"
                                         type="link"
                                         name="link"
                                         value="{{ $link->link }}"
                                         required />
                            </div>
                        </div>

                        <div class="flex justify-end mt-4">
                            <x-button>
                                {{ __('Confirm') }}
                            </x-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
