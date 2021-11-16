@extends('layouts.default')

@section('content')
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ФИО</th>
            <th scope="col">Год выпуска</th>
            <th scope="col">Авторы</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td scope="col">{{ $book->id }}</td>
                    <td scope="col">{{ $book->name }}</td>
                    <td scope="col">{{ $book->year }}</td>
                    <td scope="col">
                        <ul class="list-group">
                            @foreach($book->authors as $author)
                                <li class="list-group-item">{{ $author->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td scope="col"><a href="{{ route('editBook', ['id' => $book->id]) }}">Редактировать</a></td>
                    <td scope="col"><a href="{{ route('deleteBook', ['id' => $book->id]) }}">Удалить</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection