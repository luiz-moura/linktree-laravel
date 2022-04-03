<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    @isset($logo)
        <div>{{ $logo }}</div>
    @endisset

    <div class="w-full sm:max-w-2xl mt-6 px-20 py-14 border border-gray-300 overflow-hidden sm:rounded-2xl">
        @isset($title)
            <h1 class="text-3xl dark:text-white mb-12">{{ $title }}</h1>
        @endisset
        {{ $slot }}
    </div>
</div>
