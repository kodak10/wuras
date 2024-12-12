



<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg" style="color: #ffffff">Bienvenue dans le message du magasin Wuras !</p>
            </div>
            <div class="header-right">
                
              
                <span class="divider d-lg-show"></span>
                <a href="#" class="text-normal d-lg-show">FAQs</a>
                <a href="#" class="d-lg-show login sign-in"><i
                        class="w-icon-account"></i>Connexion</a>
                <span class="delimiter d-lg-show">/</span>
                <a href="#" class="ml-0 d-lg-show login register">Inscription</a>
            </div>
        </div>
    </div>
    <!-- End of Header Top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                </a>
                <a href="/" class="logo ml-lg-0">
                    <img src="{{asset('assets/images/logo.png')}}" alt="logo" width="144" height="45" />
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
                    <input type="text" class="form-control" name="search" id="search" placeholder="Tapez ici..." value="{{ request('search') }}" required />
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
                <a class="wishlist label-down link d-xs-show" href="#">
                    <i class="w-icon-heart"></i>
                    <span class="wishlist-label d-lg-show">Liste de souhaits</span>
                </a>
                <a class="compare label-down link d-xs-show" href="#">
                    <i class="w-icon-compare"></i>
                    <span class="compare-label d-lg-show">Comparaison</span>
                </a>
                <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link">
                        <i class="w-icon-cart">
                            <span class="cart-count">2</span>
                        </i>
                        <span class="cart-label">Panier</span>
                    </a>
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <span>Panier</span>
                            <a href="#" class="btn-close">Fermer<i class="w-icon-long-arrow-right"></i></a>
                        </div>

                        <div class="products">
                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="#" class="product-name">Beige knitted
                                        elas<br>tic
                                        runner shoes</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$25.68</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/cart/product-1.jpg" alt="product" height="84"
                                            width="94" />
                                    </a>
                                </figure>
                                <button class="btn btn-link btn-close" aria-label="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="#" class="product-name">Blue utility
                                        pina<br>fore
                                        denim dress</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$32.99</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/cart/product-2.jpg" alt="product" width="84"
                                            height="94" />
                                    </a>
                                </figure>
                                <button class="btn btn-link btn-close" aria-label="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cart-total">
                            <label>Total:</label>
                            <span class="price">2000 FCFA</span>
                        </div>

                        <div class="cart-action">
                            <a href="#" class="btn btn-dark btn-outline btn-rounded">Voir le Panier</a>
                            <a href="#" class="btn btn-primary  btn-rounded">Payer</a>
                        </div>
                    </div>
                    <!-- End of Dropdown Box -->
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom sticky-content fix-top sticky-header">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left">
                    <nav class="main-nav ml-0">
                        <ul class="menu" >
                            <li class="active">
                                <a href="/">Accueil</a>
                            </li>
                            <li class="" >
                                <a href="{{route('shop')}}" style="color: #000000 !important">Magasin</a>
                            </li>
                            <li>
                                <a href="#" style="color: #000000 !important">Pages</a>
                                <ul>

                                    <li ><a href="#" style="color: #000000 !important">À propos de nous</a></li>
                                    <li ><a href="#" style="color: #000000 !important">Devenez un vendeur</a></li>
                                    <li ><a href="#" style="color: #000000 !important">Contactez-nous</a></li>
                                    <li ><a href="#" style="color: #000000 !important">FAQs</a></li>
                                    
                                </ul>
                            </li>
                            <li class="" >
                                <a href="{{route('admin.articles.index')}}" style="color: #000000 !important">Dashboard | Ajouter des Articles</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Suivre sa Commande</a>
                    <a href="#"><i class="w-icon-sale"></i>Articles en Promotion</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-lg-show">
        <div class="inner-wrap">
            <ul class="menu horizontal-menu category-menu">
                @forelse ($categories as $categorie)
                    <li>
                        <a href="#">
                            <i class="w-icon-electronics"></i>{{ $categorie->name}}
                        </a>
                    </li>
                @empty
                    Rien à afficher
                @endforelse
                <li>
                    <a href="#">
                        <i class="w-icon-dots-circle"></i>Voir tous
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</header>