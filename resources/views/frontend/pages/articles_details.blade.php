@extends('frontend.layouts.master')

@section('content')

<div class="page-content mt-5">
    <div class="container">
        <div class="row gutter-lg">
            <div class="main-content">
                <div class="product product-single row">
                    <div class="col-md-6 mb-6">
                        <div class="product-gallery product-gallery-sticky">
                            <div class="swiper-container product-single-swiper swiper-theme nav-inner" data-swiper-options="{
                                'navigation': {
                                    'nextEl': '.swiper-button-next',
                                    'prevEl': '.swiper-button-prev'
                                }
                            }">
                                <div class="swiper-wrapper row cols-1 gutter-no">
                                    <figure class="product-image">
                                       
                                        <img src="{{ asset('storage/' . $article->couverture) }}" data-zoom-image="{{ asset($article->couverture) }}" alt="" width="800" height="900">
                                    </figure>
                                    {{-- @foreach ($article->images as $image)
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="{{ asset($image->image_path) }}"
                                                    data-zoom-image="{{ asset($image->image_path) }}"
                                                    alt="{{ $article->name }}" 
                                                    width="800" height="900">
                                            </figure>
                                        </div>
                                    @endforeach --}}

                                    @if ($article->images && $article->images->isNotEmpty())
                                        @foreach ($article->images as $image)
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="{{ asset($image->image_path) }}"
                                                        data-zoom-image="{{ asset($image->image_path) }}"
                                                        alt="{{ $article->name }}" 
                                                        width="800" height="900">
                                                </figure>
                                            </div>
                                        @endforeach
                                    @else

                                    @endif

                                
                                    
                                </div>
                                <button class="swiper-button-next"></button>
                                <button class="swiper-button-prev"></button>
                                <a href="#" class="product-gallery-btn product-image-full"><i class="w-icon-zoom"></i></a>
                            </div>
                            <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                'navigation': {
                                    'nextEl': '.swiper-button-next',
                                    'prevEl': '.swiper-button-prev'
                                }
                            }">
                                <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                                    <div class="product-thumb swiper-slide">

                                        <img src="{{ asset('storage/' . $article->couverture) }}"
                                            alt="" width="800" height="900">
                                    </div>

                                    {{-- <div class="product-thumb swiper-slide">
                                        <img src="assets/images/products/default/1-800x900.jpg"
                                            alt="Product Thumb" width="800" height="900">
                                    </div> --}}

                                    {{-- @if ($article->images && $article->images->isNotEmpty())
                                        @foreach ($article->images as $image)
                                            <div class="product-thumb swiper-slide">
                                                <img src="{{ asset($image->image_path) }}"
                                                    alt="{{ $article->name }}" 
                                                    width="800" height="900">
                                            </div>
                                        @endforeach
                                    @else
                                        <p>Aucune image disponible pour cet article.</p>
                                    @endif --}}

                                    @if ($article->images && $article->images->isNotEmpty())
                                    @foreach ($article->images as $image)
                                        <div class="product-thumb swiper-slide">
                                            <img src="{{ asset('storage/' . $image->image_path) }}"
                                                alt="{{ $article->name }}" 
                                                width="800" height="900">
                                        </div>
                                    @endforeach
                                @else
                                    {{-- Fallback si aucune image n'est trouvée --}}
                                   
                                @endif


                                   
                                </div>
                                <button class="swiper-button-next"></button>
                                <button class="swiper-button-prev"></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 mb-md-6">
                        <div class="product-details" data-sticky-options="{'minWidth': 767}">
                            <h1 class="product-title">{{ $article->name }}</h1>
                            <div class="product-bm-wrapper">
                                <figure class="brand">
                                    <span class="product-category">
                                        @if($article->categories->isNotEmpty())
                                            @foreach($article->categories as $category)
                                            <img src="{{ asset('storage/' . $category['thumbnail']) }}" alt=""
                                            width="102" height="48" />
                                                
                                                @if (!$loop->last), 
                                        @endif
                                            @endforeach
                                        @else
                                            <span>Aucune catégorie</span>
                                        @endif
                                    </span>
                                    
                                </figure>
                                <div class="product-meta">
                                    <div class="product-categories">
                                        Categorie:
                                        {{-- <span class="product-category"><a href="#">{{ $article->categories->name }}</a></span> --}}
                                        <span class="product-category">
                                            @if($article->categories->isNotEmpty())
                                                @foreach($article->categories as $category)
                                                    <a href="#">{{ $category->name }}</a>@if (!$loop->last), @endif
                                                @endforeach
                                            @else
                                                <span>Aucune catégorie</span>
                                            @endif
                                        </span>
                                        
                                    </div>
                                    
                                </div>
                            </div>

                            <hr class="product-divider">

                            <div class="product-price"><ins class="new-price">{{ $article->price }} FCFA</ins></div>

                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#product-tab-reviews" class="rating-reviews scroll-to">(3
                                    avis)</a>
                            </div>

                            <div class="product-short-desc">
                                {!! $article->description !!}

                                {{-- <ul class="list-type-check list-style-none">
                                    <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                                    <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                                    <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                                </ul> --}}
                            </div>

                            <hr class="product-divider">

                            <div class="fix-bottom product-sticky-content sticky-content">
                                <div class="product-form container">
                                    <div class="product-qty-form">
                                        <div class="input-group">
                                            <input class="quantity form-control" type="number" min="1"
                                                max="10000000">
                                            <button class="quantity-plus w-icon-plus"></button>
                                            <button class="quantity-minus w-icon-minus"></button>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-cart">
                                        <i class="w-icon-cart"></i>
                                        <span>Ajouter au panier</span>
                                    </button>
                                </div>
                            </div>

                            <div class="social-links-wrapper">
                                <div class="social-links">
                                    <div class="social-icons social-no-color border-thin">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}" target="_blank" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="https://www.pinterest.com/pin/create/button/?url={{ url()->current() }}" target="_blank" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                        <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}" target="_blank" class="social-icon social-youtube fab fa-linkedin-in"></a>
                                    </div>
                                    
                                </div>
                                <span class="divider d-xs-show"></span>
                                <div class="product-link-wrapper d-flex">
                                    <a href="#"
                                        class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                    <a href="#"
                                        class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                      
                        
                        
                        <li class="nav-item">
                            <a href="#product-tab-reviews" class="nav-link active">Avis (3)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        
                        
                        <div class="tab-pane active" id="product-tab-reviews">
                            <div class="row mb-4">
                                <div class="col-xl-4 col-lg-5 mb-4">
                                    <div class="ratings-wrapper">
                                        <div class="avg-rating-container">
                                            <h4 class="avg-mark font-weight-bolder ls-50">3.3</h4>
                                            <div class="avg-rating">
                                                <p class="text-dark mb-1">Note moyenne</p>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-reviews">(3 Avis)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="ratings-value d-flex align-items-center text-dark ls-25">
                                            <span
                                                class="text-dark font-weight-bold">66.7%</span>Recommandé<span
                                                class="count">(2 sur 3)</span>
                                        </div>
                                        <div class="ratings-list">
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <div class="progress-bar progress-bar-sm ">
                                                    <span></span>
                                                </div>
                                                <div class="progress-value">
                                                    <mark>70%</mark>
                                                </div>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <div class="progress-bar progress-bar-sm ">
                                                    <span></span>
                                                </div>
                                                <div class="progress-value">
                                                    <mark>30%</mark>
                                                </div>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <div class="progress-bar progress-bar-sm ">
                                                    <span></span>
                                                </div>
                                                <div class="progress-value">
                                                    <mark>40%</mark>
                                                </div>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 40%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <div class="progress-bar progress-bar-sm ">
                                                    <span></span>
                                                </div>
                                                <div class="progress-value">
                                                    <mark>0%</mark>
                                                </div>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 20%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <div class="progress-bar progress-bar-sm ">
                                                    <span></span>
                                                </div>
                                                <div class="progress-value">
                                                    <mark>0%</mark>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 mb-4">
                                    <div class="review-form-wrapper">
                                        <h3 class="title tab-pane-title font-weight-bold mb-1">Soumettez votre avis</h3>
                                        <p class="mb-3">Votre adresse email ne sera pas publiée. Requis
                                            les champs sont marqués *</p>
                                        <form action="#" method="POST" class="review-form">
                                            <div class="rating-form">
                                                <label for="rating">Votre évaluation de ce produit :</label>
                                                <span class="rating-stars">
                                                    <a class="star-1" href="#">1</a>
                                                    <a class="star-2" href="#">2</a>
                                                    <a class="star-3" href="#">3</a>
                                                    <a class="star-4" href="#">4</a>
                                                    <a class="star-5" href="#">5</a>
                                                </span>
                                                <select name="rating" id="rating" required="" style="display: none;">
                                                    <option value="">Évaluez…</option>
                                                    <option value="5">Parfait</option>
                                                    <option value="4">Bien</option>
                                                    <option value="3">Moyenne</option>
                                                    <option value="2">Pas si mal</option>
                                                    <option value="1">Très mauvais</option>
                                                </select>
                                                
                                            </div>
                                            <textarea cols="30" rows="6"
                                                placeholder="Écrivez votre avis ici..." class="form-control"
                                                id="review"></textarea>
                                            <div class="row gutter-md">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control"
                                                        placeholder="Votre nom" id="author">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control"
                                                        placeholder="Votre Email" id="email_1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" class="custom-checkbox"
                                                    id="save-checkbox">
                                                <label for="save-checkbox">Enregistrez mon nom, mon adresse e-mail et mon site Web dans ce navigateur pour la prochaine fois que je commenterai.
                                                    Soumettre l'avis</label>
                                            </div>
                                            <button type="submit" class="btn btn-dark">Envoyer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
                
                <section class="related-product-section">
                    <div class="title-link-wrapper mb-4">
                        <h4 class="title">Produits similaires</h4>
                        <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">Voir plus<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 4
                            },
                            '992': {
                                'slidesPerView': 3
                            }
                        }
                    }">
                        <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                            <div class="swiper-slide product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('storage/images/default.jpg') }}" alt="Product"
                                            width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="#">Drone</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">$632.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('storage/images/default.jpg') }}" alt="Product"
                                            width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="#">Official Camera</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">
                                            <ins class="new-price">$263.00</ins><del
                                                class="old-price">$300.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('storage/images/default.jpg') }}" alt="Product"
                                            width="300" height="338" />
                                        <img src="assets/images/products/default/7-2.jpg" alt="Product"
                                            width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="#">Phone Charge Pad</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(8 reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">$23.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('storage/images/default.jpg') }}" alt="Product"
                                            width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="#">Fashionalble
                                            Pencil</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(9 reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">$50.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End of Main Content -->
            <aside class="sidebar product-sidebar sidebar-fixed right-sidebar sticky-sidebar-wrapper">
                <div class="sidebar-overlay"></div>
                <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                <a href="#" class="sidebar-toggle d-flex d-lg-none"><i class="fas fa-chevron-left"></i></a>
                <div class="sidebar-content scrollable">
                    <div class="sticky-sidebar">
                        <div class="widget widget-icon-box mb-6">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="w-icon-truck"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Livraison gratuite à Abidjan</h4>
                                    <p>Pour tout achat de plus de 200.000F
                                    </p>
                                </div>
                            </div>
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="w-icon-bag"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Service Après Vente
                                    </h4>
                                    <p>Nos ordinateurs & Imprimantes sont garantis 1 an
                                    </p>
                                </div>
                            </div>
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="w-icon-money"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Paiement à la livraison
                                    </h4>
                                    <p>Payez à la livraison toutes vos commandes
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End of Widget Icon Box -->

                        <div class="widget widget-banner mb-9">
                            <div class="banner banner-fixed br-sm">
                                <figure>
                                    <img src="assets/images/shop/banner3.jpg" alt="Banner" width="266"
                                        height="220" style="background-color: #1D2D44;" />
                                </figure>
                                <div class="banner-content">
                                    <div class="banner-price-info font-weight-bolder text-white lh-1 ls-25">
                                        40<sup class="font-weight-bold">%</sup><sub
                                            class="font-weight-bold text-uppercase ls-25">Off</sub>
                                    </div>
                                    <h4
                                        class="banner-subtitle text-white font-weight-bolder text-uppercase mb-0">
                                        Ultimate Sale</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End of Widget Banner -->

                        <div class="widget widget-products">
                            <div class="title-link-wrapper mb-2">
                                <h4 class="title title-link font-weight-bold">Voir plus</h4>
                            </div>

                            <div class="swiper nav-top">
                                <div class="swiper-container swiper-theme nav-top" data-swiper-options = "{
                                    'slidesPerView': 1,
                                    'spaceBetween': 20,
                                    'navigation': {
                                        'prevEl': '.swiper-button-prev',
                                        'nextEl': '.swiper-button-next'
                                    }
                                }">
                                    <div class="swiper-wrapper">
                                        <div class="widget-col swiper-slide">
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="{{ asset('storage/images/default.jpg') }}" alt="Product"
                                                            width="100" height="113" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="#">Smart Watch</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$80.00 - $90.00</div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="{{ asset('storage/images/default.jpg') }}" alt="Product"
                                                            width="100" height="113" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="#">Sky Medical Facility</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 80%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$58.00</div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="{{ asset('storage/images/default.jpg') }}" alt="Product"
                                                            width="100" height="113" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="#">Black Stunt Motor</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$374.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-col swiper-slide">
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="{{ asset('storage/images/default.jpg') }}" alt="Product"
                                                            width="100" height="113" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="#">Skate Pan</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$278.00</div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="{{ asset('storage/images/default.jpg') }}" alt="Product"
                                                            width="100" height="113" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="#">Modern Cooker</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 80%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$324.00</div>
                                                </div>
                                            </div>
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="{{ asset('storage/images/default.jpg') }}" alt="Product"
                                                            width="100" height="113" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="#">CT Machine</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$236.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- End of Sidebar -->
        </div>
    </div>
</div>

@endsection