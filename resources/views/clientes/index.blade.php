@extends('layouts.plantillabase')
@section('contenido')
<div class="container">   
    <div class="row">
        <h1>Gestion de Clientes</h1>
        <div class="d-grid gap-2 d-md-block my-2">
            <a href="clientes/create" class="btn btn-primary">Crear Clientes</a>
        </div>
    </div>  
            
        <nav class="navbar navbar-light">
            <div class="container-fluid">
              <form class="d-flex">

                <select name="tipo" class="form-control me-2" aria-label="Default select example">
                    <option selected>Buscar por tipo</option>
                    <option value="codigo">Codigo</option>
                    <option value="dni">DNI</option>
                    <option value="nombre">Nombres</option>
                    <option value="apellido">Apellidos</option>

                </select>

                <input name="buscarpor" class="form-control me-2" type="search" placeholder="" aria-label="">

                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
            </div>
        </nav>
    <div class="row">
        <div class="col-xl-12">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Celular</th>
                    <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->codigo }}</td>
                        <td>{{ $cliente->referencia }}</td>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellido }}</td>
                        <td>{{ $cliente->edad }}</td>
                        <td>{{ $cliente->sexo }}</td>
                        <td>{{ $cliente->dni }}</td>
                        <td>{{ $cliente->cel }}</td>
                        <td>
                            <div class="gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ Route('clientes.edit', $cliente) }}" class="btn btn-warning">
                                Editar
                                </a>
                                <form action="{{ route('clientes.destroy', $cliente) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit"
                                        value="Eliminar"
                                        class="btn btn btn-danger"
                                        onclick="return confirm('¿Desea eliminar... ?')">
                                </form>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $clientes->links() }}
        </div>
    </div>
</div>
@endsection
