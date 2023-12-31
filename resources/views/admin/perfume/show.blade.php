@extends('layouts.admin')

@section('content')

<h3 class="text-center my-5">Dettagli Profumo</h1>
<div class="container mb-5">
    {{-- PULSANTE TORNA AI profumi --}}
    <a href="{{ route('admin.perfume.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Torna ai profumi</a>
    <div class="row mt-5">
        <div class="col-12 col-md-6">
            {{-- IMMAGINE --}}
            @if($perfume->image)
                <img src="{{ asset('storage/' . $perfume->image) }}" alt="Immagine del profumo" class="w-100">
            @else
                {{-- Immagine di default se l'immagine non è disponibile --}}
                <img src="{{ asset('img/cosmetic_default.jpg') }}" alt="Immagine di default" class="w-100">
            @endif
        </div>   

        <div class="col-12 col-md-6 lh-lg">
            {{-- DATI --}}
            <div>Nome: {{ $perfume->name }}</div>
            <div>{{ $perfume->volume_ml }} ml</div>
            <p>{{ $perfume->description }}</p>

            <div>Fragranza: {{ $perfume->fragrance_family }}</div>
            <div>Note di testa: {{ $perfume->top_notes }}</div>
            <div>Note di cuore: {{ $perfume->heart_notes }}</div>
            <div>Note di fondo: {{ $perfume->base_notes }}</div>

            <div>{{ $perfume->price}} &euro;</div>
            <div>Disponibilità in magazzino: {{ $perfume->quantity_available }} profumi</div>
        </div>
    </div>
</div>
@endsection