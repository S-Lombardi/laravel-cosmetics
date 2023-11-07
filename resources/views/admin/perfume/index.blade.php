@extends('layouts.admin')

@section('content')
{{-- TITOLONE --}}
<div class="container">
    <h2 class="my-4 text-center fs-1">
        Modifica i tuoi <span class="text-uppercase">profumi</span>
    </h2>
    
    {{-- PULSANTI NUOVO PIATTO / TORNA AL MENU --}}
    <div class="col-12 d-flex justify-content-between py-3 ">
        
        <a href="{{route('admin.product')}}" class="btn btn-primary">Torna ai prodotti</a>
        <a href="{{route('admin.perfume.create')}}" class="btn btn-primary">Aggiungi un profumo</a>
    </div>
    
    <table class="table m-0">

        <thead>
            <tr>
                <th scope="col">
                    Nome Profumo
                </th>
                <th scope="col" class="d-none d-md-table-cell">
                    Prezzo
                </th>
                <th scope="col" class="d-none d-md-table-cell">
                    Quantità in magazzino
                </th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($perfumes as $perfume)
            
            <tr>
                <td>{{$perfume->name}}</td>
                
                <td>{{$perfume->price}}</td>
                
                <td>{{$perfume->quantity_available}}</td>

                <td class="text-center">
                    {{-- SHOW --}}
                    <a href="" class="btn btn-primary"><i class="fa-solid fa-arrow-right"></i></a>
                    {{-- EDIT --}}
                    <a href="{{route('admin.perfume.edit', $perfume->id)}}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                    {{-- DELETE --}}
                    <form method="POST" class="d-inline-block dish-delete-button" action="" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>

            </tr>                    
            @endforeach

        </tbody>    

    </table> 
           

</div>
@endsection
