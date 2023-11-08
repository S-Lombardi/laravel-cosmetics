@extends('layouts.admin')

@section('content')

    <div class="container">

        <div class="row">

            {{-- INIZIO FORM --}}
            <h2 class="text-center">Aggiungi un profumo ai tuoi prodotti</h2>
            <form action="{{route('admin.perfume.store')}}" method="POST" class="form-horizontal d-flex flex-wrap">
                @csrf
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="control-label col-sm-4">Nome *</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
    
    
                    <div class="form-group">
                    <label class="control-label col-sm-4">ml *</label>
                    <div class="col-sm-8">
                        <input type="number" min="5" name="volume_ml" class="form-control" required>
                    </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="control-label col-sm-4">Immagine</label>
                    <div class="col-sm-8">
                        <input type="file" name="image" class="form-control">
                    </div>
                    </div>
    
                    <div class="form-group">
                    <label class="control-label col-sm-4">Prezzo *</label>
                    <div class="col-sm-8">
                        <input type="number" name="price" class="form-control" required>
                    </div>
                    </div>
                </div>
    
                <div class="col-12">
                    <div class="form-group">
                    <label class="control-label col-sm-2">Descrizione</label>
                    <div class="col-sm-10">
                        <textarea type="text" name="description" class="form-control" rows="2"></textarea>
                    </div>
                    </div>
                </div>
    
                {{-- FRAGRANZA --}}
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Fragranza *</label>
                    <div class="col-sm-8">
                        <input type="text"  name="fragrance_family" class=" form-control" required>
                    </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Note di testa</label>
                    <div class="col-sm-8">
                        <input type="text" name="top_notes" class="form-control">
                    </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Note di cuore</label>
                    <div class="col-sm-8">
                        <input type="text" name="heart_notes" class="form-control" >
                    </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Note di fondo</label>
                    <div class="col-sm-8">
                        <input type="text" name="base_notes" class="form-control">
                    </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Profumi disponibili in magazzino *</label>
                    <div class="col-sm-8">
                        <input type="number" min="0" name="quantity_available" class="form-control" required>
                    </div>
                    </div>
                </div>
    
                <div class="text-center">
                    <button  type="submit" class="btn btn-primary waves-effect waves-light " id="btn-submit">
                        Save
                    </button>
                </div>
    
            </form>

        </div>

    </div>
    
@endsection