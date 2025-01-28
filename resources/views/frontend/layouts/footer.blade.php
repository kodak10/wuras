<footer class="footer appear-animate" data-animation-options="{
    'name': 'fadeIn'
}">
    <div class="footer-newsletter bg-primary">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="icon-box icon-box-side text-white">
                        <div class="icon-box-icon d-inline-flex">
                            <i class="w-icon-envelop3"></i>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title text-white text-uppercase font-weight-bold">Abonnez-vous à notre newsletter</h4>
                            <p class="text-white">Obtenez toutes les dernières informations sur les événements, les ventes et les offres.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                    <form action="{{ route('newsletter.subscribe') }}" method="POST" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                        @csrf
                        <input type="email" class="form-control mr-2 bg-white" name="email" id="email" placeholder="Votre adresse e-mail" required />
                        <button class="btn btn-dark btn-rounded" type="submit">S'abonner<i class="w-icon-long-arrow-right"></i></button>
                    </form>
                
                    @if(session('success'))
                        <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget-about">
                        <a href="/" class="logo-footer">
                            <img src="{{asset('assets/images/logo.webp')}}" alt="logo-footer"style="
                            width: 60vh;" />
                        </a>
                        <a href="tel:18005707777" class="widget-about-call"><i class="w-icon-phone mr-1"></i> +225 0749667007</a>

                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h3 class="widget-title">A Savoir</h3>
                        <ul class="widget-body">
                            {{-- <li><a href="#">À propos de nous</a></li> --}}
                            <li><a href="#">Termes et conditions</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                            <li><a href="#">Faqs</a></li>
                           
                            <li>
                                <span>Reseau Sociaux</span> <br>
                                <div class="social-icons social-icons-colored">
                                    <a href="https://www.facebook.com/p/WURAS-Services-100091904923429/?locale=tl_PH" class="social-icon social-facebook w-icon-facebook"></a>
                                    <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Mon Compte</h4>
                        <ul class="widget-body">
                            <li><a href="/panier">Mon Panier</a></li>

                            @auth
                                <li>
                                    @if (Auth::user()->role == 'admin')
                                        <a href="{{ route('admin.') }}">Tableau de Bord</a>
                                    @elseif (Auth::user()->role == 'manager')
                                        <a href="{{ route('admin.') }}">Tableau de Bord </a>
                                    @elseif (Auth::user()->role == 'employee')
                                        <a href="{{ route('admin.') }}">Tableau de Bord</a>
                                    @elseif (Auth::user()->role == 'user')
                                        <li><a href="/home">Mon compte</a></li>
                                        <li><a href="/home">Suivre sa commande</a></li>
                                        <li><a href="#">Mes souhaits</a></li>
                                    @endif
                                </li>
                            @endauth

                            @if (Auth::check())
                               

                                {{-- Ne rien afficher si l'utilisateur est connecté --}}
                            @else
                                <li><a href="{{ route('login') }}">Se Connecter</a></li>
                                <li><a href="{{ route('register') }}">S'inscrire</a></li>
                            @endif


                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Service client</h4>
                        <ul class="widget-body">
                            <li><a href="#">Méthodes de paiement</a></li>
                            <li><a href="#">Garantie de remboursement !</a></li>
                            <li><a href="#">Retours de produits</a></li>
                            <li><a href="#">Centre d'assistance</a></li>
                            <li><a href="#">Expédition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="footer-center text-center m-auto">
                <p class="copyright">Copyright © {{ date('Y') }} Wuras. Tous droits réservés.</p>
            </div>
        </div>
        
    </div>
</footer>

<script>
    document.querySelector('form').addEventListener('submit', function (event) {
        var emailInput = document.querySelector('#email');
        var email = emailInput.value;

        if (!email || !/\S+@\S+\.\S+/.test(email)) {
            event.preventDefault();
            alert('Veuillez entrer une adresse email valide.');
        }
    });
</script>
