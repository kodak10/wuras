@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Gestion des rôles</h1>
    {{-- <a href="{{ route('admin.roles.create') }}" class="btn btn-primary mb-3">Ajouter un rôle</a> --}}

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Permissions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>{{ implode(', ', $role->permissions->pluck('name')->toArray()) }}</td>
                    <td>
                        <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-warning">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection