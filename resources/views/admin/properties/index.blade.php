@extends('admin.admin')

@section('title', 'Tous les biens')
    <div class="d-flex justify-content-between align-items center p-4">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.properties.create') }}" class="btn btn-success">Ajouter un bien</a>
    </div>
    <table class="table table-striped border rounded-lg text-body">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Titre</th>
                <th scope="col">Surface</th>
                <th scope="col">Prix</th>
                <th scope="col">Ville</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($properties as $property)
                <tr>
                    <th scope="row">{{ $property->id }}</th>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->surface }}</td>
                    <td>{{ number_format($property->price, thousands_separator:  ' ') }}</td>
                    <td>{{ $property->city }}</td>
                    <td>
                        <a href="{{ route('admin.properties.edit', $property->id) }}" class="btn btn-primary">Editer</a>
                        <form action="{{ route('admin.properties.destroy', $property->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
            @endforeach
        </tbody>

    </table>
    {{$properties->links()}}
@endsection
