@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Assigner un rôle à un utilisateur</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label>Utilisateur : <strong></strong></label>
        </div>
        <div class="form-group">
            <label>Rôles</label>
            @foreach($roles as $role)
                <div class="form-check">
                    <input type="checkbox" name="roles[]" value="{{ $role->name }}" 
                        class="form-check-input" 
                        {{ $user->hasRole($role->name) ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $role->name }}</label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Assigner</button>
    </form>
</div>
@endsection
