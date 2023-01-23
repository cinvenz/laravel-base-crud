@extends('layouts.base')


@section('title')
    <div class="container ps-2 mt-3 mb-3">Inserisci un nuovo fumetto</div>
@endsection

@section('content')
    <form method="post" action="{{ route('comics.store') }}">
        @csrf()
        <div class="mb-3">
            <label for="title" class="form-label fw-bold">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label fw-bold">Descrizione</label>
            {{-- <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}"> --}}
            <textarea class="d-block w-100 border rounded" name="description" id="description" cols="30" rows="10">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label fw-bold">URL Img</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label fw-bold">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label fw-bold">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label fw-bold">Data di vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label fw-bold">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
