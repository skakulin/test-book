@extends('layouts.default')

@section('content')
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif
    
    <h1 style="margin-top:100px">Главная</h1>
@endsection