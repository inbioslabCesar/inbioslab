@extends('layouts.plantillabase')
@section('contenido')
<h1>Crear Categoria</h1>
<form action="/categorias" method="post">
    @csrf
    <div class="row">
        <div class="col-4">
            <label for="">Categorias</label>
            <input type="text" class="form-control" placeholder="Categoria" name="categoria" id="categoria">
        </div>
    </div>
    <div class="row ">
        <div class="col-4">
            <a href="/categorias" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection
