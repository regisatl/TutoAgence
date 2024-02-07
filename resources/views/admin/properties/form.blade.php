@extends('admin.admin')

@section('title', $property->exists ? 'Editer un nouveau bien' : 'Ajouter un nouveau bien')

@section('content')
    <div class="flex items-center justify-center min-h-screen py-8 px-4">
        <div class=" shadow-lg rounded-lg">
            <div
                class="flex justify-center items-center {{ $property->exists ? 'bg-emerald-500' : 'bg-indigo-500' }} p-3 rounded-t-lg">
                <h1 class="text-gray-200 text-xl uppercase font-semibold">@yield('title')</h1>
            </div>
            <form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}"
                method="post" class="p-8">
                @csrf
                @method($property->exists ? 'put' : 'post')
                <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3  sm:gap-6 mb-5">
                    @include('shared.input', [
                        'label' => 'Titre',
                        'name' => 'title',
                        'value' => $property->title,
                        'placeholder' => 'Entrez le titre...',
                    ])
                    @include('shared.input', [
                        'label' => 'Surface',
                        'name' => 'surface',
                        'value' => $property->surface,
                        'placeholder' => 'Entrez la surface...',
                    ])
                    @include('shared.input', [
                        'label' => 'Prix',
                        'name' => 'price',
                        'value' => $property->price,
                        'placeholder' => 'Entrez le prix...',
                    ])
                    @include('shared.input', [
                        'label' => 'Pièces',
                        'name' => 'rooms',
                        'value' => $property->rooms,
                        'type' => 'number',
                        'placeholder' => 'Entrez le nombre de pièce(s)...',
                    ])
                    @include('shared.input', [
                        'label' => 'Chambres',
                        'name' => 'bedrooms',
                        'value' => $property->bedrooms,
                        'type' => 'number',
                        'placeholder' => 'Entrez le nombre de chambre(s)...',
                    ])
                    @include('shared.input', [
                        'label' => 'Etage',
                        'name' => 'floor',
                        'type' => 'number',
                        'value' => $property->floor,
                        'placeholder' => 'Entrez le nombre d\'étage...',
                    ])
                    @include('shared.input', [
                        'label' => 'Adresse',
                        'name' => 'address',
                        'type' => 'text',
                        'value' => $property->address,
                        'placeholder' => 'Entrez votre adresse...',
                    ])
                    @include('shared.input', [
                        'label' => 'Ville',
                        'name' => 'city',
                        'type' => 'text',
                        'value' => $property->city,
                        'placeholder' => 'Entrez la ville...',
                    ])
                    @include('shared.input', [
                        'label' => 'Code Postal',
                        'name' => 'postal_code',
                        'type' => 'text',
                        'value' => $property->postal_code,
                        'placeholder' => 'Entrez le code postal...',
                    ])
                    @include('shared.input', [
                        'label' => 'Vendu',
                        'name' => 'sold',
                        'type' => 'checkbox',
                        'value' => $property->sold,
                        'placeholder' => '...',
                    ])
                </div>
                <div class="w-full mb-5">
                    @include('shared.input', [
                        'type' => 'textarea',
                        'label' => 'Description',
                        'name' => 'description',
                        'value' => $property->description,
                        'placeholder' => 'Entrez la description...',
                    ])
                </div>
                <div class="mb-5">
                    <button
                        class="text-white @if ($property->exists) bg-emerald-500 focus:ring-emerald-300 hover:bg-emerald-600 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800  @else bg-indigo-500 focus:ring-indigo-300 hover:bg-indigo-600 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 rounded-md @endif font-light text-sm w-auto sm:w-auto px-5 py-2.5 text-center focus:ring-4 focus:outline-none">
                        @if ($property->exists)
                            Modifier un bien
                        @else
                            Ajouter un bien
                        @endif
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
