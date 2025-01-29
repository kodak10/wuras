@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Modifier un magasin</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.stores.update', $store->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nom du magasin</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $store->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Localisation</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $store->location) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $store->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone1" class="form-label">Téléphone 01</label>
            <input type="text" class="form-control" id="phone1" name="phone1" value="{{ old('phone1', $store->phone1) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone2" class="form-label">Téléphone 02</label>
            <input type="text" class="form-control" id="phone2" name="phone2" value="{{ old('phone2', $store->phone2) }}">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('admin.stores.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
