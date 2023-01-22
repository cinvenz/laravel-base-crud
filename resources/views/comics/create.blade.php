@extends('layouts.base')

@section('title', 'Inserisci un nuovo fumetto')

@section('content')
    <form method="post" action="{{ route('comics.store') }}">
        @csrf()
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="street" name="street">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="is_rent"name="is_rent" value="1">
            <label class="form-check-label" for="is_rent">Vendita</label>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="street" name="street">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" class="form-control" id="free_from" name="free_from">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="street" name="street">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
