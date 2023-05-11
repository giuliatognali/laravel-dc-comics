@extends('layout.app')

@section('page.title')
    <div class="container pt-3">
        <h2>Inserisci un nuovo fumetto</h2>
        <a href="{{ route('comics.index') }}"><button class="btn btn-primary">Torna all'elenco comics</button></a>
    </div>
@endsection

@section('page.main')
    <div class="container">
        {{-- TODO: sistemare il form in base al contenuto  --}}
        <div class="form-container">
            <form action="{{ route('comics.store') }}" method='POST'>
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea type="text" class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data vendita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti</label>
                    <input type="text" class="form-control" id="artists" name="artists">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori</label>
                    <input type="text" class="form-control" id="writers" name="writers">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>  
        </div>
    @endsection
