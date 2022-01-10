@extends('layouts.plantillabase')
@section('contenido')
<h1>Crear Examen de laboratorio</h1>
<form action="/examens" method="post">
    @csrf
    <div class="row">
        <div class="col">
            <label for="Codigo">Codigos</label>
            <input type="text" class="form-control" placeholder="Codigo" name="codigo" id="codigo">
        </div>
        <div class="col">
            <label for="">Categorias</label>
            <select name="categoria_id" id="categoria_id" class="form-select" aria-label="Default select example">
                <option value="">Categorias</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                @endforeach

            </select>
        </div>
        <div class="col">
            <label for="Examenes"></label>
          <input type="text" class="form-control" placeholder="Examen" name="nombre" id="nombre">
        </div>
        <div class="col mb-3">
            <label for="">Descripcion/Tubo/Tiempo</label>
          <input type="text-area" class="form-control" placeholder="Descripcion/Tubo/Tiempo" name="descripcion" id="descripcion">
        </div>
      </div>
      <div class="row g-3">
        <div class="col-sm">
            <label for="">Precio Convenio</label>
          <input type="number" class="form-control" placeholder="Precio Convenio" name="precioC" id="precioC" value="0.00">
        </div>
        <div class="col-sm">
            <label for="">Precio Publico</label>
          <input type="number" class="form-control" placeholder="Precio Publico" name="precioP" id="precioP" value="0.00">
        </div>
      <div class="d-grid gap-2 d-md-block">
        <a href="/examens" class="btn btn-secondary">Regresar</a>
        <button class="btn btn-primary" type="submit">Guardar</button>
      </div>
</form>
@endsection
