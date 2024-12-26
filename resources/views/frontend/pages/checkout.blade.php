@extends('frontend.layouts.master')

@section('content')
     <!-- Start of Breadcrumb -->
     <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb shop-breadcrumb bb-no">
                <li class="passed"><a href="cart.html">Shopping Cart</a></li>
                <li class="active"><a href="checkout.html">Checkout</a></li>
                <li><a href="order.html">Order Complete</a></li>
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
                    {{-- <div class="col-lg-7 pr-lg-4 mb-4">
                        <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                            Billing Details
                        </h3>
                        <div class="row gutter-sm">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>First name *</label>
                                    <input type="text" class="form-control form-control-md" name="firstname"
                                       value="kodak" required>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Last name *</label>
                                    <input type="text" class="form-control form-control-md" name="lastname"
                                    value="kodak" required>
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
                                class="form-control form-control-md mb-2" name="street-address-1" value="kodak" required>
                            <input type="text" placeholder="Apartment, suite, unit, etc. (optional)"
                                class="form-control form-control-md" name="street-address-2" value="kodak" required>
                        </div>
                        <div class="row gutter-sm">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Town / City *</label>
                                    <input type="text" class="form-control form-control-md" name="town" value="kodak" required>
                                </div>
                                <div class="form-group">
                                    <label>ZIP *</label>
                                    <input type="text" class="form-control form-control-md" name="zip" value="kodak" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State *</label>
                                    <div class="select-box">
                                        <select name="country" class="form-control form-control-md">
                                            <option value="default" selected="selected">California</option>
                                            <option value="uk">United Kingdom (UK)</option>
                                            <option value="us">United States</option>
                                            <option value="fr">France</option>
                                            <option value="aus">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Phone *</label>
                                    <input type="text" class="form-control form-control-md" name="phone" value="kodak" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-7">
                            <label>Email address *</label>
                            <input type="email" class="form-control form-control-md" name="email" value="kodak@gmail.com" required>
                        </div>
                        <div class="form-group checkbox-toggle pb-2">
                            <input type="checkbox" class="custom-checkbox" id="shipping-toggle"
                                name="shipping-toggle">
                            <label for="shipping-toggle">Ship to a different address?</label>
                        </div>
                        <div class="checkbox-content">
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
                        </div>

                        <div class="form-group mt-3">
                            <label for="order-notes">Order notes (optional)</label>
                            <textarea class="form-control mb-0" id="order-notes" name="order-notes" cols="30"
                                rows="4"
                                placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                        </div>
                    </div> --}}
                    <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                        <div class="order-summary-wrapper sticky-sidebar">
                            <h3 class="title text-uppercase ls-10">Your Order</h3>
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
                                                <td class="product-total">${{ number_format($item['price'] * $item['quantite'], 2) }}</td>
                                            </tr>
                                        @endforeach

                                        <tr class="cart-subtotal bb-no">
                                            <td>
                                                <b>Sous-total</b>
                                            </td>
                                            <td>
                                                <b>${{ number_format($subtotal, 2) }}</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="shipping-methods">
                                            <td colspan="2" class="text-left">
                                                <h4 class="title title-simple bb-no mb-1 pb-0 pt-3">Expédition</h4>
                                                <ul id="shipping-method" class="mb-4">
                                                    <li>
                                                        <div class="custom-radio">
                                                            <input type="radio" id="free-shipping" class="custom-control-input" name="shipping">
                                                            <label for="free-shipping" class="custom-control-label color-dark">Livraison gratuite</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-radio">
                                                            <input type="radio" id="local-pickup" class="custom-control-input" name="shipping">
                                                            <label for="local-pickup" class="custom-control-label color-dark">Retrait local</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-radio">
                                                            <input type="radio" id="flat-rate" class="custom-control-input" name="shipping">
                                                            <label for="flat-rate" class="custom-control-label color-dark">Tarif forfaitaire : $5.00</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>
                                                <b>Total</b>
                                            </th>
                                            <td>
                                                <b>${{ number_format($subtotal + 5, 2) }}</b> <!-- Ajoutez le coût de l'expédition -->
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>

                                <div class="payment-methods" id="payment_method">
                                    <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Méthodes de paiement</h4>
                                    <div class="accordion payment-accordion">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#cash-on-delivery" class="collapse">Transfert bancaire direct</a>
                                            </div>
                                            <div id="cash-on-delivery" class="card-body expanded">
                                                <p class="mb-0">
                                                    Effectuez votre paiement directement sur notre compte bancaire. Utilisez votre ID de commande comme référence de paiement. Votre commande ne sera pas expédiée tant que les fonds ne seront pas arrivés.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#payment" class="expand">Paiements par chèque</a>
                                            </div>
                                            <div id="payment" class="card-body collapsed">
                                                <p class="mb-0">
                                                    Veuillez envoyer un chèque à Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#delivery" class="expand">Paiement à la livraison</a>
                                            </div>
                                            <div id="delivery" class="card-body collapsed">
                                                <p class="mb-0">
                                                    Payez en espèces lors de la livraison.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card p-relative">
                                            <div class="card-header">
                                                <a href="#paypal" class="expand">Paypal</a>
                                            </div>
                                            <a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" class="text-primary paypal-que" 
                                                onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal',
                                                'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); 
                                                return false;">Qu'est-ce que PayPal ?
                                            </a>
                                            <div id="paypal" class="card-body collapsed">
                                                <p class="mb-0">
                                                    Payez via PayPal, vous pouvez utiliser votre carte de crédit si vous n'avez pas de compte PayPal.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-group pt-6">
                    <button type="submit" class="btn btn-dark btn-block btn-rounded">Passer la commande</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End of PageContent -->
@endsection