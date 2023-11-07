@extends('layouts.admin')

@section('content')
{{-- TITOLONE --}}
<div class="container">
    <h2 class="my-4 text-center fs-1">
        Modifica i tuoi <span class="text-uppercase">profumi</span>
    </h2>
    
    {{-- PULSANTI NUOVO PIATTO / TORNA AL MENU --}}
    {{-- <div class="col-12 d-flex justify-content-between py-3 ">
        <a href="{{route('admin.dishes.create')}}" class="btn button_delive_two">Nuovo Piatto</a>
        <a href="{{route('admin.resturants')}}" class="btn button_delive_two">Torna al men&uacute;</a>
    </div> --}}

   

        
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
        
                </tr>                    
                @endforeach

            </tbody>    

        </table>  
                
    
            
 
        

</div>
@endsection
