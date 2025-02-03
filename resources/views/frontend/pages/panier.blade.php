@extends('frontend.layouts.master')

@push('styles')
<style>
    .select-box select, .select-menu select{
        max-width: 100% !important;
    }
    @media (max-width: 992px) {
        .cart-action{
        flex-direction: column !important
        }
        .cart-action a{
            margin-bottom: 20px !important;
            width: 100%;
        }
        .cart-action form{
            margin-bottom: 20px;
        }
        .cart-action form button{
            width: 100%;
        }
    }
    
    </style>
@endpush

@section('content')
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb shop-breadcrumb bb-no">
                <li class="active"><a href="/panier">Panier d'achat</a></li>
                <li><a href="#">Vérification</a></li>
                <li><a href="#">Commande terminée</a></li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of PageContent -->
    <div class="page-content">
        <div class="container">
            @if(session('cart', []) && count(session('cart')) > 0)
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
                                            @if($details['promotion_type'] == 'percentage' && $details['promotion_value'])
                                                @php
                                                    // Calcul du prix après remise en pourcentage
                                                    $discountedPrice = $details['price'] - ($details['price'] * $details['promotion_value'] / 100);
                                                @endphp
                                                <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                <del class="old-price">{{ number_format($details['price'], 0, '', '') }} FCFA</del>
                                            @elseif($details['promotion_type'] == 'fixed' && $details['promotion_value'])
                                                @php
                                                    // Calcul du prix après remise en montant fixe
                                                    $discountedPrice = $details['price'] - $details['promotion_value'];
                                                @endphp
                                                <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                <del class="old-price">{{ number_format($details['price'], 0, '', '') }} FCFA</del>
                                            @else
                                                <ins class="new-price">{{ number_format($details['price'], 0, '', '') }} FCFA</ins>
                                            @endif
                                            {{-- <span class="amount">{{ number_format($details['price'], 2) }} FCFA</span> --}}
                                        </td>
                                        <td class="product-quantity">
                                            <div class="input-group">
                                                {{-- <span>{{ $details['quantite'] }}</span> --}}
                                                <input class="quantite form-control" type="text" name="cart[{{ $product_id }}]"  value="{{ $details['quantite'] ? : 1 }}" data-product-id="{{ $product_id }}">
                                                <button class="quantity-plus w-icon-plus"></button>
                                                <button class="quantity-minus w-icon-minus"></button>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">{{ number_format($details['price'] * $details['quantite'], 2) }} FCFA</span>
                                        </td>
                                        <input type="hidden" name="store_id" value="{{ $details['store_id'] }}">
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
        
                        <div class="row">
                            <div class="cart-action mb-6 mt-5 d-flex">
                                <a href="/magasin" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto ">
                                    <i class="w-icon-long-arrow-left"></i>Continuer vos achats
                                </a>
                                <form action="{{ route('clearCart') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-rounded btn-default btn-clear mr-3" id="clearCartButton">Vider le panier</button>
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
                                        <label class="shipping-title text-dark font-weight-bold">Livraison</label> <br>
                                    </li>
                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="free-shipping" class="custom-control-input" name="shipping" value="free-shipping">
                                            <label for="free-shipping" class="custom-control-label color-dark">Gratuite à partir de 200.000 FCFA</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="flat-rate" class="custom-control-input" name="shipping" value="flat-rate">
                                            <label for="flat-rate" class="custom-control-label color-dark">Payer la livraison</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="local-pickup" class="custom-control-input" name="shipping" value="local-pickup">
                                            <label for="local-pickup" class="custom-control-label color-dark">Au magasin</label>
                                        </div>
                                    </li>
                                </ul>
        
                                <div class="shipping-calculator">
                                    <form class="shipping-calculator-form" action="{{ route('updateTotaux') }}" method="POST"  id="shipping-form">
                                        @csrf
                                        
                                        <div class="form-group mb-3">
                                            <div class="select-box">
                                                <select name="state" class="form-control form-control-md">
                                                    <option value="default" selected="selected">Sélectionner la Commune de livraison</option>
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
        
                                        <button type="button" class="btn btn-dark btn-outline btn-rounded mt-5 updateButton">Mettre à jour Totaux</button>

                                        {{-- <button type="submit" class="btn btn-dark btn-outline btn-rounded mt-5">Mettre à jour Totaux</button> --}}
                                    </form>
                                </div>
        
                                <hr class="divider">
                                
                                <div class="order-total d-flex justify-content-between align-items-center mb-3">
                                    <label>Totaux:</label>
                                    
                                    <span class="ls-50"> {{ number_format($total, 2) }} FCFA</span>
                                </div>
                                <a href="{{ route('checkout') }}" class="btn btn-block btn-dark btn-icon-right btn-rounded btn-checkout">
                                    Passer à la caisse <i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <!-- Message lorsque le panier est vide -->
                    <div class="col-md-12 mb-4">
                        <div class="alert alert-success alert-button show-code-action">
                            <a href="/magasin" class="btn btn-success btn-rounded">Continuer vos achats</a>
                            Votre panier est vide. Ajoutez des articles pour passer une commande.
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    
    <!-- End of PageContent -->
@endsection

@push('scripts') 
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let freeShipping = document.getElementById("free-shipping");
        let flatRate = document.getElementById("flat-rate");
        let localPickup = document.getElementById("local-pickup");
        let formFields = document.querySelectorAll(".shipping-calculator-form input, .shipping-calculator-form select");
        let updateButton = document.querySelector('.updateButton'); // Bouton "Mettre à jour Totaux"
        let updateCartButton = document.querySelector('.btn-update'); // Bouton "Mettre à jour le panier"

        // Fonction pour activer ou désactiver les champs du formulaire
        function toggleFormFields(disable) {
            formFields.forEach(function(field) {
                field.disabled = disable;
            });
        }

        // Désactiver les champs du formulaire si l'option "Au magasin" est sélectionnée
        localPickup.addEventListener('change', function() {
            if (localPickup.checked) {
                toggleFormFields(true); // Désactiver les champs
            }
        });

        // Réactiver les champs du formulaire si "Livraison gratuite" ou "Payer la livraison" est sélectionné
        freeShipping.addEventListener('change', function() {
            if (freeShipping.checked || flatRate.checked) {
                toggleFormFields(false); // Réactiver les champs
            }
        });

        flatRate.addEventListener('change', function() {
            if (freeShipping.checked || flatRate.checked) {
                toggleFormFields(false); // Réactiver les champs
            }
        });

        // Vérifier si le total atteint 200000 FCFA pour activer "Livraison gratuite"
        let total = parseFloat("{{ $total }}");
        if (total >= 200000) {
            freeShipping.checked = true;
            toggleFormFields(false); // Réactiver les champs
        }

        // Écouter les champs de quantité pour activer le bouton de mise à jour
        document.querySelectorAll('.quantity').forEach(function (input) {
            input.addEventListener('input', function () {
                updateCartButton.classList.remove('disabled'); // Retirer la classe disabled du bouton "Mettre à jour le panier"
            });
        });

        // 1. Fonction pour mettre à jour les totaux (sous-total + frais de livraison)
        if (updateButton) {
            updateButton.addEventListener('click', function (e) {
                e.preventDefault(); // Empêcher le rechargement de la page

                updateTotal(); // Mettre à jour le total (avec frais de livraison)
            });
        }

        // 2. Fonction pour mettre à jour le panier (quantité, éléments)
        if (updateCartButton) {
            updateCartButton.addEventListener('click', function (e) {
                e.preventDefault(); // Empêcher la soumission classique

                let form = document.getElementById('shipping-form');
                let formData = new FormData(form);

                // Envoi des données du panier pour mise à jour
                fetch('{{ route('updateCart') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Optionnel : Afficher un message de succès
                        alert(data.message);
                        // Vous pouvez aussi rafraîchir certains éléments du panier ici si nécessaire.
                    }
                })
                .catch(error => {
                    console.error('Erreur lors de la mise à jour du panier:', error);
                });
            });
        }

        // Fonction pour calculer et mettre à jour le total avec frais de livraison
        function updateTotal() {
            let total = parseFloat("{{ number_format($total, 2) }}");  // Total initial
            let shippingCost = 0;  // Coût de la livraison

            // Déterminer le coût de la livraison en fonction de l'option choisie
            if (freeShipping.checked) {
                shippingCost = 0;  // Livraison gratuite
            } else if (localPickup.checked) {
                shippingCost = 0;  // Pas de frais pour le magasin
            } else if (flatRate.checked) {
                shippingCost = 2000;  // Livraison payante
            }

            // Calculer le total final
            let finalTotal = total + shippingCost;

            // Mettre à jour l'affichage du total
            document.getElementById('total-amount').textContent = finalTotal.toFixed(2) + ' FCFA'; // Affiche avec 2 décimales
            document.getElementById('cart-total').textContent = finalTotal.toFixed(2) + ' FCFA'; // Mettre à jour le total du panier
        }
    });
</script>



{{-- <script>
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
        document.querySelectorAll('.quantite').forEach(function (input) {
            let product_id = input.getAttribute('data-product-id'); // Récupérer l'ID du produit
            let quantite = input.value; // Nouvelle quantité

            // Ajouter l'ID du produit et la quantité dans l'objet cart
            cart[product_id] = quantite;
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
                //location.reload(); // Recharger la page pour afficher le panier mis à jour
            }
        })
        .catch(error => {
            console.error('Erreur lors de la mise à jour du panier:', error);
        });
    });
});


</script> --}}



@endpush