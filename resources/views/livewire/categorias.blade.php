<x-app-layout>
 
    <header>
      <div class="container">
          <div class="row align-items-stretch justify-content-between">
              <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                  <a class="navbar-brand" href="#">TIENDA KMJA</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                      <ul class="navbar-nav mr-auto">
                          <li class="nav-item dropdown">
                              <img src="img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
                                  width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false"></img>
                              <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                  <table id="lista-carrito" class="table">
                                      <thead>
                                          <tr>
                                              <th>Imagen</th>
                                              <th>Nombre</th>
                                              <th>Precio</th>
                                              <th></th>
                                          </tr>
                                      </thead>
                                      <tbody></tbody>
                                  </table>

                                  <a href="#"  id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                  <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar       Compra</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
          </div>
      </div>
  </header>

  <main>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
        <h1 class="display-4 mt-4">Lista de Categorias</h1>
        <p class="lead">Selecciona uno de nuestras categorias y accede a un descuento</p>
    </div>

    <div class="container" id="lista-productos">
        
        <div class="card-deck mb-3 text-center">
            @foreach ($categorias as $cate)
            <div class="card mb-3 shadow-sm">
                        <div class="card-header">
                    <h4 class="my-0 font-weight-bold">{{$cate->category}}</h4>
                </div>
                <div class="card-body">
                    <img src="img/celulares.jpeg" class="card-img-top">
                   
                    <a href="/products-{{$cate->id}}" class="btn btn-block btn-primary agregar-carrito">Ver</a>
                </div>
            </div>
            @endforeach
        </div>


  

    </div>
</main>

</x-app-layout>

