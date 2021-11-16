@extends('layouts.default')

@section('content')
    <h1 style="margin-top:100px">Добавить автора для книги</h1>
    <form method="POST">
        @csrf
        <select class="form-control" name="book">
            @foreach($books as $book)
                <option value="{{ $book->id }}">{{ $book->name }}</option>
            @endforeach
        </select>
        <select class="form-control" name="author">
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection