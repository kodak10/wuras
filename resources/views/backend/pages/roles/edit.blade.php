@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Modifier le rôle</h1>

    <!-- Affichage des messages de succès ou d'erreur -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Formulaire de modification du rôle -->
    <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nom du rôle</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $role->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="permissions" class="form-label">Permissions</label>
            <select name="permissions[]" id="permissions" class="form-control" multiple>
                @foreach($permissions as $permission)
                    <option value="{{ $permission->id }}" 
                        {{ in_array($permission->id, $role->permissions->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $permission->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
