@extends('layout.app')


@section('page.title')
<div class="container pt-3">
    <p>{{ $comic->title }}</p>
</div>
    
@endsection

@section('page.main')
    <div class="container">
        <p>{{ $comic->description }}</p>
    </div>
@endsection
