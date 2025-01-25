@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Créer un utilisateur</h1>

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

    <!-- Affichage des erreurs de validation -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('admin.utilisateurs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Entrez le nom" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Entrez l'email" required>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Rôle</label>
            <select name="role" id="role" class="form-control" required>
                <option value="">-- Sélectionnez un rôle --</option>
                <option value="admin">Admin</option>
                <option value="manager">Manager</option>
                <option value="employee">Employé</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Entrez le mot de passe" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmez le mot de passe</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirmez le mot de passe" required>
        </div>
        <input type="hidden" name="store_id" value="{{ Auth::user()->store_id }}">
        <button type="submit" class="btn btn-primary">Créer</button>
        <a href="{{ route('admin.utilisateurs.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
