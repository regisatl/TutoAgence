@extends('admin.admin')

@section('content')
    <h1>Les Biens</h1>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Titre</th>
                <th scope="col">Surface</th>
                <th scope="col">Prix</th>
                <th scope="col">Ville</th>
                <th scope="col" class="text-end">Actions</th>
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
                        <a href="{{ route('admin.property.edit', $property->id) }}" class="btn btn-primary">Editer</a>
                        <form action="{{ route('admin.property.destroy', $property->id) }}" method="POST">
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
