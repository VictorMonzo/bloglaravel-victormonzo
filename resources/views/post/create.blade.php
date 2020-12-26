@extends('plantilla')
@section('titulo', 'Crear post')
@section('contenido')
    <div class="container">
        <h1>Nuevo post</h1>
        <form action="{{ route('post.store') }}" method='POST'>
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="titol" id="titol" class="form-control" value="{{ old('titol') }}">
                @if ($errors->has('titol'))
                    <div class="text-danger">
                        {{ $errors->first('titol') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="synopsis">Resumen</label>
                <textarea name="contingut" id="contingut" class="form-control" rows="3">{{ old('contingut') }}</textarea>
                @if ($errors->has('contingut'))
                    <div class="text-danger">
                        {{ $errors->first('contingut') }}
                    </div>
                @endif
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Crear post</button>
            </div>
        </form>
    </div>
@endsection
