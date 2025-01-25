@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Gestion des utilisateurs</h1>
    <a href="{{ route('admin.utilisateurs.create') }}" class="btn btn-primary">Ajouter un utilisateur</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ ucfirst($user->role) }}</td>
                <td>
                    <a href="{{ route('admin.utilisateurs.edit', $user->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                    <form action="{{ route('admin.utilisateurs.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection