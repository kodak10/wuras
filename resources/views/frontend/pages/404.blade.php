@extends('frontend.layouts.master')


@section('content')
<div class="page-content error-404">
    <div class="container">
        <div class="banner">
            <figure>
                <img src="{{ asset('assets/images/pages/404.png') }}" alt="Error 404"  
                    width="820" height="460" />
            </figure>
            <div class="banner-content text-center">
                <h2 class="banner-title">
                    <span class="text-secondary">Oops!!!</span> Quelque chose s'est mal passé ici
                </h2>
                <p class="text-light">Il se peut qu'il y ait une faute d'orthographe dans l'URL saisie, ou que la page que vous recherchez n'existe plus</p>
                <a href="/" class="btn btn-dark btn-rounded btn-icon-right">Retourner à la page d'accueil<i class="w-icon-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection