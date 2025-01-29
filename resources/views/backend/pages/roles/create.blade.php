@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Créer un rôle</h1>
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nom du rôle</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Permissions</label>
            @foreach($permissions as $permission)
                <div class="form-check">
                    <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" class="form-check-input">
                    <label class="form-check-label">{{ $permission->name }}</label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection