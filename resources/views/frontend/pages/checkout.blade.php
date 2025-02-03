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
     <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb shop-breadcrumb bb-no">
                <li class="passed"><a href="/panier">Panier</a></li>
                <li class="active"><a href="#">Vérification</a></li>
                <li><a href="#">Commande terminée</a></li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->


    <!-- Start of PageContent -->
    <div class="page-content">
        <div class="container">
           
           
            
            
            <form  method="POST" action="{{ route('order.store') }}">
                @csrf
                <div class="row mb-9">
                    <div class="col-lg-7 pr-lg-4 mb-4">
                        <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                            Détails de facturation
                        </h3>
                        <div class="row gutter-sm">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Prénoms *</label>
                                    <input type="text" class="form-control form-control-md" name="firstname"
                                       value="kodak" required>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Nom *</label>
                                    <input type="text" class="form-control form-control-md" name="lastname"
                                    value="kodak" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label>Pays/Région * <strong>Côte D'Ivoire</strong></label>
                            <input type="hidden" name="pays" value="Côte D'Ivoire">
                        </div>
                        <div class="form-group mb-3">
                            <label>Commune *</label>
                            <div class="select-box">
                                <select name="" class="form-control form-control-md">
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
                            <label>Lieu de livraison *</label>
                            <input type="text" class="form-control form-control-md" name="town" value="kodak" required>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Téléphone 01 *</label>
                                    <input type="phone" class="form-control form-control-md" name="phone01" value="0101010101" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Téléphone 02 *</label>
                                    <input type="phone" class="form-control form-control-md" name="phone02" value="0202020202" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" class="form-control form-control-md" name="email" value="kodak@gmail.com" required>
                        </div>
                        {{-- <div class="form-group checkbox-toggle pb-2">
                            <input type="checkbox" class="custom-checkbox" id="shipping-toggle"
                                name="shipping-toggle">
                            <label for="shipping-toggle">Ship to a different address?</label>
                        </div> --}}
                        {{-- <div class="checkbox-content">
                            <div class="row gutter-sm">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>First name *</label>
                                        <input type="text" class="form-control form-control-md" name="firstname" 
                                            required>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Last name *</label>
                                        <input type="text" class="form-control form-control-md" name="lastname"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Company name (optional)</label>
                                <input type="text" class="form-control form-control-md" name="company-name">
                            </div>
                            <div class="form-group">
                                <label>Country / Region *</label>
                                <div class="select-box">
                                    <select name="country" class="form-control form-control-md">
                                        <option value="default" selected="selected">United States
                                            (US)
                                        </option>
                                        <option value="uk">United Kingdom (UK)</option>
                                        <option value="us">United States</option>
                                        <option value="fr">France</option>
                                        <option value="aus">Australia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Street address *</label>
                                <input type="text" placeholder="House number and street name"
                                    class="form-control form-control-md mb-2" name="street-address-1" required>
                                <input type="text" placeholder="Apartment, suite, unit, etc. (optional)"
                                    class="form-control form-control-md" name="street-address-2" required>
                            </div>
                            <div class="row gutter-sm">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Town / City *</label>
                                        <input type="text" class="form-control form-control-md" name="town" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Postcode *</label>
                                        <input type="text" class="form-control form-control-md" name="postcode" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country (optional)</label>
                                        <input type="text" class="form-control form-control-md" name="zip" required>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group mt-3">
                            <label for="order-notes">Notes de commande (facultatif)</label>
                            <textarea class="form-control mb-0" id="order-notes" name="order-notes" cols="30"
                                rows="4"
                                placeholder="Notes concernant votre commande, par exemple des notes spéciales pour la livraison. ex: consignes"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                        <div class="order-summary-wrapper sticky-sidebar">
                            <h3 class="title text-uppercase ls-10">Panier</h3>
                            @php
                                // Supposons que les produits du panier soient stockés dans la session sous 'cart'
                                $cartItems = session('cart', []);
                                $subtotal = 0;
                            @endphp

                            <div class="order-summary">
                                <table class="order-table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">
                                                <b>Produit</b>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $item)
                                            @php
                                                $subtotal += $item['price'] * $item['quantite'];
                                            @endphp
                                            <tr class="bb-no">
                                                <td class="product-name">{{ $item['name'] }} <i class="fas fa-times"></i> <span class="product-quantity">{{ $item['quantite'] }}</span></td>
                                                <td class="product-total">{{ number_format($item['price'] * $item['quantite'], 2) }} FCFA</td>
                                                <input type="hidden" value="{{$item ['id'] }}" name="product_id">
                                                <input type="hidden" name="store_id" value="{{ $item['store_id'] }}">
                                            </tr>
                                        @endforeach

                                        <tr class="cart-subtotal bb-no">
                                            <td>
                                                <b>Sous-total</b>
                                            </td>
                                            <td>
                                                <b>{{ number_format($subtotal, 2) }} FCFA</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="shipping-methods">
                                            <td colspan="2" class="text-left">
                                                <h4 class="title title-simple bb-no mb-1 pb-0 pt-3">Livraison</h4>
                                                <span>Afficher le cout de la livraison s'il a choisi. sinon afficher a passer au magasin</span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>
                                                <b>Total</b>
                                            </th>
                                            <td>
                                                <b>{{ number_format($subtotal, 2) }} FCFA</b> <!-- Ajoutez le coût de l'expédition -->
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>

                                <div class="payment-methods" id="payment_method">
                                    <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Méthodes de paiement</h4>
                                    <div class="payment_box payment_method_cod">
                                        <p>Payer en argent comptant à la livraison.<br>
                                        Pour les expéditions à l’intérieur, les frais peuvent varier</p>
                                    </div>
                                </div>

                                
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-group pt-6 mb-5">
                    <button type="submit" class="btn btn-dark btn-block btn-rounded">Passer la commande</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End of PageContent -->
@endsection