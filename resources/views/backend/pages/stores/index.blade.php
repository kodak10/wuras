@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Liste des magasins</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- <a href="{{ route('admin.stores.create') }}" class="btn btn-primary mb-3">Ajouter un magasin</a> --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Localisation</th>
                <th>Email</th>
                <th>Téléphone 01</th>
                <th>Téléphone 02</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
                <tr>
                    <td>{{ $store->id }}</td>
                    <td>{{ $store->name }}</td>
                    <td>{{ $store->location }}</td>
                    <td>{{ $store->email }}</td>
                    <td>{{ $store->phone1 }}</td>
                    <td>{{ $store->phone2 }}</td>
                    <td>
                        <a href="{{ route('admin.stores.edit', $store->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
