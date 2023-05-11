@extends('layout.app')


@section('page.title')
    <div class="container pt-3">
        <h2>Dettagli fumetto:</h2>
        <h3>{{ $comic->title }}</h3>
    </div>
@endsection

@section('page.main')
    <div class="container">
        <div class="details">
            <p>Descrizione: {!! $comic->description !!}</p>

            <p>Prezzo: {{ $comic->price }}</p>
            <p>Serie: {{ $comic->series }}</p>
            <p>Data vendita: {{ $comic->sale_date }}</p>
            <p>Tipo: {{ $comic->type }}</p>
            <p>Artisti: {{ $comic->artists }}</p>
            <p>Scrittori: {{ $comic->writers }}</p>
        </div>
        <div class="d-flex justify-content-center my-5">
            <a href="{{ route('comics.index', $comic) }}" class="mx-2"><button class="btn btn-primary mx-2">Torna all'elenco
                    comics</button></a>
            <a href="{{ route('comics.edit', $comic) }}" class="mx-2"><button class="btn btn-warning mx-2">Modifica i
                    dettagli</button></a>
            {{-- aggiungo il pulsante per cancellare, deve essere un form con @method DELETE --}}
            <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="mx-2">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger mx-2" value="Cancella">
            </form>
        </div>
    </div>
@endsection
