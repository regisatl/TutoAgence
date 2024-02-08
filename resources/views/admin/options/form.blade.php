@extends('admin.admin')

@section('title', $option->exists ? 'Editer une nouvelle option' : 'Ajouter une nouvelle option')

@section('content')
    <div class="flex items-center justify-center min-h-screen py-8 px-4">
        <div class="bg-gray-100 shadow-lg rounded-lg">
            <div
                class="flex justify-center items-center {{ $option->exists ? 'bg-emerald-500' : 'bg-indigo-500' }} p-3 rounded-t-lg">
                <h1 class="text-gray-200 text-sm md:text-md lg:text-lg uppercase font-semibold">@yield('title')</h1>
            </div>
            <form action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}"
                method="post" class="p-8">
                @csrf
                @method($option->exists ? 'put' : 'post')
                <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3  sm:gap-6 mb-5">
                    @include('shared.input', [
                        'label' => 'Nom',
                        'name' => 'name',
                        'type' => 'text',
                        'value' => $option->name,
                        'placeholder' => 'Entrez le titre...',
                    ])
                   
                <div class="mb-5">
                    <button
                        class="text-white shadow-lg @if ($option->exists) bg-emerald-500 focus:ring-emerald-300 hover:bg-emerald-600 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800  @else bg-indigo-500 focus:ring-indigo-300 hover:bg-indigo-600 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 rounded-md @endif font-light text-sm w-auto sm:w-auto px-5 py-2.5 text-center focus:ring-4 focus:outline-none">
                        @if ($option->exists)
                            Modifier une option
                        @else
                            Ajouter une option
                        @endif
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
