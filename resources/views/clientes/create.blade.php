@extends('layouts.plantillabase')
@section('contenido')
<div class="container">
      <h1>Crear Cliente</h1>
      <form action="/clientes" method="post">
          @csrf
          <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <input type="text" class="form-control" placeholder="Codigo" name="codigo" id="codigo">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <input type="text" class="form-control" placeholder="Referencia" name="referencia" id="referencia">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                  <input type="text" class="form-control" placeholder="Nombres" name="nombre" id="nombre">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                  <input type="text" class="form-control" placeholder="Apellidos" name="apellido" id="apellido">
                </div>
            </div> 
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                  <input type="text" class="form-control" placeholder="Edad" name="edad" id="edad">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                  <input type="text" class="form-control" placeholder="Sexo" name="sexo" id="sexo">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                  <input type="text" class="form-control" placeholder="DNI" name="dni" id="dni">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <input type="text" class="form-control" placeholder="Celular" name="cel" id="cel">
                  </div>
            </div>
            <div class="div">
                <a href="/clientes" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>                          
            
      </form>
      <div class="row">
          <div>
              <h1>Examenes</h1>
          </div>
          <nav class="navbar navbar-light">
              <div class="container-fluid">
                  <form class="d-flex">
                      <select name="tipo" class="form-control me-2" aria-label="Default select example">
                          <option selected>Tipo de prueba --</option>
                          <option value="">Bioquimica</option>
                          <option value="">Hematologia</option>
                          <option value="">Inmunologia</option>
                          <option value="">Uroanalisis</option>
                          <option value="">Parasitologia</option>
                          <option value="">Perfiles</option>
                          <option value="">Hormonas</option>
                          <option value="">Bacteriologia</option>
                      </select>
                      <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </form>
              </div>
          </nav>
      </div>
</div>
        
@endsection
