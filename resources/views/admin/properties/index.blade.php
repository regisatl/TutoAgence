@extends('admin.admin')

@section('title', 'Tous les biens')

@section('content')
    <div class="max-w-screen-2xl mx-auto mt-8">
        <div class="flex justify-between items-center mb-3">
            <h1 class="text-gray-700 text-sm md:text-md lg:text-lg uppercase font-semibold">@yield('title')</h1>
            <a href="{{ route('admin.property.create') }}" class="bg-indigo-500 focus:ring-indigo-300 hover:bg-indigo-600 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 rounded-md font-light text-sm w-auto sm:w-auto px-5 py-2.5 text-center focus:ring-4 focus:outline-none text-white">Ajouter un bien</a>
        </div>
        <div class="relative overflow-x-auto shadow-xl sm:rounded-lg ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 bg-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Titre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Surface
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Prix
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        @foreach ($properties as $property)
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 rounded-md focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $property->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $property->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $property->surface }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($property->price, thousands_separator: ' ') }}
                            </td>
                            <td class="flex items-center px-6 py-4">
                                <a href="{{ route('admin.property.edit', $property->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('admin.property.destroy', $property->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-3">{{ $properties->links() }}</div>
    </div>
@endsection
