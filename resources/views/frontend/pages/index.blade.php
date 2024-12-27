@extends('frontend.layouts.master')

@section('content')

<style>
    banner-fixed img{
        height: 200px !important;;
    }
</style>
<style>
    .header-bottom:not(.fixed) .dropdown-box {
        visibility:visible ;
    }
   
   .banner-subtitle {
    white-space: normal;
    word-break: break-word;
}


.section-ordinateur .nav-tabs .nav-link{
    border: none !important ;
}
a.btn-product-icon.btn-cart.w-icon-cart {
    background: chocolate !important;
    color: #E3E7EA !important
}

    
    @media (max-width: 992px) { /* Pour les écrans petits */
        .intro-section{
            margin-top: 0px !important;
        }
    }
</style>


<section class="intro-section mt-5">
    <div class="swiper-container swiper-theme animation-slider" data-swiper-options="{
        'slidesPerView': 1,
        'autoplay': {
            'delay': 8000,
            'disableOnInteraction': false
        }
    }">
        <div class="swiper-wrapper row gutter-no cols-1">
            <!-- Slide 1 -->
            <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
            style="background-image: url(assets/images/demos/demo9/slides/slide-3.jpg); background-color: #D4D6D5; ">
                <div class="banner-content y-50 mx-3">
                    <div class="content-left mr-auto slide-animate mb-4 mb-lg-0" data-animation-options="{
                        'name': 'fadeInUpShorter', 'duration': '1s'
                    }">
                        <h5 class="banner-subtitle text-white br-xs">Matériels de Qualité Supérieure</h5>
                        <h3 class="banner-title text-uppercase font-weight-normal mb-0 ls-25">
                            Solutions Informatiques<br><strong class="ml-2">Fiables</strong>
                        </h3>
                        <p class="text-dark font-weight-normal text-uppercase mb-0 ls-25">
                            Parfaites pour les professionnels et les particuliers.
                        </p>
                    </div>
                    <div class="content-right slide-animate" data-animation-options="{
                        'name': 'fadeInUpShorter', 'duration': '1s'
                    }">
                        <h4 class="text-white text-uppercase ls-25">Optimisez vos performances</h4>
                        <a href="/magasin" class="btn btn-dark btn-rounded btn-icon-right">
                            Voir plus<i class="w-icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
           
            <!-- Slide 2 -->
            <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                style="background-image: url(assets/images/demos/demo9/slides/slide-2.jpg); background-color: #EDEEF0;">
                <div class="banner-content d-inline-block y-50 mx-3">
                    <div class="slide-animate" data-animation-options="{
                        'name': 'fadeInDownShorter', 'duration': '1s'
                    }">
                        <h5 class="banner-subtitle text-primary text-uppercase font-weight-bold mb-2">
                            Équipements Professionnels
                        </h5>
                        <h3 class="banner-title text-capitalize ls-25">
                            Accessoires et Périphériques
                        </h3>
                        <hr class="banner-divider bg-dark">
                        <p class="text-dark">Des outils fiables pour accompagner votre travail au quotidien.</p>
                        <a href="/magasin" class="btn btn-dark btn-outline btn-rounded btn-icon-right">
                            En savoir plus<i class="w-icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide banner banner-fixed content-center intro-slide intro-slide1"
            style="background-image: url(assets/images/demos/demo9/slides/slide-1.jpg); background-color: #EEF4F4;">
                <div class="banner-content d-inline-block y-50 mx-3">
                    <div class="slide-animate" data-animation-options="{
                        'name': 'zoomIn', 'duration': '1s'
                    }">
                        <h5 class="banner-subtitle text-uppercase font-weight-bold">Ordinateurs & Accessoires</h5>
                        <h3 class="banner-title text-capitalize ls-25 mb-5">
                            <span class="text-primary">Technologie Moderne</span><br>
                            Performances Fiables au Quotidien
                        </h3>
                        <a href="/magasin" class="btn btn-dark btn-outline btn-rounded btn-icon-right">
                            Découvrir<i class="w-icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
           
        </div>
    
        {{-- <div class="custom-dots swiper-img-dots appear-animate">
            <a href="#" class="active">
                <img src="assets/images/demos/demo9/slides/dot-1.png" alt="Dot" width="70" height="70" />
            </a>
            <a href="#">
                <img src="assets/images/demos/demo9/slides/dot-2.png" alt="Dot" width="70" height="70" />
            </a>
            <a href="#">
                <img src="assets/images/demos/demo9/slides/dot-3.png" alt="Dot" width="70" height="70" />
            </a>
            
        </div> --}}
    </div>
</section>

<div class="container mt-5">
    <div class="row grid grid-float pt-2 banner-grid mb-9 appear-animate">
                    <div class="grid-item col-lg-6 height-x2">
                        <div class="banner banner-fixed banner-lg br-sm">
                            <figure>
                                <img src="{{asset('assets/images/one_card.png')}}" alt="Banner" width="670"
                                    height="450" style="background-color: #E3E7EA;" />
                            </figure>
                            <div class="banner-content y-50 p-5" style="padding: 20px;">
                                <h5 class="banner-subtitle text-capitalize font-weight-normal mb-0 ls-25" style="color:#E3E7EA">
                                    Jusqu'a <strong class="text-secondary text-uppercase">25% de réduction</strong>
                                </h5>
                                <h3 class="banner-title text-capitalize" style="color:#E3E7EA">Une panoplie d'Ordinateurs Performant</h3>
                                {{-- <p>Only until the end of this Week</p> --}}
                                <a href="/magasin" class="btn btn-dark btn-outline btn-rounded btn-icon-right" style="border-color: #E3E7EA; color:#E3E7EA">
                                    Decouvrir<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-lg-6 height-x1">
                        <div class="banner banner-fixed banner-md br-sm">
                            <figure>
                                <img src="{{asset('assets/images/two_card.png')}}" alt="Banner" width="670"
                                    height="450" style="background-color: #8b8989;" />
                            </figure>
                            <div class="banner-content">
                                

                                <h5 class="banner-subtitle text-uppercase font-weight-bold" style="color: #ffffff !important">Des Accessoires</h5>
                                <h3 class="banner-title text-capitalize ls-25" style="color: #ffffff !important">Informatiques</h3>

                                <a href="/magasin" class="btn btn-white btn-link btn-underline btn-icon-right">
                                    Decouvrir<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-sm-6 col-lg-3 height-x1">
                        <div class="banner banner-fixed banner-sm br-sm">
                            <figure>
                                <img src="{{asset('assets/images/slides-bg/4.png')}}" alt="Banner" width="330"
                                    height="215" style="background-color: #2D2E32;" />
                            </figure>
                            <div class="banner-content x-50 y-50 w-100 text-center">
                                {{-- <h3 class="banner-title font-secondary font-weight-normal mb-0 ls-25 mb-3">Ecrans</h3> --}}
                                {{-- <div class="banner-price-info font-weight-normal text-white mb-3">
                                    Up to <strong class="text-uppercase">20% Off</strong>
                                </div> --}}
                                <h5 class="banner-subtitle text-uppercase font-weight-bold">Ecrans</h5>
                                {{-- <h3 class="banner-title text-capitalize ls-25">Multi Tâches</h3> --}}

                                <a href="/magasin" class="btn btn-white btn-link btn-underline">Decouvrir</a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-sm-6 col-lg-3 height-x1">
                        <div class="banner banner-fixed banner-sm br-sm">
                            <figure>
                                <img src="{{asset('assets/images/slides-bg/3.png')}}" alt="Banner" width="330"
                                    height="215" style="background-color: #A3A8A6;" />
                            </figure>
                            <div class="banner-content">
                                <h5 class="banner-subtitle text-uppercase font-weight-bold">Des Imprimantes</h5>
                                <h3 class="banner-title text-capitalize ls-25">Multi Tâches</h3>
                                <a href="/magasin" class="btn btn-dark btn-link btn-underline btn-icon-right">
                                    Decouvrir<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
</div>


<div class="container-fluid section-ordinateur">
    <div class="row appear-animate">
        <div class="col-lg-4 col-md-5 mb-6">
            <div class="product-lg br-sm">
                <h2 class="title title-underline mb-4">Ordinateur en promotion</h2>
                <div class="swiper">
                    <div class="swiper-container swiper-theme nav-top swiper-nav-md " data-swiper-options="{
                        'spaceBetween': 20
                    }">
                        <div class="swiper-wrapper row cols-1">
                            @forelse ($ordinateursPromotion as $articles)
                                @foreach ($articles->articles as $article)
                                <div class="swiper-slide product text-center">
                                    <figure class="product-media">
                                        <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                                            <img src="{{ asset('storage/' . $article->couverture) }}" alt="Product"
                                                width="800" height="900" />
                                            {{-- <img src="{{ asset('storage/' . $article->couverture) }}" alt="Product"
                                                width="800" height="900" /> --}}
                                        </a>
                                        <div class="product-action-vertical">
                                            

                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Ajouter au Panier" data-product-id="{{ $article->id }}"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Mes Souhaits"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Comparer"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="{{ route('article.show', ['slug' => $article->slug]) }}">{{$article->name}}</a>
                                        </h3>
                                        <div class="product-price">
                                            @if($article->promotion_type == 'percentage' && $article->promotion_value)
                                                @php
                                                    // Calcul du prix après remise en pourcentage
                                                    $discountedPrice = $article->price - ($article->price * $article->promotion_value / 100);
                                                @endphp
                                                <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                            @elseif($article->promotion_type == 'fixed' && $article->promotion_value)
                                                @php
                                                    // Calcul du prix après remise en montant fixe
                                                    $discountedPrice = $article->price - $article->promotion_value;
                                                @endphp
                                                <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                            @else
                                                <ins class="new-price">{{ number_format($article->price, 0, '', '') }} FCFA</ins>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @empty
                                Aucun Ordinateur en promotion
                            @endforelse
                            
                        </div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                </div>

                <!-- End of Swiper Container -->
                <div class="swiper-slide product-countdown-container">
                    <div class="countdown-lable mr-3 mb-2">
                        <h4 class="font-weight-bold ls-10">Terminé dans:</h4>
                        
                        
                    </div>
                    <div class="swiper-slide product-countdown countdown-compact mb-2"
                        data-until="2025, 01, 02" data-format="DHMS" data-compact="false"
                        data-labels-short="Days, Hours, Mins, Secs">
                        00:00:00:00
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Col -->
        <div class="col-lg-8 col-md-7 mb-6">
            <div class="tab tab-nav-underline tab-nav-center">
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab-1">Ordinateurs Portable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab-2">Ordinateurs de Bureau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab-3">Ordinateurs Complet</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                
                <div class="tab-pane active" id="tab-1">
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'grid': {
                            'rows': 1,
                            'fill': 'row'
                        },
                        'pagination': {
                            'el': '.swiper-pagination',
                            'clickable': true
                        },
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2,
                                'grid': {
                                    'rows': 1,
                                    'fill': 'row'
                                }
                            },
                            '992': {
                                'slidesPerView': 3,
                                'grid': {
                                    'rows': 1,
                                    'fill': 'row'
                                }
                            }
                        }
                    }">
                    <div class="swiper-wrapper">
                        @foreach ($articlesGroupedPortable as $articles)
                            @foreach ($articles->chunk(2) as $chunkedArticles) {{-- Regrouper les articles par lot de 2 --}}
                                <div class="swiper-slide product-col">
                                    @foreach ($chunkedArticles as $article)
                                        
                                        <div class="product product-slideup-content mb-3">
                                            <figure class="product-media">
                                                <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                                                    <img src="{{ asset('storage/' . $article->couverture) }}" alt="Product" width="216" height="243" style="height: 200px; object-fit:cover" />
    
                                                </a>
                                                <div class="product-label-group">
                                                    @if($article->promotion_type == 'percentage' && $article->promotion_value && $article->promotion_value < $article->price)
                                                        <label class="product-label label-discount">{{ number_format($article->promotion_value, 0) }}%</label>
                                                    @elseif($article->promotion_type == 'fixed' && $article->promotion_value)
                                                        <!-- Affichage de la remise en montant fixe -->
                                                        <label class="product-label label-discount">-{{ number_format($article->promotion_value, 2) }} FCFA</label>
                                                    @endif
                                                    @if($article->created_at >= now()->subMonths(3))
                                                        <label class="product-label label-new">New</label>
                                                    @endif
                                                </div>
                                                
                                               
                                            </figure>
                                            <div class="product-details">
                                                {{-- <div class="product-cat">
                                                    <a href="shop-banner-sidebar.html">Electronics</a>
                                                </div> --}}
                                                <h3 class="product-name">
                                                    <a href="{{ route('article.show', ['slug' => $article->slug]) }}">{{ $article->name }}</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-reviews">(3 avis)</a>
                                                </div>
                                                <div class="product-price">
                                                    @if($article->promotion_type == 'percentage' && $article->promotion_value)
                                                        @php
                                                            // Calcul du prix après remise en pourcentage
                                                            $discountedPrice = $article->price - ($article->price * $article->promotion_value / 100);
                                                        @endphp
                                                        <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                        <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                                    @elseif($article->promotion_type == 'fixed' && $article->promotion_value)
                                                        @php
                                                            // Calcul du prix après remise en montant fixe
                                                            $discountedPrice = $article->price - $article->promotion_value;
                                                        @endphp
                                                        <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                        <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                                    @else
                                                        <ins class="new-price">{{ number_format($article->price, 0, '', '') }} FCFA</ins>
                                                    @endif
                                                </div>
                                                
                                            </div>
                                            <div class="product-hidden-details">
                                                <div class="product-action">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Ajouter au Panier" data-product-id="{{ $article->id }}">
                                                        <i class="w-icon-cart"></i><span>Ajouter au panier</span></a>
                                                    </a>                                                    
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Ajouter Au favori"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Comparer"></a>
                                                </div>

                                                
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                
                </div>
                
                <!-- End of Tab Pane -->
                <div class="tab-pane" id="tab-2">
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'grid': {
                            'rows': 1,
                            'fill': 'row'
                        },
                        'pagination': {
                            'el': '.swiper-pagination',
                            'clickable': true
                        },
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2,
                                'grid': {
                                    'rows': 1,
                                    'fill': 'row'
                                }
                            },
                            '992': {
                                'slidesPerView': 3,
                                'grid': {
                                    'rows': 1,
                                    'fill': 'row'
                                }
                            }
                        }
                    }">
                    <div class="swiper-wrapper">
                        @foreach ($articlesGroupedBureau as $articles)
                            @foreach ($articles->chunk(2) as $chunkedArticles) {{-- Regrouper les articles par lot de 2 --}}
                                <div class="swiper-slide product-col">
                                    @foreach ($chunkedArticles as $article)
                                        
                                        <div class="product product-slideup-content mb-3">
                                            <figure class="product-media">
                                                <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                                                    <img src="{{ asset('storage/' . $article->couverture) }}" alt="Product" width="216" height="243" style="height: 200px; object-fit:cover" />
    
                                                </a>
                                               
                                                <div class="product-label-group">
                                                    @if($article->promotion_type == 'percentage' && $article->promotion_value && $article->promotion_value < $article->price)
                                                        <label class="product-label label-discount">-{{ number_format($article->promotion_value, 0) }}%</label>
                                                    @elseif($article->promotion_type == 'fixed' && $article->promotion_value)
                                                        <!-- Affichage de la remise en montant fixe -->
                                                        <label class="product-label label-discount">-{{ number_format($article->promotion_value, 2) }} FCFA</label>
                                                    @endif
                                                    @if($article->created_at >= now()->subMonths(3))
                                                        <label class="product-label label-new">New</label>
                                                    @endif
                                                </div>
                                               
                                            </figure>
                                            
                                            <div class="product-details">
                                                {{-- <div class="product-cat">
                                                    <a href="shop-banner-sidebar.html">Electronics</a>
                                                </div> --}}
                                                <h3 class="product-name">
                                                    <a href="{{ route('article.show', ['slug' => $article->slug]) }}">{{ $article->name }}</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3 avis)</a>
                                                </div>
                                                <div class="product-price">
                                                    @if($article->promotion_type == 'percentage' && $article->promotion_value)
                                                        @php
                                                            // Calcul du prix après remise en pourcentage
                                                            $discountedPrice = $article->price - ($article->price * $article->promotion_value / 100);
                                                        @endphp
                                                        <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                        <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                                    @elseif($article->promotion_type == 'fixed' && $article->promotion_value)
                                                        @php
                                                            // Calcul du prix après remise en montant fixe
                                                            $discountedPrice = $article->price - $article->promotion_value;
                                                        @endphp
                                                        <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                        <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                                    @else
                                                        <ins class="new-price">{{ number_format($article->price, 0, '', '') }} FCFA</ins>
                                                    @endif
                                                </div>
                                                
                                            </div>
                                            <div class="product-hidden-details">
                                                <div class="product-action">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Ajouter au Panier" data-product-id="{{ $article->id }}">
                                                        <i class="w-icon-cart"></i><span>Ajouter au panier</span></a>
                                                    </a>                                                    
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Ajouter Au favori"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Comparer"></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- End of Tab Pane -->
                <div class="tab-pane" id="tab-3">
                    <div class="swiper-container swiper-theme row cols-xl-4 cols-lg-3 cols-md-2"
                        data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'grid': {
                            'rows': 1,
                            'fill': 'row'
                        },
                        'pagination': {
                            'el': '.swiper-pagination',
                            'clickable': true
                        },
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2,
                                'grid': {
                                    'rows': 1,
                                    'fill': 'row'
                                }
                            },
                            '992': {
                                'slidesPerView': 3,
                                'grid': {
                                    'rows': 1,
                                    'fill': 'row'
                                }
                            }
                        }
                    }">
                    <div class="swiper-wrapper">
                        @foreach ($articlesGroupedComplet as $articles)
                            @foreach ($articles->chunk(2) as $chunkedArticles) {{-- Regrouper les articles par lot de 2 --}}
                                <div class="swiper-slide product-col">
                                    @foreach ($chunkedArticles as $article)
                                        
                                        <div class="product product-slideup-content mb-3">
                                            <figure class="product-media">
                                                <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                                                    <img src="{{ asset('storage/' . $article->couverture) }}" alt="Product" width="216" height="243" style="height: 200px; object-fit:cover" />
    
                                                </a>
                                               
                                                <div class="product-label-group">
                                                    @if($article->promotion_value && $article->promotion_value < $article->price)
                                                        @php
                                                            // Calcul du pourcentage de la remise par rapport au prix de l'article
                                                            $discountPercentage = (($article->price - $article->promotion_value) / $article->price) * 100;
                                                        @endphp
                                                        <label class="product-label label-discount">-{{ number_format($discountPercentage, 0) }}%</label>
                                                    @endif
                                                    @if($article->created_at >= now()->subMonths(3))
                                                        <label class="product-label label-new">New</label>
                                                    @endif
                                                </div>
                                                
                                               
                                            </figure>
                                            <div class="product-details">
                                                {{-- <div class="product-cat">
                                                    <a href="shop-banner-sidebar.html">Electronics</a>
                                                </div> --}}
                                                <h3 class="product-name">
                                                    <a href="{{ route('article.show', ['slug' => $article->slug]) }}">{{ $article->name }}</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3 avis)</a>
                                                </div>
                                                <div class="product-price">
                                                    @if($article->promotion_type == 'percentage' && $article->promotion_value)
                                                        @php
                                                            // Calcul du prix après remise en pourcentage
                                                            $discountedPrice = $article->price - ($article->price * $article->promotion_value / 100);
                                                        @endphp
                                                        <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                        <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                                    @elseif($article->promotion_type == 'fixed' && $article->promotion_value)
                                                        @php
                                                            // Calcul du prix après remise en montant fixe
                                                            $discountedPrice = $article->price - $article->promotion_value;
                                                        @endphp
                                                        <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                        <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                                    @else
                                                        <ins class="new-price">{{ number_format($article->price, 0, '', '') }} FCFA</ins>
                                                    @endif
                                                </div>
                                                
                                            </div>
                                            <div class="product-hidden-details">
                                                <div class="product-action">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Ajouter au Panier" data-product-id="{{ $article->id }}">
                                                        <i class="w-icon-cart"></i><span>Ajouter au panier</span></a>
                                                    </a>                                                    
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Ajouter Au favori"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Comparer"></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- End of Tab Pane -->
            </div>
        </div>
        <!-- End of Col -->
    </div>
</div>
<div class="container">
   

    <div class="product-wrapper-1 appear-animate mb-5">
        <div class="title-link-wrapper pb-1 mb-4">
            <h2 class="title ls-normal mb-0">Imprimante & Accessoires</h2>
            <a href="/magasin#products" class="font-size-normal font-weight-bold ls-25 mb-0">Plus de produits<i class="w-icon-long-arrow-right"></i></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-4 mb-4">
                <div class="banner h-100 br-sm" style=" 
                    background-color: #ebeced;">
                    <div class="banner-content content-top">
                        <hr class="banner-divider bg-dark mb-2">
                        <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                            Collection <br><span
                                class="font-weight-normal text-capitalize">Imprimante & Accessoires</span>
                        </h3>
                        <a href="/magasin"
                            class="btn btn-dark btn-outline btn-rounded btn-sm">Decouvrir</a>
                    </div>
                </div>
            </div>
            <!-- End of Banner -->
            <div class="col-lg-9 col-sm-8">
                <div class="swiper-container swiper-theme" data-swiper-options="{
                    'spaceBetween': 20,
                        'slidesPerView': 2,
                        'grid': {
                            'rows': 1,
                            'fill': 'row'
                        },
                        'pagination': {
                            'el': '.swiper-pagination',
                            'clickable': true
                        },
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2,
                                'grid': {
                                    'rows': 1,
                                    'fill': 'row'
                                }
                            },
                            '992': {
                                'slidesPerView': 3,
                                'grid': {
                                    'rows': 1,
                                    'fill': 'row'
                                }
                            }
                        }
                }">
                <div class="swiper-wrapper">
                    @foreach ($article_imprimantesScanners as $articles)
                        @foreach ($articles->chunk(2) as $chunkedArticles) {{-- Regrouper les articles par lot de 2 --}}
                            <div class="swiper-slide product-col">
                                @foreach ($chunkedArticles as $article)
                                    
                                    <div class="product product-slideup-content mb-3">
                                        <figure class="product-media">
                                            <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                                                <img src="{{ asset('storage/' . $article->couverture) }}" alt="Product" width="216" height="243" style="height: 200px; object-fit:cover" />

                                            </a>
                                            <div class="product-label-group">
                                                @if($article->promotion_value && $article->promotion_value < $article->price)
                                                        @php
                                                            // Calcul du pourcentage de la remise par rapport au prix de l'article
                                                            $discountPercentage = (($article->price - $article->promotion_value) / $article->price) * 100;
                                                        @endphp
                                                        <label class="product-label label-discount">-{{ number_format($discountPercentage, 0) }}%</label>
                                                    @endif
                                                @if($article->created_at >= now()->subMonths(3))
                                                    <label class="product-label label-new">New</label>
                                                @endif
                                            </div>
                                            
                                           
                                        </figure>
                                        <div class="product-details">
                                            {{-- <div class="product-cat">
                                                <a href="shop-banner-sidebar.html">Electronics</a>
                                            </div> --}}
                                            <h3 class="product-name">
                                                <a href="{{ route('article.show', ['slug' => $article->slug]) }}">{{ $article->name }}</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(3 avis)</a>
                                            </div>
                                            <div class="product-price">
                                                @if($article->promotion_type == 'percentage' && $article->promotion_value)
                                                    @php
                                                        // Calcul du prix après remise en pourcentage
                                                        $discountedPrice = $article->price - ($article->price * $article->promotion_value / 100);
                                                    @endphp
                                                    <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                    <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                                @elseif($article->promotion_type == 'fixed' && $article->promotion_value)
                                                    @php
                                                        // Calcul du prix après remise en montant fixe
                                                        $discountedPrice = $article->price - $article->promotion_value;
                                                    @endphp
                                                    <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                    <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                                @else
                                                    <ins class="new-price">{{ number_format($article->price, 0, '', '') }} FCFA</ins>
                                                @endif
                                            </div>
                                            
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Ajouter au Panier" data-product-id="{{ $article->id }}">
                                                    <i class="w-icon-cart"></i><span>Ajouter au panier</span></a>
                                                </a>                                                    
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Ajouter Au favori"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Comparer"></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                </div>
                </div>
            </div>
            <!-- Assuming you have a list of articles in your database -->


        </div>
    </div>
    <!-- End of Product Wrapper 1 -->
</div>
<div class="container">
    <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate">Accessoires
    </h2>
    <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
        {{-- <ul class="nav nav-tabs justify-content-center" role="tablist">
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">Souris et claviers</a>
            </li>
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Disques durs et stockage externe</a>
            </li>
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-3">Câbles et adaptateurs</a>
            </li>
            <li class="nav-item mr-0 mb-2">
                <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-4">Batteries et chargeurs

                </a>
            </li>
        </ul> --}}
        <ul class="nav nav-tabs justify-content-center" id="productTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="tab1-1-tab" data-bs-toggle="tab" href="#tab1-1" role="tab" aria-controls="tab1-1" aria-selected="true">Souris et Claviers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab1-2-tab" data-bs-toggle="tab" href="#tab1-2" role="tab" aria-controls="tab1-2" aria-selected="false">Disques Durs et Stockage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab1-3-tab" data-bs-toggle="tab" href="#tab1-3" role="tab" aria-controls="tab1-3" aria-selected="false">Câbles et Adaptateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="tab1-4-tab" data-bs-toggle="tab" href="#tab1-4" role="tab" aria-controls="tab1-4" aria-selected="false">Batteries et Chargeurs</a>
            </li>
        </ul>
        
    </div>
    <!-- End of Tab -->
    <div class="tab-content product-wrapper mt-5">
        <!-- Souris et claviers -->
        <div class="tab-pane pt-4 " id="tab1-1">
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                @foreach ($sourisEtClaviers as $accessoire)
                    @foreach ($accessoire->articles as $article)
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                                        <img src="{{ asset('storage/' . $article->couverture) }}" alt="Product" width="300" height="338" />
                                        {{-- <img src="{{ asset('storage/' . $accessoire->image_2) }}" alt="Product" width="300" height="338" /> --}}
                                    </a>
                                    <div class="product-label-group">
                                        @if($article->promotion_value && $article->promotion_value < $article->price)
                                                        @php
                                                            // Calcul du pourcentage de la remise par rapport au prix de l'article
                                                            $discountPercentage = (($article->price - $article->promotion_value) / $article->price) * 100;
                                                        @endphp
                                                        <label class="product-label label-discount">-{{ number_format($discountPercentage, 0) }}%</label>
                                                    @endif
                                        @if($article->created_at >= now()->subMonths(3))
                                            <label class="product-label label-new">New</label>
                                        @endif
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="#">{{ $article->name }}</a></h4>
                                    <div class="product-price">
                                        @if($article->promotion_type == 'percentage' && $article->promotion_value)
                                            @php
                                                // Calcul du prix après remise en pourcentage
                                                $discountedPrice = $article->price - ($article->price * $article->promotion_value / 100);
                                            @endphp
                                            <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                            <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                        @elseif($article->promotion_type == 'fixed' && $article->promotion_value)
                                            @php
                                                // Calcul du prix après remise en montant fixe
                                                $discountedPrice = $article->price - $article->promotion_value;
                                            @endphp
                                            <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                            <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                        @else
                                            <ins class="new-price">{{ number_format($article->price, 0, '', '') }} FCFA</ins>
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        
    
        <!-- Disques durs et stockage externe -->
        <div class="tab-pane pt-4" id="tab1-2">
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                @foreach ($disquesDurs as $accessoire)
                    @foreach ($accessoire->articles as $article)
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                                        <img src="{{ asset('storage/' . $article->couverture) }}" alt="Product" width="300" height="338" />
                                        {{-- Si vous avez une deuxième image à afficher, vous pouvez la décommenter --}}
                                        {{-- <img src="{{ asset('storage/' . $article->image_2) }}" alt="Product" width="300" height="338" /> --}}
                                    </a>
                                    <div class="product-label-group">
                                        @if($article->promotion_value && $article->promotion_value < $article->price)
                                                        @php
                                                            // Calcul du pourcentage de la remise par rapport au prix de l'article
                                                            $discountPercentage = (($article->price - $article->promotion_value) / $article->price) * 100;
                                                        @endphp
                                                        <label class="product-label label-discount">-{{ number_format($discountPercentage, 0) }}%</label>
                                                    @endif
                                        @if($article->created_at >= now()->subMonths(3))
                                            <label class="product-label label-new">New</label>
                                        @endif
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="#">{{ $article->name }}</a></h4>
                                    <div class="product-price">
                                        @if($article->promotion_type == 'percentage' && $article->promotion_value)
                                            @php
                                                // Calcul du prix après remise en pourcentage
                                                $discountedPrice = $article->price - ($article->price * $article->promotion_value / 100);
                                            @endphp
                                            <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                            <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                        @elseif($article->promotion_type == 'fixed' && $article->promotion_value)
                                            @php
                                                // Calcul du prix après remise en montant fixe
                                                $discountedPrice = $article->price - $article->promotion_value;
                                            @endphp
                                            <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                            <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                        @else
                                            <ins class="new-price">{{ number_format($article->price, 0, '', '') }} FCFA</ins>
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        
    
        <!-- Câbles et adaptateurs -->
        <div class="tab-pane pt-4" id="tab1-3">
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                @foreach ($cablesAdaptateurs as $accessoire)
                    @foreach ($accessoire->articles as $article)
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                                        <img src="{{ asset('storage/' . $article->couverture) }}" alt="Product" width="300" height="338" />
                                        {{-- Si vous avez une deuxième image à afficher, vous pouvez la décommenter --}}
                                        {{-- <img src="{{ asset('storage/' . $article->image_2) }}" alt="Product" width="300" height="338" /> --}}
                                    </a>
                                    <div class="product-label-group">
                                        @if($article->promotion_value && $article->promotion_value < $article->price)
                                                        @php
                                                            // Calcul du pourcentage de la remise par rapport au prix de l'article
                                                            $discountPercentage = (($article->price - $article->promotion_value) / $article->price) * 100;
                                                        @endphp
                                                        <label class="product-label label-discount">-{{ number_format($discountPercentage, 0) }}%</label>
                                                    @endif
                                        @if($article->created_at >= now()->subMonths(3))
                                            <label class="product-label label-new">New</label>
                                        @endif
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="#">{{ $article->name }}</a></h4>
                                    <div class="product-price">
                                        @if($article->promotion_type == 'percentage' && $article->promotion_value)
                                            @php
                                                // Calcul du prix après remise en pourcentage
                                                $discountedPrice = $article->price - ($article->price * $article->promotion_value / 100);
                                            @endphp
                                            <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                            <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                        @elseif($article->promotion_type == 'fixed' && $article->promotion_value)
                                            @php
                                                // Calcul du prix après remise en montant fixe
                                                $discountedPrice = $article->price - $article->promotion_value;
                                            @endphp
                                            <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                            <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                        @else
                                            <ins class="new-price">{{ number_format($article->price, 0, '', '') }} FCFA</ins>
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        
    
        <!-- Batteries et chargeurs -->
        <div class="tab-pane active pt-4" id="tab1-4">
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                @foreach ($batteriesChargeurs as $accessoire)
                    @foreach ($accessoire->articles as $article)
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                                        <img src="{{ asset('storage/' . $article->couverture) }}" alt="Product" width="300" height="338" />
                                        {{-- Si vous avez une deuxième image à afficher, vous pouvez la décommenter --}}
                                        {{-- <img src="{{ asset('storage/' . $article->image_2) }}" alt="Product" width="300" height="338" /> --}}
                                    </a>
                                    <div class="product-label-group">
                                        @if($article->promotion_value && $article->promotion_value < $article->price)
                                                        @php
                                                            // Calcul du pourcentage de la remise par rapport au prix de l'article
                                                            $discountPercentage = (($article->price - $article->promotion_value) / $article->price) * 100;
                                                        @endphp
                                                        <label class="product-label label-discount">-{{ number_format($discountPercentage, 0) }}%</label>
                                                    @endif
                                        @if($article->created_at >= now()->subMonths(3))
                                            <label class="product-label label-new">New</label>
                                        @endif
                                    </div>
                                </figure>
                                
                                <div class="product-details">
                                    <h4 class="product-name"><a href="#">{{ $article->name }}</a></h4>
                                    <div class="product-price">
                                        @if($article->promotion_type == 'percentage' && $article->promotion_value)
                                            @php
                                                // Calcul du prix après remise en pourcentage
                                                $discountedPrice = $article->price - ($article->price * $article->promotion_value / 100);
                                            @endphp
                                            <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                            <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                        @elseif($article->promotion_type == 'fixed' && $article->promotion_value)
                                            @php
                                                // Calcul du prix après remise en montant fixe
                                                $discountedPrice = $article->price - $article->promotion_value;
                                            @endphp
                                            <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                            <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                        @else
                                            <ins class="new-price">{{ number_format($article->price, 0, '', '') }} FCFA</ins>
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        
    
    </div>
    
    <!-- End of Tab Content -->

    
    <!-- End of Product Wrapper 1 -->

    <div class="banner banner-fashion appear-animate br-sm mb-9" style="background-image: url(assets/images/demos/demo1/banners/4.jpg);
        background-color: #383839;">
        <div class="banner-content align-items-center">
            <div class="content-left d-flex align-items-center mb-3">
                <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">
                    25
                    <sup class="font-weight-bold">%</sup><sub class="font-weight-bold ls-25">de red.</sub>
                </div>
                <hr class="banner-divider bg-white mt-0 mb-0 mr-8">
            </div>
            <div class="content-right d-flex align-items-center flex-1 flex-wrap">
                <div class="banner-info mb-0 mr-auto pr-4 mb-3">
                    {{-- <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">For Today's
                        Fashion</h3> --}}
                    {{-- <p class="text-white mb-0">Use code
                        <span
                            class="text-dark bg-white font-weight-bold ls-50 pl-1 pr-1 d-inline-block">Black
                            <strong>12345</strong></span> to get best offer.</p> --}}
                </div>
                <a href="/magasin"
                    class="btn btn-white btn-outline btn-rounded btn-icon-right mb-3">Decouvrir<i
                        class="w-icon-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <!-- End of Banner Fashion -->

    <div class="product-wrapper-1 appear-animate mb-8">
        <div class="title-link-wrapper pb-1 mb-4">
            <h2 class="title ls-normal mb-0">Ecrans</h2>
            <a href="/magasin#products" class="font-size-normal font-weight-bold ls-25 mb-0">Plus de produits<i class="w-icon-long-arrow-right"></i></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-4 mb-4">
                <div class="banner h-100 br-sm" style=" 
                background-color: #252525;">
                    <div class="banner-content content-top">
                        <h5 class="banner-subtitle text-white font-weight-normal mb-2"></h5>
                        <hr class="banner-divider bg-white mb-2">
                        <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">
                            GAMME <br> <span
                                class="font-weight-normal text-capitalize">ECRANS</span>
                        </h3>
                        <a href="/magasin"
                            class="btn btn-white btn-outline btn-rounded btn-sm">Decouvrir</a>
                    </div>
                </div>
            </div>
            <!-- End of Banner -->
            
            <div class="col-lg-9 col-sm-8">
                <div class="swiper-container swiper-theme" data-swiper-options="{
                    'spaceBetween': 20,
                        'slidesPerView': 2,
                        'grid': {
                            'rows': 1,
                            'fill': 'row'
                        },
                        'pagination': {
                            'el': '.swiper-pagination',
                            'clickable': true
                        },
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2,
                                'grid': {
                                    'rows': 1,
                                    'fill': 'row'
                                }
                            },
                            '992': {
                                'slidesPerView': 3,
                                'grid': {
                                    'rows': 1,
                                    'fill': 'row'
                                }
                            }
                        }
                }">
                <div class="swiper-wrapper">
                    @foreach ($ecrans as $articles)
                        @foreach ($articles->chunk(2) as $chunkedArticles) {{-- Regrouper les articles par lot de 2 --}}
                            <div class="swiper-slide product-col">
                                @foreach ($chunkedArticles as $article)
                                    
                                    <div class="product product-slideup-content mb-3">
                                        <figure class="product-media">
                                            <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                                                <img src="{{ asset('storage/' . $article->couverture) }}" alt="Product" width="216" height="243" style="height: 200px; object-fit:cover" />

                                            </a>
                                            
                                            <div class="product-label-group">
                                                @if($article->promotion_value && $article->promotion_value < $article->price)
                                                        @php
                                                            // Calcul du pourcentage de la remise par rapport au prix de l'article
                                                            $discountPercentage = (($article->price - $article->promotion_value) / $article->price) * 100;
                                                        @endphp
                                                        <label class="product-label label-discount">-{{ number_format($discountPercentage, 0) }}%</label>
                                                    @endif
                                                @if($article->created_at >= now()->subMonths(3))
                                                    <label class="product-label label-new">New</label>
                                                @endif
                                            </div>
                                           
                                        </figure>
                                        <div class="product-details">
                                            {{-- <div class="product-cat">
                                                <a href="shop-banner-sidebar.html">Electronics</a>
                                            </div> --}}
                                            <h3 class="product-name">
                                                <a href="{{ route('article.show', ['slug' => $article->slug]) }}">{{ $article->name }}</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 avis)</a>
                                            </div>
                                            <div class="product-price">
                                                @if($article->promotion_type == 'percentage' && $article->promotion_value)
                                                    @php
                                                        // Calcul du prix après remise en pourcentage
                                                        $discountedPrice = $article->price - ($article->price * $article->promotion_value / 100);
                                                    @endphp
                                                    <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                    <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                                @elseif($article->promotion_type == 'fixed' && $article->promotion_value)
                                                    @php
                                                        // Calcul du prix après remise en montant fixe
                                                        $discountedPrice = $article->price - $article->promotion_value;
                                                    @endphp
                                                    <ins class="new-price">{{ number_format($discountedPrice, 0, '', '') }} FCFA</ins>
                                                    <del class="old-price">{{ number_format($article->price, 0, '', '') }} FCFA</del>
                                                @else
                                                    <ins class="new-price">{{ number_format($article->price, 0, '', '') }} FCFA</ins>
                                                @endif
                                            </div>
                                            
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Ajouter au Panier" data-product-id="{{ $article->id }}">
                                                    <i class="w-icon-cart"></i><span>Ajouter au panier</span></a>
                                                </a>                                                    
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Ajouter Au favori"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Comparer"></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                </div>
                </div>
            </div>
        </div>
    </div>

    
    
    <!-- End of Product Wrapper 1 -->

    <div class="container">
        <div class="row deals-wrapper appear-animate mb-8">
            <div class="col-lg-9 mb-4">
                <div class="single-product h-100 br-sm">
                    <h4 class="title-sm title-underline font-weight-bolder ls-normal">
                        Article en promotion cette semaine
                    </h4>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme nav-top swiper-nav-lg" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 1
                        }">
                            <div class="swiper-wrapper row cols-1 gutter-no">
                                <div class="swiper-slide">
                                    <div class="product product-single row">
                                        <div class="col-md-6">
                                            <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{ asset('assets/images/default.jpg') }}"
                                                                    data-zoom-image="{{ asset('assets/images/default.jpg') }}"
                                                                    alt="Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{ asset('assets/images/default.jpg') }}"
                                                                    data-zoom-image="{{ asset('assets/images/default.jpg') }}"
                                                                    alt="Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{ asset('assets/images/default.jpg') }}"
                                                                    data-zoom-image="{{ asset('assets/images/default.jpg') }}"
                                                                    alt="Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{ asset('assets/images/default.jpg') }}"
                                                                    data-zoom-image="{{ asset('images/default.jpg') }}"
                                                                    alt="Product Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <button class="swiper-button-next"></button>
                                                    <button class="swiper-button-prev"></button>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-discount">25%
                                                            de réduction</label>
                                                    </div>
                                                </div>
                                                <div class="product-thumbs-wrap swiper-container"
                                                    data-swiper-options="{
                                                    'direction': 'vertical',
                                                    'breakpoints': {
                                                        '0': {
                                                            'direction': 'horizontal',
                                                            'slidesPerView': 4
                                                        },
                                                        '992': {
                                                            'direction': 'vertical',
                                                            'slidesPerView': 'auto'
                                                        }
                                                    }
                                                }">
                                                    <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('assets/images/default.jpg') }}"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('assets/images/default.jpg') }}"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('assets/images/default.jpg') }}"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('assets/images/default.jpg') }}"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-details scrollable">
                                                <h2 class="product-title mb-1"><a
                                                        href="#">Coat Pool
                                                        Comfort Jacket</a></h2>
    
                                                <hr class="product-divider">
    
                                                <div class="product-price"><ins class="new-price ls-50">150 FCFA
                                                        -
                                                        18000 FCFA</ins></div>
    
                                                <div class="product-countdown-container flex-wrap">
                                                    <label class="mr-2 text-default">L'offre se termine dans :</label>
                                                    <div class="product-countdown countdown-compact"
                                                        data-until="2025, 01, 04" data-compact="true">
                                                        629 days, 11: 59: 52</div>
                                                </div>
    
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-reviews">(3 Avis)</a>
                                                </div>
    
                                                <div class="product-variation-price">
                                                    <span></span>
                                                </div>
    
                                                <div class="product-form pt-4">
                                                    <div class="product-qty-form mb-2 mr-2">
                                                        <div class="input-group">
                                                            <input class="quantity form-control" type="number"
                                                                min="1" max="10000000">
                                                            <button class="quantity-plus w-icon-plus"></button>
                                                            <button
                                                                class="quantity-minus w-icon-minus"></button>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-cart">
                                                        <i class="w-icon-cart"></i>
                                                        <span>Ajouter au Panier</span>
                                                    </button>
                                                </div>
    
                                                <div class="social-links-wrapper mt-1">
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
                                                            class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                                        <a href="#"
                                                            class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product product-single row">
                                        <div class="col-md-6">
                                            <div
                                                class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                <div
                                                    class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('assets/images/default.jpg')}}"
                                                                    data-zoom-image="{{asset('assets/images/default.jpg')}}"
                                                                    alt="Product Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('assets/images/default.jpg')}}"
                                                                    data-zoom-image="{{asset('assets/images/default.jpg')}}"
                                                                    alt="Product Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('assets/images/default.jpg')}}"
                                                                    data-zoom-image="{{asset('assets/images/default.jpg')}}"
                                                                    alt="Product Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('assets/images/default.jpg')}}"
                                                                    data-zoom-image="{{asset('assets/images/default.jpg')}}"
                                                                    alt="Product Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <button class="swiper-button-next"></button>
                                                    <button class="swiper-button-prev"></button>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-discount">25%
                                                            Off</label>
                                                    </div>
                                                </div>
                                                <div class="product-thumbs-wrap swiper-container"
                                                    data-swiper-options="{
                                                    'breakpoints': {
                                                        '992': {
                                                            'direction': 'vertical',
                                                            'slidesPerView': 'auto'
                                                        }
                                                    }
                                                }">
                                                    <div
                                                        class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{asset('assets/images/default.jpg')}}"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{asset('assets/images/default.jpg')}}"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{asset('assets/images/default.jpg')}}"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{asset('assets/images/default.jpg')}}"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-details scrollable">
                                                <h2 class="product-title mb-1"><a
                                                        href="#">Coat Pool
                                                        Comfort Jacket</a></h2>
    
                                                <hr class="product-divider">
    
                                                <div class="product-price"><ins class="new-price ls-50">$150.00
                                                        -
                                                        $180.00</ins></div>
    
                                                <div class="product-countdown-container flex-wrap">
                                                    <label class="mr-2 text-default">Se termine dans:</label>
                                                    <div class="product-countdown countdown-compact"
                                                        data-until="2025, 01, 21" data-compact="true">
                                                        629 days, 11: 59: 52</div>
                                                </div>
    
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-reviews">(3 Avis)</a>
                                                </div>
    
                                                <div
                                                    class="product-form product-variation-form product-size-swatch mb-3">
                                                    <label class="mb-1">Size:</label>
                                                    <div
                                                        class="flex-wrap d-flex align-items-center product-variations">
                                                        <a href="#" class="size">Extra Large</a>
                                                        <a href="#" class="size">Large</a>
                                                        <a href="#" class="size">Medium</a>
                                                        <a href="#" class="size">Small</a>
                                                    </div>
                                                    <a href="#" class="product-variation-clean">Clean All</a>
                                                </div>
    
                                                <div class="product-variation-price">
                                                    <span></span>
                                                </div>
    
                                                <div class="product-form pt-4">
                                                    <div class="product-qty-form mb-2 mr-2">
                                                        <div class="input-group">
                                                            <input class="quantity form-control" type="number"
                                                                min="1" max="10000000">
                                                            <button class="quantity-plus w-icon-plus"></button>
                                                            <button
                                                                class="quantity-minus w-icon-minus"></button>
                                                        </div>
                                                    </div>
                                                    
                                                    <button class="btn btn-primary btn-cart">
                                                        <i class="w-icon-cart"></i>
                                                        <span>Ajouter au Panier</span>
                                                    </button>
                                                </div>
    
                                                <div class="social-links-wrapper mt-1">
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
                                                            class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                                        <a href="#"
                                                            class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="swiper-button-prev"></button>
                            <button class="swiper-button-next"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="widget widget-products widget-products-bordered h-100">
                    <div class="widget-body br-sm h-100">
                        <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2">Top des meilleurs
                            Ventes</h4>
                        <div class="swiper">
                            <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                'slidesPerView': 1,
                                'spaceBetween': 20,
                                'breakpoints': {
                                    '576': {
                                        'slidesPerView': 2
                                    },
                                    '768': {
                                        'slidesPerView': 3
                                    },
                                    '992': {
                                        'slidesPerView': 1
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-lg-1 cols-md-3">
                                    <div class="swiper-slide product-widget-wrap">
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/default.jpg')}}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">Kitchen Cooker</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$150.60</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/default.jpg')}}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">Professional Pixel Camera</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$215.68</ins><del
                                                        class="old-price">$230.45</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/default.jpg')}}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">Sport Women’s Wear</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$220.20</ins><del
                                                        class="old-price">$300.62</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-widget-wrap">
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/default.jpg')}}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">Latest Speaker</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$250.68</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/default.jpg')}}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">Men's Black Wrist Watch</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$135.60</ins><del
                                                        class="old-price">$155.70</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/default.jpg')}}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">Wash Machine</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$215.68</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-widget-wrap">
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/default.jpg')}}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">Security Guard</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$320.00</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/default.jpg')}}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">Apple Super Notecom</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$243.30</ins><del
                                                        class="old-price">$253.50</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/default.jpg')}}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="#">HD Television</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$450.68</ins><del
                                                        class="old-price">$500.00</del>
                                                </div>
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
        </div>
    </div>

    <h2 class="title title-underline mb-4 ls-normal appear-animate">Marques et Fournisseurs</h2>
    <div class="swiper-container swiper-theme brands-wrapper mb-9 appear-animate" data-swiper-options="{
        'spaceBetween': 0,
        'slidesPerView': 2,
        'breakpoints': {
            '576': {
                'slidesPerView': 3
            },
            '768': {
                'slidesPerView': 4
            },
            '992': {
                'slidesPerView': 5
            },
            '1200': {
                'slidesPerView': 6
            }
        }
    }">
        <div class="swiper-wrapper row gutter-no cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
            <div class="swiper-slide brand-col">
                <figure class="brand-wrapper">
                    <img src="assets/images/demos/demo1/brands/1.png" alt="Brand" width="410"
                        height="186" />
                </figure>
                <figure class="brand-wrapper">
                    <img src="assets/images/demos/demo1/brands/2.png" alt="Brand" width="410"
                        height="186" />
                </figure>
            </div>
            <div class="swiper-slide brand-col">
                <figure class="brand-wrapper">
                    <img src="assets/images/demos/demo1/brands/3.png" alt="Brand" width="410"
                        height="186" />
                </figure>
                <figure class="brand-wrapper">
                    <img src="assets/images/demos/demo1/brands/4.png" alt="Brand" width="410"
                        height="186" />
                </figure>
            </div>
            <div class="swiper-slide brand-col">
                <figure class="brand-wrapper">
                    <img src="assets/images/demos/demo1/brands/5.png" alt="Brand" width="410"
                        height="186" />
                </figure>
                <figure class="brand-wrapper">
                    <img src="assets/images/demos/demo1/brands/6.png" alt="Brand" width="410"
                        height="186" />
                </figure>
            </div>
            <div class="swiper-slide brand-col">
                <figure class="brand-wrapper">
                    <img src="assets/images/demos/demo1/brands/7.png" alt="Brand" width="410"
                        height="186" />
                </figure>
                <figure class="brand-wrapper">
                    <img src="assets/images/demos/demo1/brands/8.png" alt="Brand" width="410"
                        height="186" />
                </figure>
            </div>
            <div class="swiper-slide brand-col">
                <figure class="brand-wrapper">
                    <img src="assets/images/demos/demo1/brands/9.png" alt="Brand" width="410"
                        height="186" />
                </figure>
                <figure class="brand-wrapper">
                    <img src="assets/images/demos/demo1/brands/10.png" alt="Brand" width="410"
                        height="186" />
                </figure>
            </div>
            <div class="swiper-slide brand-col">
                <figure class="brand-wrapper">
                    <img src="assets/images/demos/demo1/brands/11.png" alt="Brand" width="410"
                        height="186" />
                </figure>
                <figure class="brand-wrapper">
                    <img src="assets/images/demos/demo1/brands/12.png" alt="Brand" width="410"
                        height="186" />
                </figure>
            </div>
        </div>
    </div>
    <!-- End of Brands Wrapper -->
   
</div>
@endsection


@push('scripts') 
<script>
    $(document).ready(function() {
        // Quand l'utilisateur clique sur un bouton "Ajouter au Panier"
        $('.btn-cart').on('click', function(e) {
            e.preventDefault(); // Empêcher le comportement par défaut du lien
            
            // Récupérer l'ID du produit à partir de l'attribut 'data-product-id'
            var productId = $(this).data('product-id');

            // Vérifier si l'ID du produit est valide
            if (!productId) {
                alert('Produit non trouvé.');
                return;
            }

            // Faire une requête AJAX pour ajouter le produit au panier
            $.ajax({
                url: '{{ route('addToCart') }}', // Route pour ajouter au panier
                method: 'POST', // Méthode POST
                data: {
                    _token: '{{ csrf_token() }}', // Token CSRF pour la sécurité
                    product_id: productId // L'ID du produit à ajouter
                },
                success: function(response) {
                    // Afficher un message de succès si l'ajout a réussi
                    //alert('Produit ajouté au panier !');
                    // Vous pouvez aussi mettre à jour l'interface ici, comme le compteur du panier
                },
                error: function(xhr, status, error) {
                    // Si une erreur se produit, afficher l'erreur détaillée
                    var errorMessage = 'Une erreur s\'est produite. Veuillez réessayer.';

                    // Vérifier si une réponse JSON est retournée et si elle contient une erreur
                    if (xhr.responseJSON && xhr.responseJSON.error) {
                        errorMessage = xhr.responseJSON.error; // Utiliser l'erreur spécifique du serveur
                    }

                    // Afficher l'erreur
                    alert(errorMessage);
                }
            });
        });
    });
</script>

@endpush