@extends('layouts.base')

@section('title', 'Comics Page')

@section('content')
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Buy</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>
                        <a href="{{ route('comics.show', [
                            'comic' => $comic->id
                        ]) }}" class="btn btn-primary">Compra</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
