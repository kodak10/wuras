<header class="header">
    
    <div class="header-top">
        <div class="container">
           
            <div class="header-right">
                

               
                <!-- End of Dropdown Menu -->
                <span class="divider d-lg-show"></span>
                <a href="#" class="d-lg-show">Mon Compte</a>
                <a href="#" class="d-lg-show login sign-in"><i
                        class="w-icon-account"></i>Se Connecté</a>
                <span class="delimiter d-lg-show">/</span>
                <a href="#" class="ml-0 d-lg-show login register">S'inscrire</a>
                <a href="#" class="d-lg-show">Nous Contactez</a>

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
                    <img src="assets/images/logo.png" alt="logo" width="144" height="45" />
                </a>
                <form method="get" action="#"
                    class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                    <div class="select-box">
                        <select id="category" name="category">
                            <option value="">Toutes les catégories</option>
                            @forelse ( $categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                            @empty
                                Rien à afficher
                            @endforelse
                           
                            
                        </select>
                    </div>
                    <input type="text" class="form-control" name="search" id="search" placeholder="Tapez ici..."
                        required />
                    <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                    </button>
                </form>
            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="w-icon-call"></a>
                    <div class="call-info d-lg-show">
                        <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                            <a href="https://portotheme.com/cdn-cgi/l/email-protection#80a3" class="text-capitalize">Nous contactez </a> au :</h4>
                        <a href="tel:+2250101010101" class="phone-number font-weight-bolder ls-50">01 01 01 01 01</a>
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
    <!-- End of Header Middle -->

    <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left">
                    <div class="dropdown category-dropdown has-border" data-visible="true">
                        <a href="#" class="category-toggle text-dark" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true" data-display="static"
                            title="Browse Categories">
                            <i class="w-icon-category"></i>
                            <span>Parcourir les catégories</span>
                        </a>

                        <div class="dropdown-box">
                            <ul class="menu vertical-menu category-menu">
                                @foreach ($categories as $categorie)
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-shirt"></i>{{$categorie->name}}
                                    </a>
                                    <ul class="megamenu">
                                        {{-- Récupérer tous les tags uniques associés aux articles de la catégorie --}}
                                        @php
                                            $uniqueTags = $categorie->articles->flatMap->tags->unique('id')->take(4); // Limiter à 4 tags
                                        @endphp
                                    
                                        @foreach ($uniqueTags as $tag)
                                            <li>
                                                <h4 class="menu-title">{{ $tag->tag_name }}</h4>
                                                <hr class="divider">
                                                <ul>
                                                    @forelse ($tag->articles->take(5) as $article)  {{-- Limiter à 5 articles par tag --}}
                                                        <li><a href="#">{{ $article->name }}</a></li>
                                                    @empty
                                                        <li>Rien à afficher</li>
                                                    @endforelse
                                                </ul>
                                            </li>
                                        @endforeach
                                    
                                        <li>
                                            <div class="banner-fixed menu-banner menu-banner2">
                                                <figure>
                                                    <img src="{{ asset('storage/images/articles/couverture/' . $categorie->couverture) }}" alt="Menu Banner"
                                                         width="235" height="347" />
                                                </figure>
                                                <div class="banner-content">
                                                    <div class="banner-price-info mb-1 ls-normal">Get up to
                                                        <strong class="text-primary text-uppercase">20%Off</strong>
                                                    </div>
                                                    <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                    <a href="#"
                                                       class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                        Shop Now<i class="w-icon-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                
                            @endforeach
                            <li>
                                <a href="#"
                                    class="font-weight-bold text-primary text-uppercase ls-25">
                                    Voir toutes les catégories<i class="w-icon-angle-right"></i>
                                </a>
                            </li>
                            
                                {{-- <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-home"></i>Home & Garden
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Bedroom</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Beds, Frames &
                                                        Bases</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Nightstands</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Kid's Beds &
                                                        Headboards</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">Living Room</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Coffee Tables</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Futons & Sofa
                                                        Beds</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Cabinets &
                                                        Chests</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Office</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Office Chairs</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Desks</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>
                                                <li><a href="shop-fullwidth-banner.html">File Cabinets</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Breakroom
                                                        Tables</a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">Kitchen & Dining</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Dining Sets</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Kitchen Storage
                                                        Cabinets</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Bashers Racks</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Dining Chairs</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Dining Room
                                                        Tables</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Bar Stools</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="menu-banner banner-fixed menu-banner3">
                                                <figure>
                                                    <img src="assets/images/menu/banner-3.jpg" alt="Menu Banner"
                                                        width="235" height="461" />
                                                </figure>
                                                <div class="banner-content">
                                                    <h4
                                                        class="banner-subtitle font-weight-normal text-white mb-1">
                                                        Restroom</h4>
                                                    <h3
                                                        class="banner-title font-weight-bolder text-white ls-normal">
                                                        Furniture Sale</h3>
                                                    <div
                                                        class="banner-price-info text-white font-weight-normal ls-25">
                                                        Up to <span
                                                            class="text-secondary text-uppercase font-weight-bold">25%
                                                            Off</span></div>
                                                    <a href="shop-banner-sidebar.html"
                                                        class="btn btn-white btn-link btn-sm btn-slide-right btn-icon-right">
                                                        Shop Now<i class="w-icon-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-electronics"></i>Electronics
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Laptops &amp; Computers</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Desktop
                                                        Computers</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Monitors</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Laptops</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Hard Drives &amp;
                                                        Storage</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Computer
                                                        Accessories</a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">TV &amp; Video</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">TVs</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Home Audio
                                                        Speakers</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Projectors</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Media Streaming
                                                        Devices</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Digital Cameras</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Digital SLR
                                                        Cameras</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Sports & Action
                                                        Cameras</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Camera Lenses</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Photo Printer</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Digital Memory
                                                        Cards</a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">Cell Phones</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Carrier Phones</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Unlocked Phones</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Phone & Cellphone
                                                        Cases</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Cellphone
                                                        Chargers</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="menu-banner banner-fixed menu-banner4">
                                                <figure>
                                                    <img src="assets/images/menu/banner-4.jpg" alt="Menu Banner"
                                                        width="235" height="433" />
                                                </figure>
                                                <div class="banner-content">
                                                    <h4 class="banner-subtitle font-weight-normal">Deals Of The
                                                        Week</h4>
                                                    <h3 class="banner-title text-white">Save On Smart EarPhone
                                                    </h3>
                                                    <div
                                                        class="banner-price-info text-secondary font-weight-bolder text-uppercase text-secondary">
                                                        20% Off</div>
                                                    <a href="shop-banner-sidebar.html"
                                                        class="btn btn-white btn-outline btn-sm btn-rounded">Shop
                                                        Now</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-furniture"></i>Furniture
                                    </a>
                                    <ul class="megamenu type2">
                                        <li class="row">
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">Furniture</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Sofas & Couches</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Bed Frames</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Beside Tables</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Dressing Tables</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">Lighting</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Light Bulbs</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Lamps</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Celling Lights</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Wall Lights</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Bathroom
                                                            Lighting</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">Home Accessories</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Decorative
                                                            Accessories</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Candals &
                                                            Holders</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Home Fragrance</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Clocks</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">Garden & Outdoors</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Garden
                                                            Furniture</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Lawn Mowers</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Pressure
                                                            Washers</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">All Garden
                                                            Tools</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Outdoor Dining</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-6">
                                                <div class="banner banner-fixed menu-banner5 br-xs">
                                                    <figure>
                                                        <img src="assets/images/menu/banner-5.jpg" alt="Banner"
                                                            width="410" height="123"
                                                            style="background-color: #D2D2D2;" />
                                                    </figure>
                                                    <div class="banner-content text-right y-50">
                                                        <h4
                                                            class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                            New Arrivals</h4>
                                                        <h3
                                                            class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                            Amazing Sofa</h3>
                                                        <div
                                                            class="banner-price-info font-weight-normal ls-normal">
                                                            Starting at <strong>$125.00</strong></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="banner banner-fixed menu-banner5 br-xs">
                                                    <figure>
                                                        <img src="assets/images/menu/banner-6.jpg" alt="Banner"
                                                            width="410" height="123"
                                                            style="background-color: #9F9888;" />
                                                    </figure>
                                                    <div class="banner-content y-50">
                                                        <h4
                                                            class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                            Best Seller</h4>
                                                        <h3
                                                            class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                            Chair &amp; Lamp</h3>
                                                        <div
                                                            class="banner-price-info font-weight-normal ls-normal text-white">
                                                            From <strong>$165.00</strong></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-heartbeat"></i>Healthy & Beauty
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-gift"></i>Gift Ideas
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-gamepad"></i>Toy & Games
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-ice-cream"></i>Cooking
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-ios"></i>Smart Phones
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-camera"></i>Cameras & Photo
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-ruby"></i>Accessories
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-banner-sidebar.html"
                                        class="font-weight-bold text-primary text-uppercase ls-25">
                                        View All Categories<i class="w-icon-angle-right"></i>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <nav class="main-nav">
                        <ul class="menu active-underline">
                            <li class="active">
                                <a href="/">Accueil</a>
                            </li>
                            <li class="">
                                <a href="{{route('shop')}}">Boutique</a>
                            </li>
                            
                            {{-- <li>
                                <a href="vendor-dokan-store.html">Vendor</a>
                                <ul>
                                    <li>
                                        <a href="vendor-dokan-store-list.html">Store Listing</a>
                                        <ul>
                                            <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                            <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                            <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                            <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="vendor-dokan-store.html">Vendor Store</a>
                                        <ul>
                                            <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                            <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a>
                                            </li>
                                            <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a>
                                            </li>
                                            <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            
                            <li>
                                <a href="#">Pages</a>
                                <ul>

                                    <li><a href="#">À propos de nous</a></li>
                                    <li><a href="#">Devenez un vendeur</a></li>
                                    <li><a href="#">Contactez-nous</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    {{-- <li><a href="error-404.html">Error 404</a></li> --}}
                                    {{-- <li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="compare.html">Compare</a></li> --}}
                                </ul>
                            </li>
                            {{-- <li>
                                <a href="elements.html">Elements</a>
                                <ul>
                                    <li><a href="element-accordions.html">Accordions</a></li>
                                    <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                    <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                    <li><a href="element-buttons.html">Buttons</a></li>
                                    <li><a href="element-cta.html">Call to Action</a></li>
                                    <li><a href="element-icons.html">Icons</a></li>
                                    <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                    <li><a href="element-instagrams.html">Instagrams</a></li>
                                    <li><a href="element-categories.html">Product Category</a></li>
                                    <li><a href="element-products.html">Products</a></li>
                                    <li><a href="element-tabs.html">Tabs</a></li>
                                    <li><a href="element-testimonials.html">Testimonials</a></li>
                                    <li><a href="element-titles.html">Titles</a></li>
                                    <li><a href="element-typography.html">Typography</a></li>

                                    <li><a href="element-vendors.html">Vendors</a></li>
                                </ul>
                            </li> --}}

                            <li class="">
                                <a href="{{route('admin.articles.create')}}">Dashboard | Ajouter des Articles</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Suivre sa Commande</a>
                    <a href="#"><i class="w-icon-sale"></i>Article en Promotion</a>
                </div>
            </div>
        </div>
    </div>
</header>