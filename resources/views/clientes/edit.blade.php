@extends('layouts.plantillabase')
@section('contenido')
<h1>Editar Cliente</h1>
<form action="{{ Route('clientes.update', $cliente) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Codigo" name="codigo" id="codigo" value="{{ $cliente->codigo }}">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Referencia" name="referencia" id="referencia" value="{{ $cliente->referencia }}">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombres" name="nombre" id="nombre" value="{{ $cliente->nombre }}">
        </div>
        <div class="col mb-3">
          <input type="text" class="form-control" placeholder="Apellidos" name="apellido" id="apellido" value="{{ $cliente->apellido }}">
        </div>
      </div>
      <div class="row g-3">
        <div class="col-sm">
          <input type="text" class="form-control" placeholder="Edad" name="edad" id="edad" value="{{ $cliente->edad }}">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" placeholder="Sexo" name="sexo" id="sexo" value="{{ $cliente->sexo }}">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" placeholder="DNI" name="dni" id="dni" value="{{ $cliente->dni }}">
        </div>
        <div class="col-sm mb-3">
            <input type="text" class="form-control" placeholder="Celular" name="cel" id="cel" value="{{ $cliente->cel }}">
          </div>
      </div>
      <a href="/clientes" class="btn btn-secondary">Regresar</a>
      <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
