@extends('frontend.layouts.master')

@section('content')

<div class="page-header">
    <div class="container">
        <h1 class="page-title mb-0">Mon Compte</h1>
    </div>
</div>
<!-- End of Page Header -->

<!-- Start of Breadcrumb -->
{{-- <nav class="breadcrumb-nav">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Accueil</a></li>
            <li>Mon Compte</li>
        </ul>
    </div>
</nav> --}}
<!-- End of Breadcrumb -->

<!-- Start of PageContent -->
<div class="page-content pt-2">
    <div class="container">
        <div class="tab tab-vertical row gutter-lg">
            <ul class="nav nav-tabs mb-6" role="tablist">
                <li class="nav-item">
                    <a href="#account-dashboard" class="nav-link active">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="#account-orders" class="nav-link">Mes commandes</a>
                </li>
                {{-- <li class="nav-item">
                    <a href="#account-downloads" class="nav-link">Downloads</a>
                </li> --}}
                <li class="nav-item">
                    <a href="#account-addresses" class="nav-link">Adresses</a>
                </li>
                <li class="nav-item">
                    <a href="#account-details" class="nav-link">Mon Compte</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Mes Souhaits</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link" style="color: inherit; text-decoration: none;">
                            Se Déconnecter
                        </button>
                    </form>
                </li>
                
            </ul>

            <div class="tab-content mb-6">
                <div class="tab-pane active in" id="account-dashboard">
                    <p class="greeting">
                        Hello
                        <span class="text-dark font-weight-bold">{{ Auth::user()->name }}</span>
                        (Vous n'êtes pas
                        <span class="text-dark font-weight-bold">{{ Auth::user()->name }}</span>?
                        <a href="{{ route('logout') }}" class="text-primary" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Se Déconnecter
                        </a>)
                    </p>
                    
                    <!-- Formulaire de déconnexion -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    

                    <p class="mb-4">
                        Depuis le tableau de bord de votre compte, vous pouvez vous voir les <a href="#account-orders"
                            class="text-primary link-to-tab">commandes passées</a>,
                            gérer votre <a href="#account-addresses" class="text-primary link-to-tab">expédition
                                et facturation
                                adresses</a>, et
                        <a href="#account-details" class="text-primary link-to-tab">modifiez votre mot de passe et
                            détails du compte.</a>
                    </p>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                            <a href="#account-orders" class="link-to-tab">
                                <div class="icon-box text-center">
                                    <span class="icon-box-icon icon-orders">
                                        <i class="w-icon-orders"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <p class="text-uppercase mb-0">Mes Commandes</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                            <a href="#account-downloads" class="link-to-tab">
                                <div class="icon-box text-center">
                                    <span class="icon-box-icon icon-download">
                                        <i class="w-icon-download"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <p class="text-uppercase mb-0">Downloads</p>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                            <a href="#account-addresses" class="link-to-tab">
                                <div class="icon-box text-center">
                                    <span class="icon-box-icon icon-address">
                                        <i class="w-icon-map-marker"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <p class="text-uppercase mb-0">Adresses</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                            <a href="#account-details" class="link-to-tab">
                                <div class="icon-box text-center">
                                    <span class="icon-box-icon icon-account">
                                        <i class="w-icon-user"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <p class="text-uppercase mb-0">Mon Compte</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                            <a href="#" class="link-to-tab">
                                <div class="icon-box text-center">
                                    <span class="icon-box-icon icon-wishlist">
                                        <i class="w-icon-heart"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <p class="text-uppercase mb-0">Mes Souhaits</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                            <a href="{{ route('logout') }}" 
                        onclick="event.preventDefault(); 
                                    document.getElementById('logout-form').submit();">
                            <div class="icon-box text-center">
                                <span class="icon-box-icon icon-logout">
                                    <i class="w-icon-logout"></i>
                                </span>
                                <div class="icon-box-content">
                                    <p class="text-uppercase mb-0">Se Déconnecter</p>
                                </div>
                            </div>
                        </a>

                        <!-- Formulaire de déconnexion -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        </div>
                    </div>
                </div>

                <div class="tab-pane mb-4" id="account-orders">
                    <div class="icon-box icon-box-side icon-box-light">
                        <span class="icon-box-icon icon-orders">
                            <i class="w-icon-orders"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title text-capitalize ls-normal mb-0">Mes Commandes</h4>
                        </div>
                    </div>

                    <table class="shop-table account-orders-table mb-6">
                        <thead>
                            <tr>
                                <th class="order-id">N°</th>
                                <th class="order-date">Date</th>
                                <th class="order-status">Status</th>
                                <th class="order-total">Quantité</th>
                                <th class="order-total">Coût</th>
                                <th class="order-actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $order)
                                <tr>
                                    <td class="order-id">#{{ $order->order_number }}</td>
                                    <td class="order-date">{{ $order->created_at->format('d F, Y H:i:s') }}</td>
                                    <td class="order-status">
                                        @switch($order->status)
                                            @case('pending')
                                                En attente
                                                @break

                                            @case('available')
                                                Disponible au magasin
                                                @break
                                    
                                            @case('shipped')
                                                Expédiée
                                                @break
                                    
                                            @case('delivered')
                                                Recupéré
                                                @break
                                    
                                            @case('cancelled')
                                                Annulée
                                                @break
                                    
                                            @default
                                                Statut inconnu
                                        @endswitch
                                    </td>
                                                                        <td class="order-total">
                                        <span class="order-quantity">{{ $order->orderDetails->sum('quantity') }}</span> article(s)
                                    </td>
                                    <td class="order-total">
                                        <span class="order-price">{{ $order->orderDetails->sum(fn($detail) => $detail->quantity * $detail->unit_price) }}</span> FCFA
                                    </td>
                                    <td class="order-action">
                                        <a href="{{ route('home.orders.show', $order->id) }}"
                                            class="btn btn-outline btn-default btn-block btn-sm btn-rounded">Voir</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Aucune commande trouvée.</td>
                                </tr>
                            @endforelse
                        </tbody>
                        
                    </table>

                    <a href="/magasin" class="btn btn-dark btn-rounded btn-icon-right">Aller au magasin<i class="w-icon-long-arrow-right"></i></a>
                </div>

                <div class="tab-pane" id="account-downloads">
                    <div class="icon-box icon-box-side icon-box-light">
                        <span class="icon-box-icon icon-downloads mr-2">
                            <i class="w-icon-download"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title ls-normal">Downloads</h4>
                        </div>
                    </div>
                    <p class="mb-4">No downloads available yet.</p>
                    <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Aller au magasin<i class="w-icon-long-arrow-right"></i></a>
                </div>

                <div class="tab-pane" id="account-addresses">
                    <div class="icon-box icon-box-side icon-box-light">
                        <span class="icon-box-icon icon-map-marker">
                            <i class="w-icon-map-marker"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title mb-0 ls-normal">Adresse</h4>
                        </div>
                    </div>
                    <p>Les adresses suivantes seront utilisées par défaut sur la page de paiement.</p>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!-- Adresse de Livraison -->
                    <div class="row">
                        <div class="col-sm-6 mb-6">
                            <div class="ecommerce-address billing-address pr-lg-8">
                                <h4 class="title title-underline ls-25 font-weight-bold">Adresse de livraison</h4>
                                <address class="mb-4">
                                    <table class="address-table">
                                        <tbody>
                                            <tr>
                                                <th>Nom :</th>
                                                <td>{{ Auth::user()->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Commune :</th>
                                                <td id="communeText">{{ Auth::user()->address->commune ?? 'Non défini' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Lieu de livraison :</th>
                                                <td id="townText">{{ Auth::user()->address->lieu_livraison ?? 'Non défini' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Téléphone :</th>
                                                <td>{{ Auth::user()->phone ?? 'Non défini' }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </address>
                                <button class="btn btn-link btn-underline btn-icon-right text-primary" data-bs-toggle="modal"
                                    data-bs-target="#editAddressModal">
                                    Modifier votre adresse<i class="w-icon-long-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de modification de l'adresse -->
                    <div class="modal fade" id="editAddressModal" tabindex="-1" aria-labelledby="editAddressModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editAddressModalLabel">Modifier l'adresse</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('home.update.address') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label>Commune *</label>
                                            <select name="commune" class="form-control" id="commune">
                                                <option value="">Sélectionner une commune</option>
                                                @foreach (['Abobo', 'Adjame', 'Attécoube', 'Ayaman', 'Cocody', 'Koumassi', 'Marcory', 'Treichville', 'Port-Bouet', 'interieur'] as $commune)
                                                    <option value="{{ $commune }}" 
                                                        {{ old('commune', Auth::user()->address->commune ?? '') == $commune ? 'selected' : '' }}>
                                                        {{ $commune }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label>Lieu de livraison *</label>
                                            <input type="text" class="form-control" name="lieu_livraison" id="lieu_livraison" 
                                                value="{{ old('lieu_livraison', Auth::user()->address->lieu_livraison ?? '') }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Téléphone 1</label>
                                            <input type="text" class="form-control" id="phone01" name="phone01"
                                            value="{{ old('lieu_livraison', Auth::user()->address->phone01 ?? '') }}" required>

                                            
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Téléphone 2</label>
                                            <input type="text" class="form-control" id="phone02" name="phone02"
                                            value="{{ old('lieu_livraison', Auth::user()->address->phone02 ?? '') }}" required>

                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="account-details">
                    <div class="icon-box icon-box-side icon-box-light">
                        <span class="icon-box-icon icon-account mr-2">
                            <i class="w-icon-user"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title mb-0 ls-normal">Détails du compte</h4>
                        </div>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            
                <form class="form account-details-form" action="{{ route('home.account.update') }}" method="post">
                    @csrf
                    <div class="row">
                        
                        
                    </div>
            
                    <div class="form-group mb-3">
                        <label for="display-name">Pseudo *</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control form-control-md mb-0">
                        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
            
                    <div class="form-group mb-3">
                        <label for="email_1">Email *</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control form-control-md" disabled >
                        @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email_1">Numéro de téléphone *</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" class="form-control form-control-md" required >
                        @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
            
                    <h4 class="title title-password ls-25 font-weight-bold">Modifier le mot de passe</h4>
            
                    <div class="form-group">
                        <label class="text-dark" for="cur-password">Mot de passe actuel (laissez vide pour laisser inchangé)</label>
                        <input type="password" class="form-control form-control-md" id="cur-password" name="cur_password">
                        @error('cur_password')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
            
                    <div class="form-group">
                        <label class="text-dark" for="new-password">Nouveau mot de passe (laissez vide pour laisser inchangé)</label>
                        <input type="password" class="form-control form-control-md" id="new-password" name="new_password">
                        @error('new_password')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
            
                    <div class="form-group mb-10">
                        <label class="text-dark" for="conf-password">Confirmez le mot de passe</label>
                        <input type="password" class="form-control form-control-md" id="new_password_confirmation " name="new_password_confirmation">
                        @error('new_password_confirmation ')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
            
                    <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4">Enregistrer les modifications</button>
                </form>

                    
                       
                                
                </div>
                <!-- End of PageContent -->

@endsection

