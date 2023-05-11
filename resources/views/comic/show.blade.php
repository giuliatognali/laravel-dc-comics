@extends('layout.app')


@section('page.title')
<div class="container pt-3">
    <h2>{{ $comic->title }}</h2> 
</div>
    
@endsection

@section('page.main')
    <div class="container">
        <p>{!! $comic->description !!}</p>
        <p>{{$comic->price}}</p>
        <p>{{$comic->series}}</p>
        <p>{{$comic->sale_date}}</p>
        <p>{{$comic->type}}</p>
        <p>{{$comic->artists}}</p>
        <p>{{$comic->writers}}</p>

    <div class="d-flex justify-content-center my-5">
        <a href="{{route('comics.index', $comic)}}" class="mx-2"><button class="btn btn-primary mx-2">Torna all'elenco comics</button></a>
        <a href="{{route('comics.edit', $comic)}}" class="mx-2"><button class="btn btn-warning mx-2">Modifica i dettagli</button></a>
        {{-- aggiungo il pulsante per cancellare, deve essere un form con @method DELETE --}}
        <form action="{{route('comics.destroy', $comic)}}" method="POST" class="mx-2">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger mx-2" value="Cancella">
        </form>
    </div>
</div>
@endsection
