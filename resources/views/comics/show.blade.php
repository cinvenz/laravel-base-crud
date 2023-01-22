@extends('layouts.base')

@section('title')
    Fumetto della serie {{$comic->series}}
@endsection

@section('content')
    <ul>
        <li>Volume: {{ $comic->title }}</li>
        <li>Descrizione :{{ $comic->description }}</li>
        <li>Prezzo: {{ $comic->price }} $</li>
        <li><img src="{{$comic->thumb}}" alt=""></li>
        <li>Data di vendita: {{$comic->sale_date}}</li>
    </ul>
@endsection
