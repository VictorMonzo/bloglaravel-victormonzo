@extends('plantilla')
@section('titulo', 'Crear post')
@section('contenido')
    <h1>Nuevo post</h1>
    <form action="{{ route('post.store') }}" method='POST'>
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="titol" id="titol" class="form-control">
        </div>
        <div class="form-group">
            <label for="synopsis">Resumen</label>
            <textarea name="contingut" id="contingut" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Crear post</button>
        </div>
    </form>
@endsection
