<!DOCTYPE html>

<html lang="fr">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Wuras - Vente d'ordinateurs et matériel informatique en Côte d'Ivoire</title>
    <meta name="keywords" content="ordinateurs, matériel informatique, accessoires, composants PC, Côte d'Ivoire, Wuras">
    <meta name="description" content="Achetez des ordinateurs, accessoires et matériel informatique de qualité chez Wuras, votre boutique en ligne spécialisée en Côte d'Ivoire.">
    <meta name="author" content="Wuras">

     <!-- Open Graph -->
     <meta property="og:title" content="Wuras - Vente d'ordinateurs et matériel informatique">
     <meta property="og:description" content="Découvrez notre gamme d'ordinateurs et de matériel informatique. Livraison en Côte d'Ivoire.">
     <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
     <meta property="og:url" content="https://wuras.ci">
     <meta property="og:type" content="website">
 
     <!-- Twitter Cards -->
     <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Wuras - Vente d'ordinateurs et matériel informatique">
     <meta name="twitter:description" content="Achetez des ordinateurs, accessoires et matériel informatique de qualité en Côte d'Ivoire.">
     <meta name="twitter:image" content="{{ asset('assets/images/logo-wuras.png') }}">
 

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.png')}}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = '{{asset('assets/js/webfont.js')}}';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="preload" href="{{asset('assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2')}}"
        crossorigin="anonymous">
    <link rel="preload" href="{{asset('assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2')}}"
        crossorigin="anonymous">
    <link rel="preload" href="{{asset('assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2')}}"
        crossorigin="anonymous">
    <link rel="preload" href="{{asset('assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous')}}">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}">

    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="asset('assets/vendor/swiper/swiper-bundle.min.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/magnific-popup/magnific-popup.min.css')}}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/photoswipe/photoswipe.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/photoswipe/default-skin/default-skin.min.css')}}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/demo9.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/demo1.min.css')}}">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    @stack('styles')

<style>
    .custom-dots {
    position: relative;
    text-align: center;
    margin-top: -3.3rem;
    z-index: 1;
}
/* .grid .banner, .grid .category, .grid .category > a, .grid figure, .grid .banner img, .grid .category img {
    height: 100%;
} */

</style>
    
</head>

<body class="home">
    <div class="page-wrapper">

        <div id="preloader" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.8); z-index: 9999; text-align: center;">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <p>Chargement...</p>
            </div>
        </div>

        
        <h1 class="d-none">Wuras - </h1>
        <!-- Start of Header -->

        @include('frontend.layouts.header')
      
        <!-- End of Header -->

        <!-- Start of Main-->
        <main class="main">
            @yield('content')
           
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        @include(('frontend.layouts.footer'))
        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper-->

    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="/l" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Accueil</p>
        </a>
        <a href="/magasin" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Magasin</p>
        </a>
        <a href="#" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Mon Compte</p>
        </a>
        <a href="/panier" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Mon Panier</p>
        </a>
       

        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Rechercher</p>
            </a>
            <form method="get" action="{{ route('shop') }}" class="input-wrapper header-search hs-expanded hs-round d-none d-md-flex">
                
                <input type="text" class="form-control" name="search" id="search" placeholder="Tapez ici..." value="{{ request('search') }}" />
                {{-- <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Rechercher" --}}
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
            version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->

        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->

        <div class="mobile-menu-container scrollable">
            <form action="#" method="get" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Rechercher"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/magasin">Magasin</a></li>
                        
                       
                        
                        <li>
                            <a href="#">Pages</a>
                            <ul>

                                <li><a href="#">À propos de nous</a></li>
                                <li><a href="#">Contactez-nous</a></li>
                                <li><a href="#">FAQs</a></li>
                               
                            </ul>
                        </li>
                        <li><a href="{{route('admin.articles.create')}}">Dashboard | Ajouter des Articles</a></li>

                        @auth
                            <!-- Si l'utilisateur est connecté -->
                            <li class=""><a href="/home">Mon compte</a></li>
                        @endauth
                    
                        @guest
                            <!-- Si l'utilisateur n'est pas connecté -->
                            <li class=""><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Connexion / Inscription</a></li>
                        @endguest
                    </ul>
                </div>
                <div class="tab-pane" id="categories">
                    <ul class="mobile-menu">
                        @foreach ($categories as $categorie)
                                <li>
                                    <a href="{{ route('shop', ['category' => $categorie->name ?? null]) }}">
                                        <i class="w-icon-tshirt2"></i>{{$categorie->name}}
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
                                                        <li><a href="{{ route('shop', ['category' => $article->categories->first()->id ?? null]) }}">{{ $article->name }}</a></li>
                                                    @empty
                                                        <li>Rien à afficher</li>
                                                    @endforelse
                                                </ul>
                                            </li>
                                        @endforeach
                                    
                                        
                                    </ul>
                                </li>
                                
                            @endforeach
                        {{-- <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-tshirt2"></i>Fashion
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Women</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                Watches</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Men</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                Watches</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->

    <!-- Start of Newsletter popup -->
    
    
    <!-- End of Newsletter popup -->

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <!-- Plugin JS File -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.plugin/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/zoom/jquery.zoom.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.countdown/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/vendor/skrollr/skrollr.min.js')}}"></script>
    
    <script src="{{asset('assets/vendor/photoswipe/photoswipe.js')}}"></script>
    <script src="{{asset('assets/vendor/photoswipe/photoswipe-ui-default.js')}}"></script>

    <!-- Swiper JS -->
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script> --}}

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    @stack('scripts') <!-- Ici seront ajoutés les scripts des vues enfants -->

    <script>
        @if (session('success'))
            Swal.fire({
                toast: true,
                icon: 'success',
                title: "{{ session('success') }}",
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        @endif
    </script>

<script>
    document.getElementById('updateCartButton').addEventListener('click', function () {
        // Afficher le préchargeur
        document.getElementById('preloader').style.display = 'block';
    });

    document.getElementById('clearCartButton').addEventListener('click', function () {
        // Afficher le préchargeur
        document.getElementById('preloader').style.display = 'block';
    });
</script>


    
</body>


</html>