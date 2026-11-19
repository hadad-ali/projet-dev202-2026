@extends('default')

@section('contenu')
    <h1>{{ $pr->titre }}</h1>
    <p>{{ $pr->prix }} DH</p>
@endsection
