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

    <div>
        <a href="{{route('comics.index')}}"><button class="btn btn-primary">Torna all'elenco comics</button></a>
    </div>
</div>
@endsection
