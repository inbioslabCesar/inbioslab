@extends('layouts.plantillabase')
@section('contenido')
<div class="container">   
            <h1>Gestion de Examen Especial</h1>
        <div class="d-grid gap-2 d-md-block my-2">
            <a href="examens/create" class="btn btn-primary">Crear Examen</a>
        </div> 
        <nav class="navbar navbar-light">
            <div class="container-fluid">
              <form class="d-flex">

                <select name="tipo" class="form-control me-2" aria-label="Default select example">
                    <option selected>Buscar por tipo</option>
                    <option value="codigo">Codigo</option>
                    <option value="categoria">Categoria</option>
                    <option value="nombre">Prueba</option>
                </select>

                <input name="buscarpor" class="form-control me-2" type="search" placeholder="" aria-label="">

                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
            </div>
        </nav>
        <div class="col-xl-12">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Prueba</th>
                        <th scope="col">Descripcion/Tubo/Tiempo</th>
                        <th scope="col">Precio Convenio</th>
                        <th scope="col">Precio Publico</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($examens as $examen)
                    <tr>
                        <td>{{ $examen->id }}</td>
                        <td>{{ $examen->codigo }}</td>
                        <td>{{ $examen->categoria_id }}</td>
                        <td>{{ $examen->nombre }}</td>
                        <td>{{ $examen->descripcion }}</td>
                        <td>{{ $examen->precioC }}</td>
                        <td>{{ $examen->precioP }}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ Route('examens.edit', $examen) }}" class="btn btn-sm btn-info">
                                Editar
                                </a>
                                <form action="{{ route('examens.destroy', $examen) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit"
                                        value="Eliminar"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('¿Desea eliminar... ?')">
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $examens->links() }}
        </div>
    </div>
</div>
@endsection

