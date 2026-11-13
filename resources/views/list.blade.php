@extends('default')
@section('titre', 'List Users')

@section('contenu')
    <h1>list des users</h1>
    <ul>
        @foreach ($usrs as $u)
            <li>{{ $u->name }} - {{ $u->email }} </li>
        @endforeach
    </ul>

@endsection
