@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        {{-- BENVENUTO GUEST - NON REGISTRATO --}}
        @guest
        <h1 class="display-5 fw-bold text-center mt-4">
            Inizia ad utilizzare il tuo gestionale di <em class="text-dark shadow_title">PureGlow</em>
        </h1>
        @endguest

        {{-- BENVENUTO ADMIN - REGISTRATO --}}
        @auth
        <h1 class="display-5 fw-bold text-center mt-4">
        Salve <span class="text-dark">{{Auth::user()->name}}</span>!
        </h1>
        <h3 class="text-center mt-4">
        Siamo lieti di averti con noi! Grazie per aver scelto il nostro servizio per gestire 
        il tuo negozio di cosmetici e raggiungere i tuoi clienti.
        </h3>
        @endauth

        <hr class="">

        <div class="row pt-4">
            <div class="col-12 col-md-6 d-flex align-items-center">
                {{-- PARAGRAFO GUEST --}}
                @guest
                <p class="fs-5 lh-lg">
                    Se hai mai desiderato <span class="text-dark fw-bold">semplificare</span>
                    la gestione del tuo beauty shop, sei nel <span class="text-dark fw-bold">posto giusto</span>.
                    <br> 
                    <br>
                    Il nostro sistema di gestione 
                    è stato progettato su misura per le tue esigenze, 
                    offrendoti la soluzione completa 
                    per rendere la tua attività più 
                    <span class="text-dark fw-bold">efficiente</span>
                    e <span class="text-dark fw-bold">redditizia</span>.
                </p>
                @endguest

                {{-- PARAGRAFO ADMIN--}}
                @auth
                <p class="fs-5 lh-lg">
                    In questa pagina troverai tutte le informazioni e le funzionalità necessarie 
                    per gestire il tuo business in modo efficace. 
                    Potrai aggiungere <span class="text-dark fw-bold">i tuoi prodotti</span>,  
                    gestirli, 
                    monitorare le <span class="text-dark fw-bold">vendite</span> e molto altro ancora.
                    <br> 
                    <br>
                    Siamo a tua disposizione per qualsiasi domanda o necessità. Contattaci per saperne di più su come possiamo 
                    aiutarti a far <span class="text-dark fw-bold">crescere il tuo shop online</span>.
                </p>
                @endauth
            </div> 
            <div class="col-12 col-md-6 ">
                {{-- Immagine gestionale --}}
                <img class="img-fluid pb-4 pt-4 pt-md-0" {{-- src="{{ asset('storage/img/vector_gestionale.png') }}" --}} alt="">
            </div>
        </div>

        {{-- PULSANTE GUEST - VAI ALLA FORM PER REGISTRARTI --}}
        @guest
        @if (Route::has('register'))
            <div class="d-flex justify-content-center justify-content-md-start my-4 pb-5 mt-md-0">
                <a href="{{ route('register')}}" class="btn btn-primary" type="button">
                    Registrati ora
                </a>
            </div>
        @endif    
        @endguest
    </div>
@endsection