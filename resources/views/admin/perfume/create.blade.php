@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-center my-4">Aggiungi un profumo ai tuoi prodotti</h2>
            <p class="text-center">I campi contrassegnati con il simbolo * sono obbligatori</p>
            {{-- INIZIO FORM --}}
            <form action="{{route('admin.perfume.store')}}" method="POST"  class="form-horizontal d-flex flex-wrap mb-5" enctype="multipart/form-data">
                @csrf
                <div class="col-12 col-md-6">
                    {{-- NOME --}}
                    <div class="form-group"> 
                        <label class="control-label col-sm-4 mt-4">Nome *</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    {{-- ml --}}
                    <div class="form-group">
                    <label class="control-label col-sm-4  mt-4">ml *</label>
                    <div class="col-sm-8">
                        <input type="number" min="5" name="volume_ml" accept="image/*" class="form-control" required>
                    </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    {{-- IMMAGINE --}}
                    <div class="form-group">
                    <label class="control-label col-sm-4 mt-4">Immagine</label>
                    <div class="col-sm-8">
                        <input type="file" name="image" class="form-control">
                    </div>
                    </div>
                    {{-- PREZZO --}}
                    <div class="form-group">
                    <label class="control-label col-sm-4 mt-4">Prezzo *</label>
                    <div class="col-sm-8">
                        <input type="number" name="price" class="form-control" >
                    </div>
                    </div>
                </div>
                {{-- DESCRIZIONE --}}
                <div class="col-12">
                    <div class="form-group">
                    <label class="control-label col-sm-2 mt-4">Descrizione</label>
                    <div class="col-sm-10">
                        <textarea type="text" name="description" class="form-control" rows="2"></textarea>
                    </div>
                    </div>
                </div>
                {{-- FRAGRANZA --}}
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label mt-4">Fragranza *</label>
                    <div class="col-sm-8">
                        <input type="text"  name="fragrance_family" class=" form-control" required>
                    </div>
                    </div>
                </div>
                {{-- NOTE DI TESTA --}}
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label mt-4">Note di testa</label>
                    <div class="col-sm-8">
                        <input type="text" name="top_notes" class="form-control">
                    </div>
                    </div>
                </div>
                {{-- NOTE DI CUORE--}}
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label mt-4">Note di cuore</label>
                    <div class="col-sm-8">
                        <input type="text" name="heart_notes" class="form-control" >
                    </div>
                    </div>
                </div>
                {{-- NOTE DI FONDO --}}
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label mt-4">Note di fondo</label>
                    <div class="col-sm-8">
                        <input type="text" name="base_notes" class="form-control">
                    </div>
                    </div>
                </div>
                {{-- DISPONIBILITà MAGAZZINO--}}
                <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label mt-4">Disponibilità in magazzino *</label>
                    <div class="col-sm-8">
                        <input type="number" min="0" name="quantity_available" class="form-control" required>
                    </div>
                    </div>
                </div>
                {{-- PULSANTE SALVA --}}
                <div class="text-center">
                    <button  type="submit" class="mt-4 btn btn-primary waves-effect waves-light " id="btn-submit">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>


    <script>

    document.getElementById('perfume-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Previeni la sottomissione del modulo

        var formData = new FormData(this); // Ottieni i dati del modulo
        for (var pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]); // Fai un dump dei dati nella console
        }

        // Ora puoi inviare i dati con AJAX o eseguire altre operazioni qui se necessario

        // Qui puoi inviare il modulo tramite AJAX se desideri
        // fetch('URL_del_tuo_endpoint', {
        //     method: 'POST',
        //     body: formData,
        // })
        // .then(response => response.json())
        // .then(data => {
        //     console.log(data);
        // });

        // Oppure puoi inviare il modulo manualmente:
        // this.submit();
    });

    </script>    
@endsection