@extends('plantilla')
@section('titulo', 'Llistat post')
@section('contenido')
    <h1>Llistat de posts</h1>

    @forelse($posts as $post)
        <h2>{{ $post->titol }}</h2>
        <h4>Nombre autor: {{ $post->users->name }}</h4>
        <a href="{{ route('post.show', $post->id) }}">Veure</a>

        <form method="POST" action="{{  route('post.destroy', $post->id) }}">
            @method('DELETE')
            @csrf
            <button>Borrar</button>
        </form>
        <a href="{{ route('post.destroy', $post->id) }}">Eliminar</a>
    @empty
        <h2>No hay ningún post</h2>
    @endforelse

    {{ $posts->links() }}
@endsection
