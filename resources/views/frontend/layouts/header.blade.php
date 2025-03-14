<style>
    /* form.input-wrapper.header-search.hs-expanded.hs-round.d-none.d-md-flex{
        background-color:#ffffff;
        border-color: none;
    }
    a.product-name:first-child{
    color: #000000 !important;
   } */
   /* Conteneur principal du dropdown */
.dropdown-box {
    /* position: relative; */
    background-color: #fff;
    max-height: 100vh; /* Définir une hauteur maximale pour le dropdown */
    overflow: hidden; /* Empêcher les dépassements */
    display: flex;
    flex-direction: column; /* Organiser les enfants verticalement */
}

/* Section des produits avec scroll */
.products {
    flex: 1; /* Prend tout l'espace disponible */
    overflow-y: auto; /* Permettre le défilement vertical */
    max-height: 300px; /* Ajuster selon vos besoins */
    padding: 10px;
}

/* Section Total et Actions fixées en bas */
.cart-total, .cart-action {
    position: sticky;
    bottom: 0; /* Fixer en bas */
    background-color: #fff; /* Assurez-vous qu'elles restent visibles */
    padding: 10px;
    z-index: 10; /* Assurez-vous qu'elles restent au-dessus */
}

/* Espacement entre les boutons dans cart-action */
.cart-action a {
    margin: 5px;
    text-align: center;
}

.header-bottom .header a:not(.btn){
    color: #fff !important;
}

.header-top a:not(.btn){
    color: #000 !important;
}
</style>


<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg">Bienvenue au magasin Wuras !</p>
            </div>
            <div class="header-right">
                
              
                <span class="divider d-lg-show"></span>
                {{-- <a href="#" class="d-lg-show login sign-in" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <i class="w-icon-account"></i>Connexion
                </a>
                <span class="delimiter d-lg-show">/</span>
                <a href="#" class="ml-0 d-lg-show login register" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Inscription
                </a> --}}
                
                    @auth
                        <!-- Si l'utilisateur est connecté -->
                        <a href="/home" class="d-lg-show">
                            <i class="w-icon-account"></i> Mon compte
                        </a>
                        {{-- <li><a href="/home">Suivre sa commande</a></li> --}}
                    @endauth
                
                    @guest
                        <!-- Si l'utilisateur n'est pas connecté -->
                        <a href="#" class="d-lg-show login sign-in" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="w-icon-account"></i>Connexion
                        
                            <span class="delimiter d-lg-show">/</span>
                            Inscription
                        </a>
                    @endguest
                
                
                
                
            </div>
        </div>
    </div>
    <!-- End of Header Top -->
    <span class="divider d-lg-show"></span>


    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle" style="border: 2px solid #5f5c5c; padding:5px;">
                </a>
                <a href="/" class="logo ml-lg-0">
                    <img src="{{asset('assets/images/logo.webp')}}" alt="logo" width="200" height="100" />
                </a>
                <form method="get" action="{{ route('shop') }}" class="input-wrapper header-search hs-expanded hs-round d-none d-md-flex">
                    <div class="select-box">
                        <select id="category" name="category">
                            <option value="">Toutes les catégories</option>
                            @forelse($categories as $categorie)
                                <option value="{{ $categorie->id }}" {{ request('category') == $categorie->id ? 'selected' : '' }}>
                                    {{ $categorie->name }}
                                </option>
                            @empty
                                <option>Aucune catégorie disponible</option>
                            @endforelse
                        </select>
                    </div>
                    <input type="text" class="form-control" name="search" id="search" placeholder="Tapez ici..." value="{{ request('search') }}" />
                    <button class="btn btn-search" type="submit"><i class="w-icon-search"></i></button>
                </form>
                
            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="w-icon-call"></a>
                    <div class="call-info d-lg-show">
                        <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                            <a href="https://portotheme.com/cdn-cgi/l/email-protection#80a3" class="text-capitalize">Nous contactez </a> au :</h4>
                        <a href="tel:+2250749667007" class="phone-number font-weight-bolder ls-50">07 49 66 70 07</a>
                    </div>
                </div>
                {{-- <a class="wishlist label-down link d-xs-show" href="#">
                    <i class="w-icon-heart"></i>
                    <span class="wishlist-label d-lg-show">Liste de souhaits</span>
                </a> --}}
                {{-- <a class="compare label-down link d-xs-show" href="#">
                    <i class="w-icon-compare"></i>
                    <span class="compare-label d-lg-show">Comparaison</span>
                </a> --}}
                <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link" style="border: 2px solid #5f5c5c; padding:5px;">
                        <i class="w-icon-cart">
                            
                            <span class="cart-count">{{ session()->get('cart', []) ? array_sum(array_column(session()->get('cart', []), 'quantite')) : 0 }}</span>

                            
                        </i>
                        <span class="cart-label">Panier</span>
                    </a>
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <span>Panier</span>
                            <a href="#" class="btn-close"></a>
                        </div>

                        

                        @php $total = 0; @endphp <!-- Initialisation de la variable total -->

                        <div class="products mb-5">
                            @forelse(session('cart', []) as $product_id => $details)
                                @php $total += $details['price']; @endphp <!-- Ajout du prix au total -->
                                <div class="product product-cart">
                                    <div class="product-detail">
                                        <a href="{{ route('article.show', ['slug' => $details['slug']]) }}" class="product-name">
                                            {{ $details['name'] }}
                                        </a>
                                        <div class="price-box">
                                            <span class="product-quantity">{{ $details['quantite']}}</span>
                                            <span class="product-price">{{ number_format($details['price'], 0, ',', ' ') }} FCFA</span>
                                        </div>
                                    </div>
                                    <figure class="product-media">
                                        <a href="{{ route('article.show', ['slug' => $details['slug']]) }}">
                                            <img src="{{ asset('storage/' . $details['couverture']) }}" alt="product" width="94" height="84">
                                        </a>
                                    </figure>
                                    <form action="{{ route('removeFromCart', $product_id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                    {{-- <button class="btn btn-link btn-close" aria-label="button">
                                        <i class="fas fa-times"></i>
                                    </button> --}}
                                </div>
                            @empty

                            <p>Votre panier est vide</p>
                                
                           
                                
                            @endforelse
                        </div>

                        <!-- Section Total Dynamique -->
                        <div class="cart-total">
                            <label>Total :</label>
                            <span class="price">{{ number_format($total, 0, ',', ' ') }} FCFA</span>
                        </div>


                        <div class="cart-action">
                            <a href="{{route('panier')}}" class="btn btn-dark btn-outline btn-rounded">Voir le Panier</a>
                            <a href="{{route('checkout')}}" class="btn btn-primary  btn-rounded">Payer</a>
                        </div>
                    </div>
                    <!-- End of Dropdown Box -->
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom sticky-content fix-top sticky-header mb-5">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left">
                    <nav class="main-nav ml-0">
                        <ul class="menu" >
                            <li class="active">
                                <a href="/">Accueil</a>
                            </li>
                            <li class="" >
                                <a href="{{route('shop')}}">Magasin</a>
                            </li>
                            
                            <li class="" >
                                <a href="#">Contactez-nous</a>
                            </li>
                            
                            
                            @auth
                                <li>
                                    @if (Auth::user()->role == 'admin')
                                        <a href="{{ route('admin.') }}">Tableau de Bord</a>
                                    @elseif (Auth::user()->role == 'manager')
                                        <a href="{{ route('admin.') }}">Tableau de Bord </a>
                                    @elseif (Auth::user()->role == 'employee')
                                        <a href="{{ route('admin.') }}">Tableau de Bord</a>
                                    @endif
                                </li>
                            @endauth

                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="/home#account-orders" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Suivre sa Commande</a>
                    <a href="/magasin#articlePromotion"><i class="w-icon-sale"></i>Articles en Promotion</a>
                </div>
            </div>
        </div>
    </div>
    
</header>

  
  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="login-popup">
            <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                <ul class="nav nav-tabs text-uppercase" role="tablist">
                    <li class="nav-item">
                        <a href="#sign-in" class="nav-link active">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a href="#sign-up" class="nav-link">Inscription</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="sign-in">
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label>Nom d'utilisateur ou adresse e-mail *</label>
                                <input type="text" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group mb-0">
                                <label>Mot de passe *</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="form-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-checkbox" id="remember" name="remember">
                                <label for="remember">Souviens-toi de moi</label>
                                <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>

                            </div>
                            <button type="submit" class="btn btn-primary">
                                Se connecter
                            </button>
                        </form>
                    </div>
                
                    <div class="tab-pane" id="sign-up">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label>Nom *</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="form-group">
                                <label>Votre adresse e-mail *</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label>Votre numéro de téléphone *</label>
                                <input type="text" class="form-control" name="phone" id="phone" required>
                            </div>
                            <div class="form-group mb-5">
                                <label>Mot de passe *</label>
                                <input type="password" class="form-control" name="password" id="password_1" required>
                            </div>
                            <div class="form-group mb-5">
                                <label>Confirmer le mot de passe *</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                            </div>
                            <p>Vos données personnelles seront utilisées pour améliorer votre expérience sur ce site Web, pour gérer l'accès à votre compte et à d'autres fins décrites dans notre <a href="#" class="text-primary">politique de confidentialité</a>.</p>
                            <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                                <input type="checkbox" class="custom-checkbox" id="agree" name="agree" required="">
                                <label for="agree" class="font-size-md">J'accepte la <a href="#" class="text-primary font-size-md">politique de confidentialité</a></label>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                S'inscrire
                            </button>
                        </form>
                    </div>
                </div>
                
                
               
            </div>
        </div>
      </div>
    </div>
  </div>



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
                location.reload(); // Recharger la page pour afficher le panier mis à jour
            }
        })
        .catch(error => {
            console.error('Erreur lors de la mise à jour du panier:', error);
        });
    });
});


</script>

@endpush