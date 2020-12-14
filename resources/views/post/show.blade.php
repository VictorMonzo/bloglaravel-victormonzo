@extends('plantilla')
@section('titulo', 'Fitxa post')
@section('contenido')
    <h1>Fitxa del post {{ $post[0]->id }}</h1>

    <h2>Titol: {{ $post[0]->titol }}</h2>
    <h2>Contingut: {{ $post[0]->contingut }}</h2>
    <h2>Data creacio: {{ $post[0]->created_at }}</h2>

@endsection
