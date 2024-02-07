@extends('admin.admin')

@section('title', $property->exists ? 'Editer un bien' : 'Ajouter un bien')

@section('content')
    <div class="">
        <h1>@yield('title')</h1>
        <form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}"
            method="POST">

            @csrf
            @method($property->exists ? 'put' : 'post')

            @include('shared.input', ['label' => 'Titre', 'name' => 'title', 'value' => $property->title])

            <div>
                <button :class="'btn btn-primary' ? 'btn btn-success' : 'btn btn-primary'">
                    @if ($porperty->exists)
                        Modifier
                    @else
                        Ajouter
                    @endif
                </button>
            </div>

        </form>

    </div>

@endsection
