@extends('plantilla')
@section('titulo', 'Editar post')
@section('contenido')
    <h1>Editar post</h1>
    <form action="{{ route('post.update', $post[0]->id) }}" method='POST'>
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="titol" id="titol" class="form-control" value="{{ $post[0]->titol }}">
            @if ($errors->has('titol'))
                <div class="text-danger">
                    {{ $errors->first('titol') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="synopsis">Resumen</label>
            <textarea name="contingut" id="contingut" class="form-control" rows="3">{{ $post[0]->contingut }}</textarea>
            @if ($errors->has('contingut'))
                <div class="text-danger">
                    {{ $errors->first('contingut') }}
                </div>
            @endif
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Editar post</button>
        </div>
    </form>
@endsection
