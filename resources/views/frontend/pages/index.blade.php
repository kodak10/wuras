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
</style>
<section class="intro-section">
    <div class="swiper-container swiper-theme nav-inner pg-inner swiper-nav-lg animation-slider pg-xxl-hide nav-xxl-show nav-hide"
        data-swiper-options="{
        'slidesPerView': 1,
        'autoplay': {
            'delay': 8000,
            'disableOnInteraction': false
        }
    }">
        <div class="swiper-wrapper">
            <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                style="background-image: url(assets/images/demos/demo1/sliders/slide-1.jpg); background-color: #ebeef2;">
                <div class="container">
                    <figure class="slide-image skrollable slide-animate">
                        <img src="{{asset('assets/images/slides-bg/1.png')}}" alt="Banner"
                            data-bottom-top="transform: translateY(10vh);"
                            data-top-bottom="transform: translateY(-10vh);" width="500" height="450">
                    </figure>
                    <div class="banner-content y-50 text-right">
                        <h5 class="banner-subtitle font-weight-normal text-default ls-50 lh-1 mb-2 slide-animate"
                            data-animation-options="{
                        'name': 'fadeInRightShorter',
                        'duration': '1s',
                        'delay': '.2s'
                    }">
                            Lorem ipsum <span class="p-relative d-inline-block">officiis</span>
                        </h5>
                        <h3 class="banner-title font-weight-bolder ls-25 lh-1 slide-animate"
                            data-animation-options="{
                        'name': 'fadeInRightShorter',
                        'duration': '1s',
                        'delay': '.4s'
                    }">
                    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi et consectetur excepturi esse, incidunt provident numquam, deleniti, ad modi doloremque dolores atque quaerat.  odio architecto? --}}
                    Voluptatem impedit
                        </h3>
                        {{-- <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                        'name': 'fadeInRightShorter',
                        'duration': '1s',
                        'delay': '.6s'
                    }">
                            Sale up to <span class="font-weight-bolder text-secondary">30% OFF</span>
                        </p> --}}

                        <a href="shop-list.html"
                            class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                            data-animation-options="{
                        'name': 'fadeInRightShorter',
                        'duration': '1s',
                        'delay': '.8s'
                    }">Commander<i class="w-icon-long-arrow-right"></i></a>

                    </div>
                    <!-- End of .banner-content -->
                </div>
                <!-- End of .container -->
            </div>
            <!-- End of .intro-slide1 -->

            <div class="swiper-slide banner banner-fixed intro-slide intro-slide2"
                style="background-image: url(assets/images/demos/demo1/sliders/slide-2.jpg); background-color: #ebeef2;">
                <div class="container">
                    <figure class="slide-image skrollable slide-animate" data-animation-options="{
                        'name': 'fadeInUpShorter',
                        'duration': '1s'
                    }">
                        <img src="{{asset('assets/images/slides-bg/2.png')}}" alt="Banner"
                            data-bottom-top="transform: translateX(10vh);"
                            data-top-bottom="transform: translateX(-10vh);" width="480" height="633">
                    </figure>
                    <div class="banner-content d-inline-block y-50">
                        <h5 class="banner-subtitle font-weight-normal text-default ls-50 slide-animate"
                            data-animation-options="{
                            'name': 'fadeInUpShorter',
                            'duration': '1s',
                            'delay': '.2s'
                        }">
                        Lorem ipsum<span class="text-secondary">officiis</span>
                        </h5>
                        <h3 class="banner-title font-weight-bolder text-dark mb-0 ls-25 slide-animate"
                            data-animation-options="{
                            'name': 'fadeInUpShorter',
                            'duration': '1s',
                            'delay': '.4s'
                        }">
                            Hot & Packback
                        </h3>
                        <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                            'name': 'fadeInUpShorter',
                            'duration': '1s',
                            'delay': '.8s'
                        }">
                        Voluptatem impedit
                        </p>
                        <a href="shop-banner-sidebar.html"
                            class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                            data-animation-options="{
                            'name': 'fadeInUpShorter',
                            'duration': '1s',
                            'delay': '1s'
                        }">
                            COMMANDER<i class="w-icon-long-arrow-right"></i>
                        </a>
                    </div>
                    <!-- End of .banner-content -->
                </div>
                <!-- End of .container -->
            </div>
            <!-- End of .intro-slide2 -->

            <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                style="background-image: url(assets/images/demos/demo1/sliders/slide-3.jpg); background-color: #f0f1f2;">
                <div class="container">
                    <figure class="slide-image skrollable slide-animate" data-animation-options="{
                        'name': 'fadeInDownShorter',
                        'duration': '1s'
                    }">
                        <img src="{{asset('assets/images/slides-bg/3.png')}}" alt="Banner"
                            data-bottom-top="transform: translateY(10vh);"
                            data-top-bottom="transform: translateY(-10vh);" width="310" height="444">
                    </figure>
                    <div class="banner-content text-right y-50">
                        <p class="font-weight-normal text-default text-uppercase mb-0 slide-animate"
                            data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'duration': '1s',
                            'delay': '.6s'
                        }">
                        Lorem ipsum
                        </p>
                        <h5 class="banner-subtitle font-weight-normal text-default ls-25 slide-animate"
                            data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'duration': '1s',
                            'delay': '.4s'
                        }">
                        Voluptatem impedit
                        </h5>
                        <h3 class="banner-title p-relative font-weight-bolder ls-50 slide-animate"
                            data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'duration': '1s',
                            'delay': '.2s'
                        }"><span class="text-white mr-4">ipsum</span>skate
                        </h3>
                        <div class="btn-group slide-animate" data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'duration': '1s',
                            'delay': '.8s'
                        }">
                            <a href="#"
                                class="btn btn-dark btn-outline btn-rounded btn-icon-right">Commander<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End of .banner-content -->
                    </div>
                    <!-- End of .container -->
                </div>
            </div>
            <!-- End of .intro-slide3 -->


            <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                style="background-image: url(assets/images/demos/demo1/sliders/slide-1.jpg); background-color: #f0f1f2;">
                <div class="container">
                    <figure class="slide-image skrollable slide-animate" data-animation-options="{
                        'name': 'fadeInDownShorter',
                        'duration': '1s'
                    }">
                        <img src="{{asset('assets/images/slides-bg/4.png')}}" alt="Banner"
                            data-bottom-top="transform: translateY(10vh);"
                            data-top-bottom="transform: translateY(-10vh);" width="310" height="444">
                    </figure>
                    <div class="banner-content text-right y-50">
                        <p class="font-weight-normal text-default text-uppercase mb-0 slide-animate"
                            data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'duration': '1s',
                            'delay': '.6s'
                        }">
                            Texte slide 4
                        </p>
                        <h5 class="banner-subtitle font-weight-normal text-default ls-25 slide-animate"
                            data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'duration': '1s',
                            'delay': '.4s'
                        }">
                        Voluptatem impedit
                        </h5>
                        <h3 class="banner-title p-relative font-weight-bolder ls-50 slide-animate"
                            data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'duration': '1s',
                            'delay': '.2s'
                        }"><span class="text-white mr-4">Lorem</span>-ipsum
                        </h3>
                        <div class="btn-group slide-animate" data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'duration': '1s',
                            'delay': '.8s'
                        }">
                            <a href="#"
                                class="btn btn-dark btn-outline btn-rounded btn-icon-right">Commander<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End of .banner-content -->
                    </div>
                    <!-- End of .container -->
                </div>
            </div>
        </div>

        

        <div class="custom-dots swiper-img-dots appear-animate">
            <a href="#" class="active">
                <img src="{{asset('assets/images/slides-bg/1.png')}}" alt="Dot" width="70" height="70" />
            </a>
            <a href="#">
                <img src="{{asset('assets/images/slides-bg/2.png')}}" alt="Dot" width="70" height="70" />
            </a>
            <a href="#">
                <img src="{{asset('assets/images/slides-bg/3.png')}}" alt="Dot" width="70" height="70" />
            </a>
            <a href="#">
                <img src="{{asset('assets/images/slides-bg/4.png')}}" alt="Dot" width="70" height="70" />
            </a>
            
        </div>

        <!-- <div class="swiper-pagination"></div>
        <button class="swiper-button-next"></button>
        <button class="swiper-button-prev"></button> -->
    </div>
    <!-- End of .swiper-container -->
</section>
<!-- End of .intro-section -->

<div class="container">
    

    <div class="row category-banner-wrapper appear-animate pt-6 pb-8">
        <div class="col-md-6 mb-4">
            <div class="banner banner-fixed br-xs">
                <figure>
                    <img src="{{asset('assets/images/slides-bg/5.jpg')}}" alt="Category Banner"
                        width="610" height="160" style="background-color: #ecedec;" />
                </figure>
                <div class="banner-content y-50 mt-0 text-white">
                    <h5 class="banner-subtitle font-weight-normal text-white">Get up to <span
                            class="text-secondary font-weight-bolder text-uppercase ls-25">20% Off</span>
                    </h5>
                    <h3 class="banner-title text-uppercase">Sports Outfits<br><span
                            class="font-weight-normal                       text-capitalize">Collection</span>
                    </h3>
                    <div class="banner-price-info font-weight-normal">Starting at <span
                            class="text-secondary                       font-weight-bolder">$170.00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="banner banner-fixed br-xs">
                <figure>
                    <img src="{{asset('assets/images/slides-bg/5.jpg')}}" alt="Category Banner"
                        width="610" height="160" style="background-color: #636363;" />
                </figure>
                <div class="banner-content y-50 mt-0">
                    <h5 class="banner-subtitle font-weight-normal text-capitalize">New Arrivals</h5>
                    <h3 class="banner-title text-white text-uppercase">Accessories<br><span
                            class="font-weight-normal text-capitalize">Collection</span></h3>
                    <div class="banner-price-info text-white font-weight-normal text-capitalize">Only From
                        <span class="text-secondary font-weight-bolder">$90.00</span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Category Banner Wrapper -->

    <div class="row deals-wrapper appear-animate mb-8">
        <div class="col-lg-9 mb-4">
            <div class="single-product h-100 br-sm">
                <h4 class="title-sm title-underline font-weight-bolder ls-normal">
                    Deals Hot of The Day
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
                                                            <img src="assets/images/demos/demo1/products/1-1-600x675.jpg"
                                                                data-zoom-image="assets/images/demos/demo1/products/1-1-800x900.jpg"
                                                                alt="Product Image" width="800"
                                                                height="900">
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <figure class="product-image">
                                                            <img src="assets/images/demos/demo1/products/1-2-600x675.jpg"
                                                                data-zoom-image="assets/images/demos/demo1/products/1-2-800x900.jpg"
                                                                alt="Product Image" width="800"
                                                                height="900">
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <figure class="product-image">
                                                            <img src="assets/images/demos/demo1/products/1-3-600x675.jpg"
                                                                data-zoom-image="assets/images/demos/demo1/products/1-3-800x900.jpg"
                                                                alt="Product Image" width="800"
                                                                height="900">
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <figure class="product-image">
                                                            <img src="assets/images/demos/demo1/products/1-4-600x675.jpg"
                                                                data-zoom-image="assets/images/demos/demo1/products/1-4-800x900.jpg"
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
                                                        <img src="assets/images/demos/demo1/products/1-1-600x675.jpg"
                                                            alt="Product thumb" width="60" height="68" />
                                                    </div>
                                                    <div class="product-thumb swiper-slide">
                                                        <img src="assets/images/demos/demo1/products/1-2-600x675.jpg"
                                                            alt="Product thumb" width="60" height="68" />
                                                    </div>
                                                    <div class="product-thumb swiper-slide">
                                                        <img src="assets/images/demos/demo1/products/1-3-600x675.jpg"
                                                            alt="Product thumb" width="60" height="68" />
                                                    </div>
                                                    <div class="product-thumb swiper-slide">
                                                        <img src="assets/images/demos/demo1/products/1-4-600x675.jpg"
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
                                                    data-until="2022, 12, 31" data-compact="true">
                                                    629 days, 11: 59: 52</div>
                                            </div>

                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
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
                                                        <a href="#"
                                                            class="social-icon social-facebook w-icon-facebook"></a>
                                                        <a href="#"
                                                            class="social-icon social-twitter w-icon-twitter"></a>
                                                        <a href="#"
                                                            class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                        <a href="#"
                                                            class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                        <a href="#"
                                                            class="social-icon social-youtube fab fa-linkedin-in"></a>
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
                                                            <img src="assets/images/demos/demo1/products/2-1-600x675.jpg"
                                                                data-zoom-image="assets/images/demos/demo1/products/2-1-800x900.jpg"
                                                                alt="Product Image" width="800"
                                                                height="900">
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <figure class="product-image">
                                                            <img src="assets/images/demos/demo1/products/2-2-600x675.jpg"
                                                                data-zoom-image="assets/images/demos/demo1/products/2-2-800x900.jpg"
                                                                alt="Product Image" width="800"
                                                                height="900">
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <figure class="product-image">
                                                            <img src="assets/images/demos/demo1/products/2-3-600x675.jpg"
                                                                data-zoom-image="assets/images/demos/demo1/products/2-3-800x900.jpg"
                                                                alt="Product Image" width="800"
                                                                height="900">
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <figure class="product-image">
                                                            <img src="assets/images/demos/demo1/products/2-4-600x675.jpg"
                                                                data-zoom-image="assets/images/demos/demo1/products/2-4-800x900.jpg"
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
                                                        <img src="assets/images/demos/demo1/products/2-1-600x675.jpg"
                                                            alt="Product thumb" width="60" height="68" />
                                                    </div>
                                                    <div class="product-thumb swiper-slide">
                                                        <img src="assets/images/demos/demo1/products/2-2-600x675.jpg"
                                                            alt="Product thumb" width="60" height="68" />
                                                    </div>
                                                    <div class="product-thumb swiper-slide">
                                                        <img src="assets/images/demos/demo1/products/2-3-600x675.jpg"
                                                            alt="Product thumb" width="60" height="68" />
                                                    </div>
                                                    <div class="product-thumb swiper-slide">
                                                        <img src="assets/images/demos/demo1/products/2-4-600x675.jpg"
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
                                                    data-until="2022, 12, 31" data-compact="true">
                                                    629 days, 11: 59: 52</div>
                                            </div>

                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
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
                                                        <a href="#"
                                                            class="social-icon social-facebook w-icon-facebook"></a>
                                                        <a href="#"
                                                            class="social-icon social-twitter w-icon-twitter"></a>
                                                        <a href="#"
                                                            class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                        <a href="#"
                                                            class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                        <a href="#"
                                                            class="social-icon social-youtube fab fa-linkedin-in"></a>
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
                                                <img src="assets/images/demos/demo1/products/2-1.jpg"
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
                                                <img src="assets/images/demos/demo1/products/2-2.jpg"
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
                                                <img src="assets/images/demos/demo1/products/2-3.jpg"
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
                                                <img src="assets/images/demos/demo1/products/2-4.jpg"
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
                                                <img src="assets/images/demos/demo1/products/2-5.jpg"
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
                                                <img src="assets/images/demos/demo1/products/2-6.jpg"
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
                                                <img src="assets/images/demos/demo1/products/2-7.jpg"
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
                                                <img src="assets/images/demos/demo1/products/2-8.jpg"
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
                                                <img src="assets/images/demos/demo1/products/2-9.jpg"
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
    <!-- End of Deals Wrapper -->
</div>

{{-- <div class="container">

    <h2 class="title title-underline mb-4 appear-animate">Top Weekly Vendors</h2>
    <div class="swiper-container swiper-theme mb-10 pb-2 appear-animate" data-swiper-options="{
        'spaceBetween': 20,
        'slidesPerView': 1,
        'breakpoints': {
            '576': {
                'slidesPerView': 2
            },
            '768': {
                'slidesPerView': 3
            },
            '1200': {
                'slidesPerView': 4
            }
        }
    }">
        <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
            <div class="swiper-slide vendor-widget mb-0">
                <div class="vendor-widget-2">
                    <div class="vendor-details">
                        <figure class="vendor-logo">
                            <a href="vendor-dokan-store.html">
                                <img src="assets/images/demos/demo1/vendor-logo/1.jpg" alt="Vendor Logo"
                                    width="70" height="70" />
                            </a>
                        </figure>
                        <div class="vendor-personal">
                            <h4 class="vendor-name">
                                <a href="vendor-dokan-store.html">Vendor 1</a>
                            </h4>
                            <span class="vendor-product-count">(27 Products)</span>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vendor-products row cols-3 gutter-sm">
                        <div class="vendor-product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo1/product/4-1.jpg"
                                        alt="Vendor Product" width="100" height="113" />
                                </a>
                            </figure>
                        </div>
                        <div class="vendor-product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo1/product/4-2.jpg"
                                        alt="Vendor Product" width="100" height="113" />
                                </a>
                            </figure>
                        </div>
                        <div class="vendor-product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo1/product/4-3.jpg"
                                        alt="Vendor Product" width="100" height="113" />
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Vendor widget 2 -->
            <div class="swiper-slide vendor-widget mb-0">
                <div class="vendor-widget-2">
                    <div class="vendor-details">
                        <figure class="vendor-logo">
                            <a href="vendor-dokan-store.html">
                                <img src="assets/images/demos/demo1/vendor-logo/2.jpg" alt="Vendor Logo"
                                    width="70" height="70" />
                            </a>
                        </figure>
                        <div class="vendor-personal">
                            <h4 class="vendor-name">
                                <a href="vendor-dokan-store.html">Vendor 2</a>
                            </h4>
                            <span class="vendor-product-count">(20 Products)</span>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vendor-products row cols-3 gutter-sm">
                        <div class="vendor-product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo1/product/4-4.jpg"
                                        alt="Vendor Product" width="100" height="113" />
                                </a>
                            </figure>
                        </div>
                        <div class="vendor-product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo1/product/4-5.jpg"
                                        alt="Vendor Product" width="100" height="113" />
                                </a>
                            </figure>
                        </div>
                        <div class="vendor-product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo1/product/4-6.jpg"
                                        alt="Vendor Product" width="100" height="113" />
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Vendor widget 2 -->
            <div class="swiper-slide vendor-widget mb-0">
                <div class="vendor-widget-2">
                    <div class="vendor-details">
                        <figure class="vendor-logo">
                            <a href="vendor-dokan-store.html">
                                <img src="assets/images/demos/demo1/vendor-logo/3.jpg" alt="Vendor Logo"
                                    width="70" height="70" />
                            </a>
                        </figure>
                        <div class="vendor-personal">
                            <h4 class="vendor-name">
                                <a href="vendor-dokan-store.html">Vendor 3</a>
                            </h4>
                            <span class="vendor-product-count">(30 Products)</span>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vendor-products row cols-3 gutter-sm">
                        <div class="vendor-product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo1/product/4-7.jpg"
                                        alt="Vendor Product" width="100" height="113" />
                                </a>
                            </figure>
                        </div>
                        <div class="vendor-product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo1/product/4-8.jpg"
                                        alt="Vendor Product" width="100" height="113" />
                                </a>
                            </figure>
                        </div>
                        <div class="vendor-product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo1/product/4-9.jpg"
                                        alt="Vendor Product" width="100" height="113" />
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Vendor widget 2 -->
            <div class="swiper-slide vendor-widget mb-0">
                <div class="vendor-widget-2">
                    <div class="vendor-details">
                        <figure class="vendor-logo">
                            <a href="vendor-dokan-store.html">
                                <img src="assets/images/demos/demo1/vendor-logo/4.jpg" alt="Vendor Logo"
                                    width="70" height="70" />
                            </a>
                        </figure>
                        <div class="vendor-personal">
                            <h4 class="vendor-name">
                                <a href="vendor-dokan-store.html">Vendor 4</a>
                            </h4>
                            <span class="vendor-product-count">(17 Products)</span>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vendor-products row cols-3 gutter-sm">
                        <div class="vendor-product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo1/product/4-10.jpg"
                                        alt="Vendor Product" width="100" height="113" />
                                </a>
                            </figure>
                        </div>
                        <div class="vendor-product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo1/product/4-11.jpg"
                                        alt="Vendor Product" width="100" height="113" />
                                </a>
                            </figure>
                        </div>
                        <div class="vendor-product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo1/product/4-12.jpg"
                                        alt="Vendor Product" width="100" height="113" />
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Vendor widget 2 -->
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- End of Swiper Container -->

    
   
    
</div> --}}



<div class="container">
    <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate">Départements populaires
    </h2>
    <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
        <ul class="nav nav-tabs justify-content-center" role="tablist">
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">Nouveautés</a>
            </li>
            {{-- <li class="nav-item mr-2 mb-2">
                <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Meilleur vendeur</a>
            </li> --}}
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-3">Le plus populaire</a>
            </li>
            <li class="nav-item mr-0 mb-2">
                <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-4">En vedette</a>
            </li>
        </ul>
    </div>
    <!-- End of Tab -->
    <div class="tab-content product-wrapper appear-animate">
        <div class="tab-pane active pt-4" id="tab1-1">
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-1-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-1-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Classic Hat</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(1 Reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$53.00</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Women’s White
                                    Handbag</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$26.62</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-3.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-discount">7% Off</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Multi Funtional Apple
                                    iPhone</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(5 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">136.26</ins>
                                <del class="old-price">$145.90</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-4-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-4-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Fashion Blue Towel</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(8 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$26.55 - $29.99</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-5.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-discount">4% Off</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Apple Super Notecom</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(4 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$243.30</ins>
                                <del class="old-price">$253.50</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-6-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-6-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Women’s Comforter</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(10 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$32.00 - $33.26</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-7.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Multi-colorful Music</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$260.59 - $297.83</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-8-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-8-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Comfortable Backpack</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(6 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$45.90</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-9.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Data Transformer Tool
                                </a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <span class="price">$64.47</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-10.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Women’s hairdye</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <span class="price">$173.84</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Tab Pane -->
        {{-- <div class="tab-pane pt-4" id="tab1-2">
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-4-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-4-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Fashion Blue Towel</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(8 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$26.55 - $29.99</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-3.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-discount">7% Off</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Multi Funtional Apple
                                    iPhone</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(5 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">136.26</ins>
                                <del class="old-price">$145.90</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-8-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-8-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Comfortable Backpack</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(6 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$45.90</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-9.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Data Transformer Tool
                                </a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <span class="price">$64.47</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-5.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-discount">4% Off</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Apple Super Notecom</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(4 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$243.30</ins>
                                <del class="old-price">$253.50</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-6-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-6-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Women’s Comforter</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(10 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$32.00 - $33.26</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-7.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Multi-colorful Music</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$260.59 - $297.83</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-1-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-1-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Classic Hat</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(1 Reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$53.00</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Women’s White
                                    Handbag</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$26.62</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-10.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Women’s hairdye</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <span class="price">$173.84</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End of Tab Pane -->
        <div class="tab-pane pt-4" id="tab1-3">
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-9.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Data Transformer Tool
                                </a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <span class="price">$64.47</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-1-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-1-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Classic Hat</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(1 Reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$53.00</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-3.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-discount">7% Off</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Multi Funtional Apple
                                    iPhone</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(5 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">136.26</ins>
                                <del class="old-price">$145.90</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Women’s White
                                    Handbag</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$26.62</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-10.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Women’s hairdye</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <span class="price">$173.84</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-8-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-8-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Comfortable Backpack</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(6 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$45.90</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-5.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-discount">4% Off</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Apple Super Notecom</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(4 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$243.30</ins>
                                <del class="old-price">$253.50</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-7.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Multi-colorful Music</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$260.59 - $297.83</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-6-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-6-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Women’s Comforter</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(10 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$32.00 - $33.26</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-4-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-4-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Fashion Blue Towel</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(8 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$26.55 - $29.99</ins>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Tab Pane -->
        <div class="tab-pane pt-4" id="tab1-4">
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-4-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-4-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Fashion Blue Towel</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(8 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$26.55 - $29.99</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-10.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Women’s hairdye</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <span class="price">$173.84</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-9.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Data Transformer Tool
                                </a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <span class="price">$64.47</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-8-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-8-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Comfortable Backpack</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(6 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$45.90</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Women’s White
                                    Handbag</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$26.62</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-5.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-discount">4% Off</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Apple Super Notecom</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(4 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$243.30</ins>
                                <del class="old-price">$253.50</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-3.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-discount">7% Off</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Multi Funtional Apple
                                    iPhone</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(5 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">136.26</ins>
                                <del class="old-price">$145.90</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-7.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Multi-colorful Music</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$260.59 - $297.83</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-6-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-6-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Women’s Comforter</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(10 reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$32.00 - $33.26</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/demos/demo1/products/3-1-1.jpg" alt="Product"
                                    width="300" height="338" />
                                <img src="assets/images/demos/demo1/products/3-1-2.jpg" alt="Product"
                                    width="300" height="338" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                    title="Ajouter au Panier"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                    title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Classic Hat</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(1 Reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">$53.00</ins>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Tab Pane -->
    </div>
    <!-- End of Tab Content -->

    <div class="row category-cosmetic-lifestyle appear-animate mb-5">
        <div class="col-md-6 mb-4">
            <div class="banner banner-fixed category-banner-1 br-xs">
                <figure>
                    <img src="assets/images/demos/demo1/categories/3-1.jpg" alt="Category Banner"
                        width="610" height="200" style="background-color: #3B4B48;" />
                </figure>
                <div class="banner-content y-50 pt-1">
                    <h5 class="banner-subtitle font-weight-bold text-uppercase">Natural Process</h5>
                    <h3 class="banner-title font-weight-bolder text-capitalize text-white">Cosmetic
                        Makeup<br>Professional</h3>
                    <a href="shop-banner-sidebar.html"
                        class="btn btn-white btn-link btn-underline btn-icon-right">Shop Now<i
                            class="w-icon-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="banner banner-fixed category-banner-2 br-xs">
                <figure>
                    <img src="assets/images/demos/demo1/categories/3-2.jpg" alt="Category Banner"
                        width="610" height="200" style="background-color: #E5E5E5;" />
                </figure>
                <div class="banner-content y-50 pt-1">
                    <h5 class="banner-subtitle font-weight-bold text-uppercase">Trending Now</h5>
                    <h3 class="banner-title font-weight-bolder text-capitalize">Women's
                        Lifestyle<br>Collection</h3>
                    <a href="shop-banner-sidebar.html"
                        class="btn btn-dark btn-link btn-underline btn-icon-right">Shop Now<i
                            class="w-icon-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Category Cosmetic Lifestyle -->

    <div class="product-wrapper-1 appear-animate mb-5">
        <div class="title-link-wrapper pb-1 mb-4">
            <h2 class="title ls-normal mb-0">Ordinateurs</h2>
            <a href="shop-boxed-banner.html" class="font-size-normal font-weight-bold ls-25 mb-0">Plus de produits<i class="w-icon-long-arrow-right"></i></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-4 mb-4">
                <div class="banner h-100 br-sm" style="background-image: url({{asset('assets/images/sections-bg/ordinateurs.jpg')}}); 
                    background-color: #ebeced;">
                    <div class="banner-content content-top">
                        <hr class="banner-divider bg-dark mb-2">
                        <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                            Collection <br><span
                                class="font-weight-normal text-capitalize">Ordinateurs</span>
                        </h3>
                        <a href="shop-banner-sidebar.html"
                            class="btn btn-dark btn-outline btn-rounded btn-sm">Commander</a>
                    </div>
                </div>
            </div>
            <!-- End of Banner -->
            <div class="col-lg-9 col-sm-8">
                <div class="swiper-container swiper-theme" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
                {{-- @foreach ($article_ordinateurs as $article_ordinateur)
                    <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                        
                        <div class="swiper-slide product-col">
                            <div class="product-wrap product text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo1/products/4-1.jpg" alt="Product"
                                            width="216" height="243" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Ajouter au Panier"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="#">{{$article_ordinateur->articles->first()->name}}</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(3
                                            reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$23.99</ins><del
                                            class="old-price">$25.68</del>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        
                        
                       
                    </div>
                    @endforeach --}}

                    @foreach ($article_ordinateurs as $article_ordinateur)
                        <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                            @foreach ($article_ordinateur->articles as $article)
                                <div class="swiper-slide product-col">
                                    <div class="product-wrap product text-center">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('storage/' . $article->couverture) }}" alt="Product" width="216" height="243" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Ajouter au Panier"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quickview"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Add to Compare"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="#">{{ $article->name }}</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">{{ $article->price }}</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- Assuming you have a list of articles in your database -->


        </div>
    </div>
    <!-- End of Product Wrapper 1 -->

    <div class="product-wrapper-1 appear-animate mb-8">
        <div class="title-link-wrapper pb-1 mb-4">
            <h2 class="title ls-normal mb-0">Fourniture de bureau</h2>
            <a href="shop-boxed-banner.html" class="font-size-normal font-weight-bold ls-25 mb-0">Plus de produits<i class="w-icon-long-arrow-right"></i></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-4 mb-4">
                <div class="banner h-100 br-sm" style="background-image: url(assets/images/demos/demo1/banners/3.jpg); 
                background-color: #252525;">
                    <div class="banner-content content-top">
                        <h5 class="banner-subtitle text-white font-weight-normal mb-2">New Collection</h5>
                        <hr class="banner-divider bg-white mb-2">
                        <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">
                            Top Camera <br> <span
                                class="font-weight-normal text-capitalize">Mirrorless</span>
                        </h3>
                        <a href="shop-banner-sidebar.html"
                            class="btn btn-white btn-outline btn-rounded btn-sm">shop now</a>
                    </div>
                </div>
            </div>
            <!-- End of Banner -->
            <div class="col-lg-9 col-sm-8">
                <div class="swiper-container swiper-theme" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                        @foreach ($article_fournitures as $article_fournitures)
                        <div class="swiper-slide product-col">
                            <div class="product-wrap product text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo1/products/5-1-1.jpg"
                                            alt="Product" width="216" height="243" />
                                        <img src="assets/images/demos/demo1/products/5-1-2.jpg"
                                            alt="Product" width="216" height="243" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Ajouter au Panier"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-discount">6% Off</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="#">Professional
                                            Pixel
                                            Camera</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(5
                                            reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$215.68</ins><del
                                            class="old-price">$230.45</del>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo1/products/5-5.jpg" alt="Product"
                                            width="216" height="243" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Ajouter au Panier"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="#">Latest
                                            Speaker</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(3
                                            reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$250.68</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Produts -->
            </div>
        </div>
    </div>
    <!-- End of Product Wrapper 1 -->

    <div class="banner banner-fashion appear-animate br-sm mb-9" style="background-image: url(assets/images/demos/demo1/banners/4.jpg);
        background-color: #383839;">
        <div class="banner-content align-items-center">
            <div class="content-left d-flex align-items-center mb-3">
                <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">
                    25
                    <sup class="font-weight-bold">%</sup><sub class="font-weight-bold ls-25">Off</sub>
                </div>
                <hr class="banner-divider bg-white mt-0 mb-0 mr-8">
            </div>
            <div class="content-right d-flex align-items-center flex-1 flex-wrap">
                <div class="banner-info mb-0 mr-auto pr-4 mb-3">
                    <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">For Today's
                        Fashion</h3>
                    <p class="text-white mb-0">Use code
                        <span
                            class="text-dark bg-white font-weight-bold ls-50 pl-1 pr-1 d-inline-block">Black
                            <strong>12345</strong></span> to get best offer.</p>
                </div>
                <a href="shop-banner-sidebar.html"
                    class="btn btn-white btn-outline btn-rounded btn-icon-right mb-3">Shop Now<i
                        class="w-icon-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <!-- End of Banner Fashion -->

    <div class="product-wrapper-1 appear-animate mb-7">
        <div class="title-link-wrapper pb-1 mb-4">
            <h2 class="title ls-normal mb-0">Smartphone</h2>
            <a href="shop-boxed-banner.html" class="font-size-normal font-weight-bold ls-25 mb-0">Plus de produits<i class="w-icon-long-arrow-right"></i></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-4 mb-4">
                <div class="banner h-100 br-sm" style="background-image: url(assets/images/demos/demo1/banners/5.jpg); 
                background-color: #EAEFF3;">
                    <div class="banner-content content-top">
                        <h5 class="banner-subtitle font-weight-normal mb-2">Deals And Promotions</h5>
                        <hr class="banner-divider bg-dark mb-2">
                        <h3 class="banner-title font-weight-bolder text-uppercase ls-25">
                            Trending <br> <span class="font-weight-normal text-capitalize">House
                                Utensil</span>
                        </h3>
                        <a href="shop-banner-sidebar.html"
                            class="btn btn-dark btn-outline btn-rounded btn-sm">shop now</a>
                    </div>
                </div>
            </div>
            <!-- End of Banner -->
            <div class="col-lg-9 col-sm-8">
                <div class="swiper-container swiper-theme" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                        @foreach ($article_smartphones as $article_smartphones)
                            <div class="swiper-slide product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="assets/images/demos/demo1/products/6-1.jpg" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Ajouter au Panier"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="#">Home Sofa</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#" class="rating-reviews">(5
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$75.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="assets/images/demos/demo1/products/6-5.jpg" alt="Product"
                                                width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Ajouter au Panier"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="#">Electric
                                                Rice-Cooker</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$215.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Produts -->
            </div>
        </div>
    </div>
    <!-- End of Product Wrapper 1 -->

    <h2 class="title title-underline mb-4 ls-normal appear-animate">Nos Fournisseurs</h2>
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
<!--End of Catainer -->
@endsection