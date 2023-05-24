@extends('layouts.admin')

@section('content')
    <table class="table table-striped table-light">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Opzioni</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->name }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-primary mx-1" href="{{ route('admin.types.show', $type->slug) }}">Info</a>
                            <a class="btn btn-warning mx-1" href="{{ route('admin.types.edit', $type->slug) }}">Modifica</a>

                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        Nessuna tipologia da visualizzare
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('admin.types.create') }}" class="btn btn-primary">Crea nuovo progetto</a>
@endsection
