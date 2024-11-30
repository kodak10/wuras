@extends('frontend.layouts.master')

@section('content')
<!-- Start of Breadcrumb -->
<nav class="breadcrumb-nav">
    <div class="container">
        <ul class="breadcrumb bb-no">
            <li><a href="/">Accueil</a></li>
            <li>Boutique</li>
        </ul>
    </div>
</nav>
<!-- End of Breadcrumb -->

<!-- Start of Page Content -->
<div class="page-content">
    <div class="container">
        <!-- Start of Shop Banner -->
        <div class="shop-default-banner banner d-flex align-items-center mb-5 br-xs"
            style="background-image: url(assets/images/shop/banner1.jpg); background-color: #FFC74E;">
            <div class="banner-content">
                <h4 class="banner-subtitle font-weight-bold">Accessories Collection</h4>
                <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-normal">Smart Wrist
                    Watches</h3>
                <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Discover
                    Now<i class="w-icon-long-arrow-right"></i></a>
            </div>
        </div>
        <!-- End of Shop Banner -->

        <div class="shop-default-brands mb-5">
            <div class="brands-swiper swiper-container swiper-theme "
                data-swiper-options="{
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 6
                        },
                        '1200': {
                            'slidesPerView': 7
                        }
                    },
                    'autoplay': {
                        'delay': 4000,
                        'disableOnInteraction': false
                    }
                }">
                <div class="swiper-wrapper row gutter-no cols-xl-7 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                    <div class="swiper-slide">
                        <figure>
                            <img src="assets/images/brands/category/1.png" alt="Brand" width="160" height="90" />
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="assets/images/brands/category/2.png" alt="Brand" width="160" height="90" />
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="assets/images/brands/category/3.png" alt="Brand" width="160" height="90" />
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="assets/images/brands/category/4.png" alt="Brand" width="160" height="90" />
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="assets/images/brands/category/5.png" alt="Brand" width="160" height="90" />
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="assets/images/brands/category/6.png" alt="Brand" width="160" height="90" />
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="assets/images/brands/category/7.png" alt="Brand" width="160" height="90" />
                        </figure>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- End of Shop Brands-->

        <!-- Start of Shop Category -->
        <div class="shop-default-category category-ellipse-section mb-6">
            <div class="swiper-container swiper-theme shadow-swiper"
                data-swiper-options="{
                'spaceBetween': 20,
                'slidesPerView': 2,
                'breakpoints': {
                    '480': {
                        'slidesPerView': 3
                    },
                    '576': {
                        'slidesPerView': 4
                    },
                    '768': {
                        'slidesPerView': 6
                    },
                    '992': {
                        'slidesPerView': 7
                    },
                    '1200': {
                        'slidesPerView': 8,
                        'spaceBetween': 30
                    }
                }
            }">
                {{-- <div class="swiper-wrapper row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">
                    <div class="swiper-slide category-wrap">
                        <div class="category category-ellipse">
                            <figure class="category-media">
                                <a href="shop-banner-sidebar.html">
                                    <img src="assets/images/categories/category-4.jpg" alt="Categroy"
                                        width="190" height="190" style="background-color: #5C92C0;" />
                                </a>
                            </figure>
                            <div class="category-content">
                                <h4 class="category-name">
                                    <a href="shop-banner-sidebar.html">Sports</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide category-wrap">
                        <div class="category category-ellipse">
                            <figure class="category-media">
                                <a href="shop-banner-sidebar.html">
                                    <img src="assets/images/categories/category-5.jpg" alt="Categroy"
                                        width="190" height="190" style="background-color: #B8BDC1;" />
                                </a>
                            </figure>
                            <div class="category-content">
                                <h4 class="category-name">
                                    <a href="shop-banner-sidebar.html">Babies</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide category-wrap">
                        <div class="category category-ellipse">
                            <figure class="category-media">
                                <a href="shop-banner-sidebar.html">
                                    <img src="assets/images/categories/category-6.jpg" alt="Categroy"
                                        width="190" height="190" style="background-color: #99C4CA;" />
                                </a>
                            </figure>
                            <div class="category-content">
                                <h4 class="category-name">
                                    <a href="shop-banner-sidebar.html">Sneakers</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide category-wrap">
                        <div class="category category-ellipse">
                            <figure class="category-media">
                                <a href="shop-banner-sidebar.html">
                                    <img src="assets/images/categories/category-7.jpg" alt="Categroy"
                                        width="190" height="190" style="background-color: #4E5B63;" />
                                </a>
                            </figure>
                            <div class="category-content">
                                <h4 class="category-name">
                                    <a href="shop-banner-sidebar.html">Cameras</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide category-wrap">
                        <div class="category category-ellipse">
                            <figure class="category-media">
                                <a href="shop-banner-sidebar.html">
                                    <img src="assets/images/categories/category-8.jpg" alt="Categroy"
                                        width="190" height="190" style="background-color: #D3E5EF;" />
                                </a>
                            </figure>
                            <div class="category-content">
                                <h4 class="category-name">
                                    <a href="shop-banner-sidebar.html">Games</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide category-wrap">
                        <div class="category category-ellipse">
                            <figure class="category-media">
                                <a href="shop-banner-sidebar.html">
                                    <img src="assets/images/categories/category-9.jpg" alt="Categroy"
                                        width="190" height="190" style="background-color: #65737C;" />
                                </a>
                            </figure>
                            <div class="category-content">
                                <h4 class="category-name">
                                    <a href="shop-banner-sidebar.html">Kitchen</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide category-wrap">
                        <div class="category category-ellipse">
                            <figure class="category-media">
                                <a href="shop-banner-sidebar.html">
                                    <img src="assets/images/categories/category-20.jpg" alt="Categroy"
                                        width="190" height="190" style="background-color: #E4E4E4;" />
                                </a>
                            </figure>
                            <div class="category-content">
                                <h4 class="category-name">
                                    <a href="shop-banner-sidebar.html">Watches</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide category-wrap">
                        <div class="category category-ellipse">
                            <figure class="category-media">
                                <a href="shop-banner-sidebar.html">
                                    <img src="assets/images/categories/category-21.jpg" alt="Categroy"
                                        width="190" height="190" style="background-color: #D3D8DE;" />
                                </a>
                            </figure>
                            <div class="category-content">
                                <h4 class="category-name">
                                    <a href="shop-banner-sidebar.html">Clothes</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="swiper-wrapper row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">
                    @foreach ($tags as $tag)
                    <div class="swiper-slide category-wrap">
                        <div class="category category-ellipse">
                            <figure class="category-media">
                                <a href="#">
                                    <img src="{{ $tag['image'] }}" alt="{{ $tag['tag_name'] }}" width="190" height="190"
                                         style="background-color: {{ $tag['tag_thumbnail'] }};" />
                                </a>
                            </figure>
                            <div class="category-content">
                                <h4 class="category-name">
                                    <a href="#">{{ $tag['tag_name'] }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                

                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- End of Shop Category -->

        <!-- Start of Shop Content -->
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
                            <a href="#" class="btn btn-dark btn-link filter-clean">Effacer</a>
                        </div>
                        <!-- Start of Collapsible widget -->
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title"><label>Toutes les catégories</label></h3>
                            <ul class="widget-body filter-items search-ul">
                                @forelse ($categories as $categorie)
                                <li><a href="#">{{$categorie->name}}</a></li>
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
                                    <li><a href="#">$0.00 - $100.00</a></li>
                                    <li><a href="#">$100.00 - $200.00</a></li>
                                    <li><a href="#">$200.00 - $300.00</a></li>
                                    <li><a href="#">$300.00 - $500.00</a></li>
                                    <li><a href="#">$500.00+</a></li>
                                </ul>
                                <form class="price-range">
                                    <input type="number" name="min_price" class="min_price text-center"
                                        placeholder="$min"><span class="delimiter">-</span><input
                                        type="number" name="max_price" class="max_price text-center"
                                        placeholder="$max"><a href="#"
                                        class="btn btn-primary btn-rounded">Go</a>
                                </form>
                            </div>
                        </div>
                        <!-- End of Collapsible Widget -->

                        <!-- Start of Collapsible Widget -->
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title"><label>Size</label></h3>
                            <ul class="widget-body filter-items item-check mt-1">
                                <li><a href="#">Extra Large</a></li>
                                <li><a href="#">Large</a></li>
                                <li><a href="#">Medium</a></li>
                                <li><a href="#">Small</a></li>
                            </ul>
                        </div>
                        <!-- End of Collapsible Widget -->

                        <!-- Start of Collapsible Widget -->
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title"><label>Brand</label></h3>
                            <ul class="widget-body filter-items item-check mt-1">
                                <li><a href="#">Elegant Auto Group</a></li>
                                <li><a href="#">Green Grass</a></li>
                                <li><a href="#">Node Js</a></li>
                                <li><a href="#">NS8</a></li>
                                <li><a href="#">Red</a></li>
                                <li><a href="#">Skysuite Tech</a></li>
                                <li><a href="#">Sterling</a></li>
                            </ul>
                        </div>
                        <!-- End of Collapsible Widget -->

                        <!-- Start of Collapsible Widget -->
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title"><label>Color</label></h3>
                            <ul class="widget-body filter-items item-check mt-1">
                                <li><a href="#">Black</a></li>
                                <li><a href="#">Blue</a></li>
                                <li><a href="#">Brown</a></li>
                                <li><a href="#">Green</a></li>
                                <li><a href="#">Grey</a></li>
                                <li><a href="#">Orange</a></li>
                                <li><a href="#">Yellow</a></li>
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
                            <label>Trier par :</label>
                            <select name="orderby" class="form-control">
                                <option value="default" selected="selected">Tri par défaut</option>
                                <option value="popularity">Trier par popularité</option>
                                <option value="rating">Trier par note moyenne</option>
                                <option value="date">Trier par plus récent</option>
                                <option value="price-low">Trier par prix : du plus bas au plus élevé</option>
                                <option value="price-high">Trier par prix : du haut au bas</option>
                            </select>
                        </div>
                    </div>
                    <div class="toolbox-right">
                        <div class="toolbox-item toolbox-show select-box">
                            <select name="count" class="form-control">
                                <option value="9">Voir 9</option>
                                <option value="12" selected="selected">Show 12</option>
                                <option value="24">Show 24</option>
                                <option value="36">Show 36</option>
                            </select>
                        </div>
                        <div class="toolbox-item toolbox-layout">
                            <a href="shop-banner-sidebar.html" class="icon-mode-grid btn-layout active">
                                <i class="w-icon-grid"></i>
                            </a>
                            <a href="shop-list.html" class="icon-mode-list btn-layout">
                                <i class="w-icon-list"></i>
                            </a>
                        </div>
                    </div>
                </nav>
                <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                    @forelse ($categories_shops as $categories_shop)
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{$categories_shop->couverture}}" alt="Product" width="300" height="338" />
                                        {{-- <img src="assets/images/shop/1.jpg" alt="Product" width="300" height="338" /> --}}

                                    </a>
                                    <div class="product-action-horizontal">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Ajouter au Panier"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Compare"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quick View"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    {{-- <div class="product-cat">
                                        <a href="shop-banner-sidebar.html">{{$categories_shop->categories->name}}</a>
                                    </div> --}}
                                    <div class="product-cat">
                                        <!-- Affiche le nom de la première catégorie de l'article -->
                                        @if ($categories_shop->categories->isNotEmpty())
                                            <a href="shop-banner-sidebar.html">{{ $categories_shop->categories->first()->name }}</a>
                                        @else
                                            <p>Pas de catégorie</p>
                                        @endif
                                    </div>
                                    <h3 class="product-name">
                                        <a href="#">{{$categories_shop->name}}</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">
                                            $220.00 - $230.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        Rien à afficher
                    @endforelse
                    
                  
                </div>

                {{-- <div class="toolbox toolbox-pagination justify-content-between">
                    <p class="showing-info mb-2 mb-sm-0">
                        Showing<span>1-12 of 60</span>Products
                    </p>
                    <ul class="pagination">
                        <li class="prev disabled">
                            <a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                <i class="w-icon-long-arrow-left"></i>Prev
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="next">
                            <a href="#" aria-label="Next">
                                Next<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div> --}}
                <div class="toolbox toolbox-pagination justify-content-between">
                    <p class="showing-info mb-2 mb-sm-0">
                        Affichage de {{ $categories_shops->firstItem() }} à {{ $categories_shops->lastItem() }} sur {{ $categories_shops->total() }} articles.
                    </p>
                    <ul class="pagination">
                        {{ $categories_shops->links('vendor.pagination.bootstrap-4') }}
                    </ul>
                </div>
                
            </div>
            <!-- End of Shop Main Content -->
        </div>
        <!-- End of Shop Content -->
    </div>
</div>
<!-- End of Page Content -->


<!-- Start of Vue rapide -->
{{-- <div class="product product-single product-popup">
    <div class="row gutter-lg">
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="product-gallery product-gallery-sticky">
                <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                    <div class="swiper-wrapper row cols-1 gutter-no">
                        <div class="swiper-slide">
                            <figure class="product-image">
                                <img src="assets/images/products/popup/1-440x494.jpg"
                                    data-zoom-image="assets/images/products/popup/1-800x900.jpg"
                                    alt="Water Boil Black Utensil" width="800" height="900">
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="product-image">
                                <img src="assets/images/products/popup/2-440x494.jpg"
                                    data-zoom-image="assets/images/products/popup/2-800x900.jpg"
                                    alt="Water Boil Black Utensil" width="800" height="900">
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="product-image">
                                <img src="assets/images/products/popup/3-440x494.jpg"
                                    data-zoom-image="assets/images/products/popup/3-800x900.jpg"
                                    alt="Water Boil Black Utensil" width="800" height="900">
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="product-image">
                                <img src="assets/images/products/popup/4-440x494.jpg"
                                    data-zoom-image="assets/images/products/popup/4-800x900.jpg"
                                    alt="Water Boil Black Utensil" width="800" height="900">
                            </figure>
                        </div>
                    </div>
                    <button class="swiper-button-next"></button>
                    <button class="swiper-button-prev"></button>
                </div>
                <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                    'navigation': {
                        'nextEl': '.swiper-button-next',
                        'prevEl': '.swiper-button-prev'
                    }
                }">
                    <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                        <div class="product-thumb swiper-slide">
                            <img src="assets/images/products/popup/1-103x116.jpg" alt="Product Thumb" width="103"
                                height="116">
                        </div>
                        <div class="product-thumb swiper-slide">
                            <img src="assets/images/products/popup/2-103x116.jpg" alt="Product Thumb" width="103"
                                height="116">
                        </div>
                        <div class="product-thumb swiper-slide">
                            <img src="assets/images/products/popup/3-103x116.jpg" alt="Product Thumb" width="103"
                                height="116">
                        </div>
                        <div class="product-thumb swiper-slide">
                            <img src="assets/images/products/popup/4-103x116.jpg" alt="Product Thumb" width="103"
                                height="116">
                        </div>
                    </div>
                    <button class="swiper-button-next"></button>
                    <button class="swiper-button-prev"></button>
                </div>
            </div>
        </div>
        <div class="col-md-6 overflow-hidden p-relative">
            <div class="product-details scrollable pl-0">
                <h2 class="product-title">Electronics Black Wrist Watch</h2>
                <div class="product-bm-wrapper">
                    <figure class="brand">
                        <img src="assets/images/products/brand/brand-1.jpg" alt="Brand" width="102" height="48" />
                    </figure>
                    <div class="product-meta">
                        <div class="product-categories">
                            Category:
                            <span class="product-category"><a href="#">Electronics</a></span>
                        </div>
                        <div class="product-sku">
                            SKU: <span>MS46891340</span>
                        </div>
                    </div>
                </div>

                <hr class="product-divider">

                <div class="product-price">$40.00</div>

                <div class="ratings-container">
                    <div class="ratings-full">
                        <span class="ratings" style="width: 80%;"></span>
                        <span class="tooltiptext tooltip-top"></span>
                    </div>
                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                </div>

                <div class="product-short-desc">
                    <ul class="list-type-check list-style-none">
                        <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                        <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                        <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                    </ul>
                </div>

                <hr class="product-divider">

                <div class="product-form product-variation-form product-color-swatch">
                    <label>Color:</label>
                    <div class="d-flex align-items-center product-variations">
                        <a href="#" class="color" style="background-color: #ffcc01"></a>
                        <a href="#" class="color" style="background-color: #ca6d00;"></a>
                        <a href="#" class="color" style="background-color: #1c93cb;"></a>
                        <a href="#" class="color" style="background-color: #ccc;"></a>
                        <a href="#" class="color" style="background-color: #333;"></a>
                    </div>
                </div>
                <div class="product-form product-variation-form product-size-swatch">
                    <label class="mb-1">Size:</label>
                    <div class="flex-wrap d-flex align-items-center product-variations">
                        <a href="#" class="size">Small</a>
                        <a href="#" class="size">Medium</a>
                        <a href="#" class="size">Large</a>
                        <a href="#" class="size">Extra Large</a>
                    </div>
                    <a href="#" class="product-variation-clean">Clean All</a>
                </div>

                <div class="product-variation-price">
                    <span></span>
                </div>

                <div class="product-form">
                    <div class="product-qty-form">
                        <div class="input-group">
                            <input class="quantity form-control" type="number" min="1" max="10000000">
                            <button class="quantity-plus w-icon-plus"></button>
                            <button class="quantity-minus w-icon-minus"></button>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-cart">
                        <i class="w-icon-cart"></i>
                        <span>Ajouter au Panier</span>
                    </button>
                </div>

                <div class="social-links-wrapper">
                    <div class="social-links">
                        <div class="social-icons social-no-color border-thin">
                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                            <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                            <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                            <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                        </div>
                    </div>
                    <span class="divider d-xs-show"></span>
                    <div class="product-link-wrapper d-flex">
                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                        <a href="#"
                            class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="product product-single product-popup">
    <div class="row gutter-lg">
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="product-gallery product-gallery-sticky">
                <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                    <div class="swiper-wrapper row cols-1 gutter-no">
                        @if($categories_shop && $categories_shop->articles && $categories_shop->articles->isNotEmpty())
                            @foreach($categories_shop->articles as $article)
                                @if($article->images && $article->images->isNotEmpty())
                                    @foreach($article->images as $image)
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                
                                                <img src="{{ asset('assets/images/products/popup/4-440x494.jpg') }}" data-zoom-image="{{ asset('assets/images/products/popup/4-440x494.jpg') }}" alt="Image" width="800" height="900">

                                                <img src="{{ $image->image_path }}" data-zoom-image="{{ $image->image_path }}" alt="{{ $article->name }}" width="800" height="900">
                                            </figure>
                                        </div>
                                    @endforeach
                                @else
                                    <p>No images available for this article</p>
                                @endif
                            @endforeach
                        @else
                            <p>No articles available</p>
                        @endif

                    </div>
                    <button class="swiper-button-next"></button>
                    <button class="swiper-button-prev"></button>
                </div>
                <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                    'navigation': {
                        'nextEl': '.swiper-button-next',
                        'prevEl': '.swiper-button-prev'
                    }
                }">
                    <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                        <!-- Thumbnail images for navigation -->
                        {{-- @foreach($categories_shop->articles->images as $image)
                            <div class="product-thumb swiper-slide">
                                <img src="{{ $image->url }}" alt="Product Thumb" width="103" height="116">
                            </div>
                        @endforeach --}}

                        @if($categories_shop && $categories_shop->articles && $categories_shop->articles->isNotEmpty())
                            @foreach($categories_shop->articles as $article)
                                @if($article->images && $article->images->isNotEmpty())
                                    @foreach($article->images as $image)
                                        <div class="product-thumb swiper-slide">
                                            <img src="{{ asset('assets/images/products/popup/4-440x494.jpg') }}" alt="Petire Image" width="103" height="116">
                                        </div>
                                    @endforeach
                                @else
                                    <p>No images available for this article</p>
                                @endif
                            @endforeach
                        @else
                            <p>No articles available</p>
                        @endif

                       

                         

                        
                    </div>
                    <button class="swiper-button-next"></button>
                    <button class="swiper-button-prev"></button>
                </div>
            </div>
        </div>

        <div class="col-md-6 overflow-hidden p-relative">
            <div class="product-details scrollable pl-0">
                <!-- Product Title -->
                <h2 class="product-title">{{ $categories_shop->name }}</h2>
                <div class="product-bm-wrapper">
                    <figure class="brand">
                        <img src="" alt="Brand" width="102" height="48" />
                    </figure>
                    <div class="product-meta">
                        <div class="product-categories">
                            Category:
                            <span class="product-category">
                                <!-- Display the first category -->
                                @if ($categories_shop->categories->isNotEmpty())
                                    <a href="shop-banner-sidebar.html">{{ $categories_shop->categories->first()->name }}</a>
                                @else
                                    <p>No category</p>
                                @endif
                            </span>
                        </div>
                       
                    </div>
                </div>

                <hr class="product-divider">

                <!-- Product Price -->
                <div class="product-price">
                    
                    @if($categories_shop->price)
                        ${{ $categories_shop->price }}
                    @else
                        Price not available
                    @endif
                </div>

                <!-- Ratings -->
                {{-- <div class="ratings-container">
                    <div class="ratings-full">
                        <span class="ratings" style="width: {{ $categories_shop->rating * 20 }}%;"></span>
                        <span class="tooltiptext tooltip-top"></span>
                    </div>
                    <a href="#" class="rating-reviews">({{ $categories_shop->reviews_count }} Reviews)</a>
                </div> --}}

                <!-- Product Description -->
                <div class="product-short-desc">
                    <p>
                        @if($categories_shop->price)
                            {{ $categories_shop->description }}
                            @else
                            description not available
                        @endif
                    </p>
                    {{-- <ul class="list-type-check list-style-none">
                        @foreach ($categories_shop as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                        @if($categories_shop->price)
                        ${{ $categories_shop->price }}
                    @else
                        Price not available
                    @endif
                    </ul> --}}
                </div>

                <hr class="product-divider">

                <!-- Product Variations (Color/Size) -->
                {{-- <div class="product-form product-variation-form product-color-swatch">
                    <label>Color:</label>
                    <div class="d-flex align-items-center product-variations">
                        @foreach($categories_shop->colors as $color)
                            <a href="#" class="color" style="background-color: {{ $color }}"></a>
                        @endforeach
                    </div>
                </div> --}}
                {{-- <div class="product-form product-variation-form product-size-swatch">
                    <label class="mb-1">Size:</label>
                    <div class="flex-wrap d-flex align-items-center product-variations">
                        @foreach($categories_shop->sizes as $size)
                            <a href="#" class="size">{{ $size }}</a>
                        @endforeach
                    </div>
                    <a href="#" class="product-variation-clean">Clean All</a>
                </div> --}}

                {{-- <div class="product-variation-price">
                    <span></span>
                </div> --}}

                <!-- Ajouter au Panier and Quantity -->
                <div class="product-form">
                    <div class="product-qty-form">
                        <div class="input-group">
                            <input class="quantity form-control" type="number" min="1" max="10000000" value="1">
                            <button class="quantity-plus w-icon-plus"></button>
                            <button class="quantity-minus w-icon-minus"></button>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-cart">
                        <i class="w-icon-cart"></i>
                        <span>Ajouter au Panier</span>
                    </button>
                </div>

                <!-- Social Links -->
                <div class="social-links-wrapper">
                    <div class="social-links">
                        <div class="social-icons social-no-color border-thin">
                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                            <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                            <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                            <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                        </div>
                    </div>
                    <span class="divider d-xs-show"></span>
                    <div class="product-link-wrapper d-flex">
                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                        <a href="#" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End of Vue rapide -->
@endsection