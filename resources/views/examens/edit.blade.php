@extends('layouts.plantillabase')
@section('contenido')
<h1>Editar Examen</h1>
<form action="{{ Route('examens.update', $examen) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
            <label for="">Codigo</label>
            <input type="text" class="form-control" placeholder="Codigo" name="codigo" id="codigo" value="{{ $examen->codigo }}">
        </div>
        <div class="col">
            <label for="">Categorias</label>
            <select name="categoria_id" id="categoria_id" class="form-select" aria-label="Default select example" value="{{ $examen->categoria_id }}">
                <option value="">Categorias</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                @endforeach

            </select>
        </div>
        <div class="col">
            <label for="">Examen</label>
          <input type="text" class="form-control" placeholder="Examen" name="nombre" id="nombre" value="{{ $examen->nombre }}">
        </div>
        <div class="col mb-3">
            <label for="">Descripcion/Tubo/Tiempo</label>
          <input type="text" class="form-control" placeholder="Descripcion" name="descripcion" id="descripcion" value="{{ $examen->descripcion }}">
        </div>
    </div>
    <div class="row g-3">
        <div class="col-sm">
            <label for="">Precio Convenio</label>
          <input type="number" class="form-control" placeholder="Precio Convenio" name="precioC" id="precioC" value="{{ $examen->precioC }}" value="0.00">
        </div>
        <div class="col-sm">
            <label for="">Precio Publico</label>
          <input type="number" class="form-control" placeholder="Precio Publico " name="precioP" id="precioP" value="{{ $examen->precioP }}" value="0.00">
        </div>
        <div class="d-grid gap-2 d-md-block">
            <a href="/examens" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </div>
</form>
@endsection
