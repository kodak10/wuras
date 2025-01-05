
@extends('frontend.layouts.master')

@push('styles')
<style>
    .select-box select, .select-menu select{
        max-width: 100% !important;
    }
</style>
@endpush

@section('content')
     <!-- Start of Breadcrumb -->
     <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb shop-breadcrumb bb-no">
                <li class="passed"><a href="/panier">Panier</a></li>
                <li class="passed"><a href="/checkout">Vérification</a></li>
                <li class="active"><a href="#">Commande terminée</a></li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->


    <!-- Start of PageContent -->
    <div class="page-content">
        <div class="container">
           
           
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="checkout-scard card border-0 rounded">
                        <div class="card-body text-center">
                            <p class="card-icon"><i class="icon an an-shield-check fs-1"></i></p>
                            <h4 class="card-title">Merci pour votre commande !</h4>
                            <p class="card-text mb-1">Vous recevrez un e-mail de confirmation de commande avec les détails de votre commande et un lien pour suivre sa progression.</p>
                            <p class="card-text mb-1">Toutes les informations nécessaires sur la livraison, ont été envoyé à votre email</p>
                            <p class="card-text text-order my-3">Votre code de commande est: <b class=" badge bg-success">{{ $order->order_number }}</b></p>
                        </div>
                    </div>
                </div>
                <a href="{{ route('order.downloadReceipt', $order->id) }}" class="btn btn-primary mb-3" style="width:300px; margin:0px auto"><i class="w-icon-download fs-10"></i>
                    Télécharger la facture</a>

            </div>


            
           
        </div>
    </div>
    <!-- End of PageContent -->

    @push('scripts')
    <script>
        // Fonction d'impression
        function printReceipt() {
            window.print(); // Ouvre la boîte de dialogue d'impression
        }
    </script>
    @endpush
@endsection