@extends('plantilla')
@section('titulo', 'Fitxa post')
@section('contenido')



    <h1>Fitxa del post {{ $post[0]->id }}</h1>

    <h2>Datos usuario</h2>
    <h3>Nombre autor: {{ $post[0]->users->name }}</h3>

    <h2>Data creación</h2>
    <h3></h3>

    <h2>Titol: {{ $post[0]->titol }}</h2>
    <h3>Contingut: {{ $post[0]->contingut }}</h3>
    <h3>Data creacio: {{ $post[0]->created_at }}</h3>

    <h2>Comentarios</h2>
    @forelse($comentaris as $comentari)
        <h4>Nombre autor del comentario: {{ $comentari->users->name }}</h4>
        <h4>Comentario: {{ $comentari->comentari }}</h4>
    @empty
        <h4>No hay comentarios</h4>
    @endforelse


    <form method="POST" action="{{  route('post.destroy', $post[0]->id) }}">
        @method('DELETE')
        @csrf
        <button>Eliminar post y comentarios</button>
    </form>

@endsection
