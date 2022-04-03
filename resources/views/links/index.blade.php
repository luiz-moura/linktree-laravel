<x-app-layout :header="__('List links')">
    <x-table-responsive>
        <x-slot name="thead">
            <tr>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Url</th>
                <th scope="col" class="px-6 py-3">Visits</th>
                <th scope="col" class="px-6 py-3">Last Visit</th>
                <th scope="col" class="px-6 py-3"><span class="sr-only">Actions</span></th>
            </tr>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($links as $link)
                <tr class="bg-white dark:bg-gray-800 @if(!$loop->last) border-b dark:border-gray-700 @endif">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $link->name }}
                    </th>
                    <td class="px-6 py-4">
                        <a href="{{ $link->link }}">{{ $link->link }}</a>
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        Aug 3, 2020 - 12:30pm
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('links.edit', $link) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-table-responsive>

    <div class="flex justify-end mt-4">
        <a href="{{ route('links.create') }}" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Add Link</a>
    </div>
</x-app-layout>
