@extends('layouts.base')

@section('title')
    <div class="container ps-5 mt-3 mb-3">Fumetto della serie {{$comic->series}}</div>
@endsection

@section('content')
    @if (session('success_create'))
        <div class="alert alert-success">
            Il post e' stato creato
        </div>
    @endif
    <ul>
        <li class="mb-4"><span class="fw-bold">Volume:</span>  {{ $comic->title }}</li>
        <li class="mb-4"><span class="fw-bold">Descrizione :</span> {{ $comic->description }}</li>
        <li class="mb-4"><span class="fw-bold">Prezzo:</span>  {{ $comic->price }} $</li>
        <li class="mb-4"><img src="{{$comic->thumb}}" alt=""></li>
        <li class="mb-4"><span class="fw-bold">Data di vendita:</span>  {{$comic->sale_date}}</li>
        <li class="mb-4"><span class="fw-bold">Tipo</span>  {{$comic->type}}</li>
    </ul>
    <div class="actions d-flex gap-4">
        <a href="{{ route('comics.edit', ['comic' => $comic])}}" class="btn btn-success">Edita</a>
        <form action="{{ route('comics.destroy', [
                'comic' => $comic
            ]) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Elimina</button>
        </form>
    </div>
@endsection
