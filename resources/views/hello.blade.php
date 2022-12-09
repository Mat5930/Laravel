@extends('base')

@section('page_title','Hello Laravel')

@section('vite')
    @parent
    @vite(['ressources/css/hello.css'])
@endsection

@section('content')
    <h1>Hello Laravel</h1>
@endsection