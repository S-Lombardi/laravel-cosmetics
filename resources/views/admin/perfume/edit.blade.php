@extends('layouts.admin')

@section('content')

    <div class="container">

        <div class="row">

            {{-- INIZIO FORM --}}
            <h2 class="text-center my-4">Modifica i dati del profumo</h2>
            <p class="text-center">I campi contrassegnati con il simbolo * sono obbligatori</p>
            <form action="{{route('admin.perfume.update',$perfume->id)}}" method="POST" class="form-horizontal d-flex flex-wrap mb-5">
                @method('PUT')
                @csrf
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="control-label col-sm-4 mt-4">Nome *</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" value="{{ $perfume->name }}" required>
                        </div>
                    </div>
                    {{-- <input type="hidden" name="name" class="form-control"> --}}
                    <div class="form-group">
                    <label class="control-label col-sm-4 mt-4">ml *</label>
                    <div class="col-sm-8">
                        <input type="number" min="5" name="volume_ml" class="form-control" value="{{ $perfume->volume_ml }}" required>
                    </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="control-label col-sm-4 mt-4">Immagine</label>
                    <div class="col-sm-8">
                        <input type="file" name="image" value="{{ $perfume->image }}"class="form-control">
                    </div>
                    </div>
    
                    <div class="form-group">
                    <label class="control-label col-sm-4 mt-4">Prezzo *</label>
                    <div class="col-sm-8">
                        <input type="number" name="price" class="form-control" value="{{ $perfume->price}}" required>
                    </div>
                    </div>
                </div>
    
                <div class="col-12">
                    <div class="form-group">
                    <label class="control-label col-sm-2 mt-4">Descrizione</label>
                    <div class="col-sm-10">
                        <textarea type="text" name="description" class="form-control" value="{{ $perfume->description }}" rows="2"></textarea>
                    </div>
                    </div>
                </div>
    
                {{-- FRAGRANZA --}}
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label mt-4">Fragranza *</label>
                    <div class="col-sm-8">
                        <input type="text"  name="fragrance_family" class="form-control" value="{{ $perfume->fragrance_family}}" required>
                    </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label mt-4">Note di testa</label>
                    <div class="col-sm-8">
                        <input type="text" name="top_notes" class="form-control" value="{{ $perfume->top_notes}}">
                    </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label mt-4">Note di cuore</label>
                    <div class="col-sm-8">
                        <input type="text" name="heart_notes" class="form-control" value="{{ $perfume->heart_notes}}" >
                    </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label mt-4">Note di fondo</label>
                    <div class="col-sm-8">
                        <input type="text" name="base_notes" class="form-control" value="{{ $perfume->base_notes}}">
                    </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label mt-4">Profumi in magazzino *</label>
                    <div class="col-sm-8">
                        <input type="number" min="0" name="quantity_available" class="form-control"  value="{{ $perfume->quantity_available}}" required>
                    </div>
                    </div>
                </div>
    
                <div class="text-center mt-4">
                    <button  type="submit" class="btn btn-primary waves-effect waves-light " id="btn-submit">
                        Save
                    </button>
                </div>
    
            </form>

        </div>

    </div>
    
@endsection