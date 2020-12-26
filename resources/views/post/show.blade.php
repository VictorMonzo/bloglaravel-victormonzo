@extends('plantilla')
@section('titulo', 'Fitxa post')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    {{ $post[0]->titol }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $post[0]->users->name }}</h5>
                    <p class="card-text">(Data creación)</p>
                    <p class="card-text">{{ $post[0]->contingut }}</p>

                    <h6 class="card-subtitle mb-2 text-muted">Comentarios</h6>
                    <ul class="list-group list-group-flush">
                        @forelse($comentaris as $comentari)
                            <li class="list-group-item">{{ $comentari->users->name }}: {{ $comentari->comentari }}</li>
                        @empty
                            <div class="alert alert-danger" role="alert">
                                No hay comentarios
                            </div>
                        @endforelse
                    </ul>

                    @if(Auth::check())
                        @if(auth()->user()->id === $post[0]->usuari_id || auth()->user()->rol === '1')
                            <form method="POST" action="{{  route('post.destroy', $post[0]->id) }}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Eliminar post y comentarios</button>
                            </form>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
