@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h2>Générer le Code-Barres pour l'article : {{ $article->name }}</h2>

    <form action="{{ route('admin.codeBarres.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantité</label>
            <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
        </div>

        <div class="mb-3">
            <label for="show_name" class="form-check-label">Afficher le nom</label>
            <input type="checkbox" class="form-check-input" name="show_name" checked>
        </div>

        <div class="mb-3">
            <label for="show_price" class="form-check-label">Afficher le prix</label>
            <input type="checkbox" class="form-check-input" name="show_price" checked>
        </div>

        <div class="mb-3">
            <label for="show_promo" class="form-check-label">Afficher la promotion</label>
            <input type="checkbox" class="form-check-input" name="show_promo">
        </div>

        <div class="mb-3">
            <label for="show_discount" class="form-check-label">Afficher la remise</label>
            <input type="checkbox" class="form-check-input" name="show_discount">
        </div>

        <input type="hidden" name="product_id" value="{{ $article->id }}">
        <input type="hidden" name="promotion_type" value="{{ $article->promotion_type }}">
        <input type="hidden" name="promotion_value" value="{{ $article->promotion_value }}">

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Générer et Imprimer</button>
        </div>
    </form>
</div>
@endsection
