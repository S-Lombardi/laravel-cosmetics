@extends('layouts.admin')

@section('content')

<h3 class="text-center my-5">Dettagli Profumo</h1>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            {{-- IMMAGINE --}}
            <img src="" alt="">
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