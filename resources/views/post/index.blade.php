@extends('plantilla')
@section('titulo', 'Llistat post')
@section('contenido')
    <div class="container">
        <div class="row">
            <h1 class="col-12">Llistat de posts</h1>
        </div>

        <div class="row">
            @forelse($posts as $post)
                <div class="card col-4">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->titol }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $post->users->name }}</h6>
                        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Ver post</a>

                        @if(Auth::check())
                            @if(auth()->user()->id === $post->usuari_id || auth()->user()->rol === '1')

                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary">Editar post</a>

                                <form method="POST" action="{{  route('post.destroy', $post->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">Borrar</button>
                                </form>
                            @endif
                        @endif
                    </div>
                </div>
            @empty
                <div class="alert alert-danger" role="alert">
                    No hay ningún post
                </div>
            @endforelse
        </div>

        {{ $posts->links() }}
    </div>
@endsection
