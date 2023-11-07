@extends('layouts.admin')

@section('content')
{{-- TITOLONE --}}
<div class="container">
    <h2 class="my-4 text-center fs-1">
        I tuoi <span class="text-uppercase">prodotti</span>
    </h2>

    <div class="col-12">
        
        
        @foreach ($products as $product)

            @if ($product->type === 'perfume')

                <a href="{{ route('admin.perfumes.index') }}">Profumi</a>

            @elseif ($product->type === 'cream')

                <a href="">Creme</a>

            @elseif ($product->type === 'make_up')

                <a href="">Make Up</a>

            @elseif ($product->type === 'accessory')

                <a href="">Accessori</a>

            @endif
        
        @endforeach

    </div>      

</div>
@endsection
