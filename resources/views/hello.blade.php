@extends('default')

@section('titre', 'hello')

@section('contenu')
    @isset($nom)
    <h1>Hello {{ $nom }}</h1>
    @else
    <h1>Hello</h1>
    @endisset
@endsection
