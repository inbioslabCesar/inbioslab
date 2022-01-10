@extends('layouts.plantillabase')
@section('contenido')
<div class="container">
    <blockquote class="text-2xl font-semibold italic text-center text-gray-900">
        When you look
        <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-green-500 relative inline-block">
          <span class="relative text-white">inbioslab</span>
        </span>
        all the time, people think that you're busy.
    </blockquote>
            <h1>Gestion de Categorias Modernas</h1>
        <div class="d-grid gap-2 d-md-block my-2">
            <a href="{{ route('categorias.create') }}" class="btn btn-primary">Crear Categorias</a>
        </div>
        <nav class="navbar navbar-light">
            <div class="container-fluid">
              <form class="d-flex">

                <select name="tipo" class="form-control me-2" aria-label="Default select example">
                    <option selected>Buscar por tipo</option>
                    <option value=""></option>
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
                    <th scope="col">Categorias</th>
                    <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->categoria }}</td>
                        <td>
                            <div class="gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-warning">
                                Editar
                                </a>
                                <form action="{{ route('categorias.destroy', $categoria) }}" method="post">
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
        </div>
    </div>
</div>
@endsection
