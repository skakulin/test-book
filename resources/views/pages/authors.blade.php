@extends('layouts.default')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ФИО</th>
            <th scope="col">Кол-во книг</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td scope="col">{{ $author->id }}</td>
                    <td scope="col">{{ $author->name }}</td>
                    <td scope="col">{{ count($author->books) }}</td>
                    <td scope="col"><a href="{{ route('editAuthor', ['id' => $author->id]) }}">Редактировать</a></td>
                    <td scope="col"><a href="{{ route('deleteAuthor', ['id' => $author->id]) }}">Удалить</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection