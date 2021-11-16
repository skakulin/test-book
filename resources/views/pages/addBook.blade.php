@extends('layouts.default')

@section('content')
    <h1 style="margin-top:100px">Добавить книгу</h1>
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Year</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="year">
        </div>
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