@extends('frontend.layouts.master')

@push('styles')
<style>
    .select-box select, .select-menu select{
        max-width: 100% !important;
    }
</style>
@endpush

@section('content')
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav mt-5">
        <div class="container">
            <ul class="breadcrumb shop-breadcrumb bb-no">
                <li class="active"><a href="/panier">Shopping Cart</a></li>
                <li><a href="#">Checkout</a></li>
                <li><a href="#">Order Complete</a></li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of PageContent -->
    <div class="page-content">
        <div class="container">
            <div class="row gutter-lg mb-10">
                <div class="col-lg-8 pr-lg-4 mb-6 mt-3">
                    <table class="shop-table cart-table">
                        <thead>
                            <tr>
                                <th class="product-name"><span>Article</span></th>
                                <th></th>
                                <th class="product-price"><span>Prix</span></th>
                                <th class="product-quantity"><span>Quantité</span></th>
                                <th class="product-subtotal"><span>Sous-Total</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(session('cart', []) as $product_id => $details)
                                <tr>
                                    <td class="product-thumbnail">
                                        <div class="p-relative">
                                            <a href="{{ route('article.show', ['slug' => $details['slug']]) }}">
                                                <figure>
                                                    <img src="{{ asset('storage/' . $details['couverture']) }}" alt="product" width="100" height="100">
                                                </figure>
                                            </a>
                                            <form action="{{ route('removeFromCart', $product_id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link btn-close" aria-label="button">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="product-name">
                                        <a href="{{ route('article.show', ['slug' => $details['slug']]) }}">
                                            {{ $details['name'] }}
                                        </a>
                                    </td>
                                    <td class="product-price">
                                        <span class="amount">{{ number_format($details['price'], 2) }} FCFA</span>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="input-group">
                                            <input class="quantity form-control" type="number" min="1" max="100000" value="{{ $details['quantite'] }}" data-product-id="{{ $product_id }}">
                                            <button class="quantity-plus w-icon-plus"></button>
                                            <button class="quantity-minus w-icon-minus"></button>
                                        </div>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="amount">{{ number_format($details['price'] * $details['quantite'], 2) }} FCFA</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
    
                    <div class="row">
                        <div class="cart-action mb-6 mt-5 d-flex">
                            <a href="/magasin" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto">
                                <i class="w-icon-long-arrow-left"></i>Continuer vos achats
                            </a>
                            <form action="{{ route('clearCart') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-rounded btn-default btn-clear mr-3">Vider le panier</button>
                            </form>
                            <button type="submit" class="btn btn-rounded btn-update" name="update_cart" value="Update Cart" id="updateCartButton">Mettre à jour le panier</button>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 sticky-sidebar-wrapper">
                    <div class="sticky-sidebar">
                        <div class="cart-summary mb-4">
                            <h3 class="cart-title text-uppercase">Total du panier</h3>
                            <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                <label class="ls-25">Sous-Total</label>
                                <span>{{ number_format($total, 2) }} FCFA</span>
                            </div>
    
                            <hr class="divider">
    
                            <ul class="shipping-methods mb-2">
                                <li>
                                    <label class="shipping-title text-dark font-weight-bold">Livraison</label>
                                </li>
                            </ul>
    
                            <div class="shipping-calculator">
                                <form class="shipping-calculator-form" action="" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <div class="select-box">
                                            <select name="country" class="form-control form-control-md">
                                                <option value="CI" selected="selected">Côte D'Ivoire</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="select-box">
                                            <select name="state" class="form-control form-control-md">
                                                <option value="default" selected="selected">Commune</option>
                                                <option value="Abobo">Abobo</option>
                                                <option value="Adjame">Adjamé</option>
                                                <option value="Attécoube">Attécoubé</option>
                                                <option value="Ayaman">Ayaman</option>
                                                <option value="Cocody">Cocody</option>
                                                <option value="Koumassi">Koumassi</option>
                                                <option value="Marcory">Marcory</option>
                                                <option value="Treichville">Treichville</option>
                                                <option value="Port-Bouet">Port-Bouet</option>
                                                <option value="interieur">Intérieur de Pays</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="form-group mb-3">
                                        <input class="form-control form-control-md" type="text" name="location_detail" placeholder="Précision du lieu">
                                    </div>
    
                                    <button type="submit" class="btn btn-dark btn-outline btn-rounded mt-5">Mettre à jour Totaux</button>
                                </form>
                            </div>
    
                            <hr class="divider mb-6">
                            <div class="order-total d-flex justify-content-between align-items-center">
                                <label>Total</label>
                                <span class="ls-50">{{ number_format($total, 2) }} FCFA</span>
                            </div>
                            <a href="{{ route('checkout') }}" class="btn btn-block btn-dark btn-icon-right btn-rounded btn-checkout">
                                Passer à la caisse <i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End of PageContent -->
@endsection

@push('scripts') 
<script>
 document.addEventListener('DOMContentLoaded', function () {
    // Écouter tous les champs de quantité
    document.querySelectorAll('.quantity').forEach(function (input) {
        input.addEventListener('input', function () {
            // Activer le bouton de mise à jour lorsqu'une quantité est modifiée
            document.querySelector('.btn-update').classList.remove('disabled');
        });
    });

    // Action lors du clic sur le bouton "Mettre à jour le panier"
    document.querySelector('.btn-update').addEventListener('click', function () {
        let cart = {};

        // Récupérer les quantités modifiées
        document.querySelectorAll('.quantity').forEach(function (input) {
            let product_id = input.getAttribute('data-product-id'); // Récupérer l'ID du produit
            let quantity = input.value; // Nouvelle quantité

            // Ajouter l'ID du produit et la quantité dans l'objet cart
            cart[product_id] = quantity;
        });

        // Envoi des nouvelles quantités au serveur via une requête AJAX
        fetch('{{ route('updateCart') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ cart: cart })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload(); // Recharger la page pour afficher le panier mis à jour
            }
        })
        .catch(error => {
            console.error('Erreur lors de la mise à jour du panier:', error);
        });
    });
});


</script>

<script>
    document.getElementById('updateCartButton').addEventListener('click', function() {
        alert('Panier mis à jour !');
        // Vous pouvez ajouter la logique pour actualiser le panier ici
    });
</script>

@endpush