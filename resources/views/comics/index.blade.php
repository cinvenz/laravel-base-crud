@extends('layouts.base')

@section('title')
    <div class="container text-center mt-3 mb-3">Comics page</div>
@endsection



@section('content')


    @if (session('success_delete'))

        <div class="alert alert-success">
            {{-- {{ session('success_delete') }} --}}
            Il post con id {{ session('success_delete') }} e' stato eliminato correttamente
        </div>
    @endif
    <table class="table table-warning table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Buy</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a href="{{ route('comics.show', [
                            'comic' => $comic
                        ]) }}" class="btn btn-primary">Visita</a>
                    </td>
                    <td>
                        <a href="{{ route('comics.edit', [
                            'comic' => $comic
                        ]) }}" class="btn btn-success">Edita</a>
                    </td>
                    <td>

                        <button class="btn btn-danger btn-delete-me" data-id="{{ $comic->id }}">Elimina</button>

                    </td>
                </tr>


            @endforeach
        </tbody>
    </table>

    @include('partials.delete_confirmation')
@endsection
