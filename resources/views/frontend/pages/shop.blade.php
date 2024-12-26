@extends('frontend.layouts.master')

@push('styles')
<style>
    .search-ul li.active {
        color: #1c93cb !important;
    }
</style>
@endpush
@section('content')
<!-- Start of Breadcrumb -->
<nav class="breadcrumb-nav mt-5 mb-3">
    <div class="container">
        <ul class="breadcrumb bb-no">
            <li><a href="/">Accueil</a></li>
            <li>Magasin</li>
        </ul>
    </div>
</nav>
<!-- End of Breadcrumb -->

<!-- Start of Page Content -->
<div class="page-content">
    <div class="container">
      
        <div class="shop-content row gutter-lg mb-10">
            <!-- Start of Sidebar, Shop Sidebar -->
            <aside class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed">
                <!-- Start of Sidebar Overlay -->
                <div class="sidebar-overlay"></div>
                <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

                <!-- Start of Sidebar Content -->
                <div class="sidebar-content scrollable">
                    <!-- Start of Sticky Sidebar -->
                    <div class="sticky-sidebar">
                        <div class="filter-actions">
                            <label>Filtrer :</label>
                            <a href="/magasin" class="btn btn-dark btn-link filter-clean">Effacer</a>
                        </div>
                        <!-- Start of Collapsible widget -->
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title"><label>Toutes les catégories</label></h3>
                            <ul class="widget-body filter-items search-ul">
                                @forelse ($categories as $categorie)
                                <li class="{{ isset($categoryId) && $categoryId == $categorie->id ? 'active' : '' }}">
                                    <a href="{{ route('shop', ['category' => $categorie->id, 'min_price' => request('min_price'), 'max_price' => request('max_price')]) }}">{{$categorie->name}}</a>
                                </li>
                                @empty
                                    Rien à afficher
                                @endforelse
                                
                                
                            </ul>
                        </div>
                        <!-- End of Collapsible Widget -->

                        <!-- Start of Collapsible Widget -->
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title"><label>Prix</label></h3>
                            <div class="widget-body">
                                <ul class="filter-items search-ul">
                                    <li class="{{ request('min_price') == 0 && request('max_price') == 100000 ? 'active' : '' }}">
                                        <a href="{{ route('shop', ['min_price' => 0.00, 'max_price' => 100000.00]) }}">0 FCFA - 100000 FCFA</a>
                                    </li>
                                    <li class="{{ request('min_price') == 101000 && request('max_price') == 150000 ? 'active' : '' }}">
                                        <a href="{{ route('shop', ['min_price' => 101000.00, 'max_price' => 150000.00]) }}">101000 FCFA - 150000 FCFA</a>
                                    </li>
                                    <li class="{{ request('min_price') == 150100 && request('max_price') == 200000 ? 'active' : '' }}">
                                        <a href="{{ route('shop', ['min_price' => 150100.00, 'max_price' => 200000.00]) }}">150100 FCFA - 200000 FCFA</a>
                                    </li>
                                    <li class="{{ request('min_price') == 201000 && request('max_price') == 300000 ? 'active' : '' }}">
                                        <a href="{{ route('shop', ['min_price' => 201000.00, 'max_price' => 300000.00]) }}">201000 FCFA - 300000 FCFA</a>
                                    </li>
                                    <li class="{{ request('min_price') == 300001 ? 'active' : '' }}">
                                        <a href="{{ route('shop', ['min_price' => 300001.00]) }}">300000 FCFA +</a>
                                    </li>
                                </ul>
                                <form action="{{ route('shop') }}" method="GET" class="price-range">
                                    <input type="number" name="min_price" class="min_price text-center" 
                                           value="{{ request('min_price') }}" placeholder="min">
                                    <span class="delimiter">-</span>
                                    <input type="number" name="max_price" class="max_price text-center" 
                                           value="{{ request('max_price') }}" placeholder="max">
                                    <button type="submit" class="btn btn-primary btn-rounded">Voir</button>
                                </form>
                                
                            </div>
                        </div>
                        <!-- End of Collapsible Widget -->

                        <!-- Start of Collapsible Widget -->
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title"><label>Marques</label></h3>
                            <ul class="widget-body filter-items item-check mt-1">
                                <li><a href="#">HP</a></li>
                                <li><a href="#">Dell</a></li>
                                <li><a href="#">Lenovo</a></li>
                            </ul>
                        </div>
                        <!-- End of Collapsible Widget -->
                       
                    </div>
                    <!-- End of Sidebar Content -->
                </div>
                <!-- End of Sidebar Content -->
            </aside>
            <!-- End of Shop Sidebar -->

            <!-- Start of Shop Main Content -->
            <div class="main-content">
                
                <nav class="toolbox sticky-toolbox sticky-content fix-top">
                    <div class="toolbox-left">
                        <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                            btn-icon-left d-block d-lg-none"><i
                                class="w-icon-category"></i><span>Filters</span></a>
                        <div class="toolbox-item toolbox-sort select-box text-dark">
                            <label>Sort By :</label>
                            <select name="orderby" class="form-control">
                                <option value="default" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price-low">Sort by pric: low to high</option>
                                <option value="price-high">Sort by price: high to low</option>
                            </select>
                        </div>
                    </div>
                    <div class="toolbox-right">
                        <div class="toolbox-item toolbox-show select-box">
                            <select name="count" class="form-control">
                                <option value="9">Show 9</option>
                                <option value="12" selected="selected">Show 12</option>
                                <option value="24">Show 24</option>
                                <option value="36">Show 36</option>
                            </select>
                        </div>
                        <div class="toolbox-item toolbox-layout">
                            <a href="#" class="icon-mode-grid btn-layout active">
                                <i class="w-icon-grid"></i>
                            </a>
                            <a href="#" class="icon-mode-list btn-layout">
                                <i class="w-icon-list"></i>
                            </a>
                        </div>
                    </div>
                </nav>
                <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2" id="products">
                    @forelse ($categories_shops as $categories_shop)
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="{{ route('article.show', ['slug' => $categories_shop->slug]) }}">
                                        <img src="{{ asset('storage/' . $categories_shop['couverture']) }}" alt="Product" width="300" height="338" style="height: 300px; object-fit:cover"  />
                                    </a>
                                    <div class="product-action-horizontal">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Ajouter au Panier" data-product-id="{{ $categories_shop->id }}"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Mes Souhaits"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Comparer"></a>
                                        
                                    </div>
                                    <div class="product-label-group">
                                        @if($categories_shop->discount_value && $categories_shop->discount_value < $categories_shop->price)
                                            @php
                                                $discountPercentage = (($categories_shop->price - $categories_shop->discount_value) / $categories_shop->price) * 100;
                                            @endphp
                                            <label class="product-label label-discount">-{{ number_format($discountPercentage, 0) }}%</label>
                                        @endif
                                        @if($categories_shop->created_at >= now()->subMonths(3))
                                            <label class="product-label label-new">New</label>
                                        @endif
                                    </div>
                                </figure>
                                <div class="product-details">
                                    {{-- <div class="product-cat">
                                        <a href="#">{{$categories_shop->categories->name}}</a>
                                    </div> --}}
                                    <div class="product-cat">
                                        <!-- Affiche le nom de la première catégorie de l'article -->
                                        @if ($categories_shop->categories->isNotEmpty())
                                            <a href="#">{{ $categories_shop->categories->first()->name }}</a>
                                        @else
                                            <p>Aucune catgéorie</p>
                                        @endif
                                    </div>
                                    <h3 class="product-name">
                                        <a href="#">{{$categories_shop->name}}</a>
                                    </h3>
                                    
                                    <div class="product-pa-wrapper">
                                       
                                        <div class="product-price">
                                            @if($categories_shop->discount_value)
                                                <ins class="new-price">{{ number_format($categories_shop->discount_value, 0, '', '') }} FCFA</ins>
                                                <del class="old-price">{{ number_format($categories_shop->price, 0, '', '') }} FCFA</del>
                                            @else
                                                <ins class="new-price">{{ number_format($categories_shop->price, 0, '', '') }} FCFA</ins>
                                            @endif
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        Rien à afficher
                    @endforelse
                    
                  
                </div>

                
                <div class="toolbox toolbox-pagination justify-content-between">
                    <p class="showing-info mb-2 mb-sm-0">
                        Affichage de {{ $categories_shops->firstItem() }} à {{ $categories_shops->lastItem() }} sur {{ $categories_shops->total() }} articles.
                    </p>
                    <ul class="pagination">
                        {{ $categories_shops->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}
                    </ul>
                </div>
                
            </div>
            <!-- End of Shop Main Content -->
        </div>
        <!-- End of Shop Content -->
    </div>
</div>
<!-- End of Page Content -->



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
                                                    data-until="2024, 12, 16" data-compact="true">
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
                                                <label class="mr-2 text-default">Offer Ends In:</label>
                                                <div class="product-countdown countdown-compact"
                                                    data-until="2024, 12, 16" data-compact="true">
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