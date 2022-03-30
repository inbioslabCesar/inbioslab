<div>
        <div class="container">
               <div class="row">
                   <h2>Tarifario</h2>
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
                               <th scope="col">Categoria</th>
                               <th scope="col">Prueba</th>
                               <th scope="col">Descripcion</th>
                               <th scope="col">Precio Convenio</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($tarifarios as $tarifario)
                           <tr>
                               <td>{{ $tarifario->id }}</td>
                               <td>{{ $tarifario->codigo }}</td>
                               <td>{{ $tarifario->categoria_id }}</td>
                               <td>{{ $tarifario->nombre }}</td> 
                               <td>{{ $tarifario->descripcion}}</td>                 
                               <td>{{ $tarifario->precioC }}</td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
                                      
               </div>
           </div>
           <div class="row">
                <div class="d-grid gap-2 d-md-block">
                    <a href="/" class="btn btn-secondary">Regresar</a>
                </div>
           </div>
       </div>
</div>
