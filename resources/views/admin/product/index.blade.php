@extends('layouts.admin')

@section('content')
{{-- TITOLONE --}}
<div class="container">
    <h2 class="text-center fs-1 my-5">
        I tuoi prodotti
    </h2>
    <div class="col-12 d-flex justify-content-center justify-content-around">
        @foreach ($products as $product)
            @if ($product->type === 'perfume')

                <a href="{{ route('admin.perfume.index') }}">Profumi</a>

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
