@extends('frontend.layouts.master')

@section('content')

<div class="page-header">
    <div class="container">
        <h1 class="page-title mb-0">Mon Compte</h1>
    </div>
</div>
<!-- End of Page Header -->

<!-- End of Breadcrumb -->

<!-- Start of PageContent -->
<div class="page-content pt-2">
    <div class="container">
        <h1>Détails de la Commande #{{ $order->id }}</h1>

        <div class="order-summary">
            <p><strong>Date de commande:</strong> {{ $order->created_at->format('d-m-Y') }}</p>
            <p><strong>Status de la commande:</strong> {{ $order->status }}</p>
            <p><strong>Total de la commande:</strong> {{ number_format($order->total, 2) }} FCFA</p>
        </div>

        <h3>Articles de la commande</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->orderDetails as $detail)
                    <tr>
                        <td>{{ $detail->article ? $detail->article->name : 'Article non disponible' }}</td>

                        <td>{{ $detail->quantity }}</td>
                        <td>{{ number_format($detail->price, 2) }}</td>
                        <td>{{ number_format($detail->quantity * $detail->price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="/home#account-orders" class="btn btn-primary mb-5">Retour à la liste des commandes</a>
    </div>
</div>
<!-- End of PageContent -->

@endsection
