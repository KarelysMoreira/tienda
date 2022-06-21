<x-app-layout>
    
    <header>
        <div class="container">
            <div class="row justify-content-between mb-5">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="index.html">TIENDA KMJA</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>
    </header>
  
    <br>
  
    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h2 class="d-flex justify-content-center mb-3">Realizar Compra</h2>
                    <form id="procesar-pago"  method="POST" action="{{route('registros')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="nombre" class="col-12 col-md-2 col-form-label h2">Cliente :</label>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" name="nombre"
                                    placeholder="Ingresa nombre cliente" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-12 col-md-2 col-form-label h2">Correo :</label>
                            <div class="col-12 col-md-10">
                                <input type="email" class="form-control" name="email" placeholder="Ingresa tu Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="direccion" class="col-12 col-md-2 col-form-label h2">Direccion :</label>
                          <div class="col-12 col-md-10">
                              <input type="text" class="form-control" name="direccion" placeholder="Ingresa tu direccion" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="telefono" class="col-12 col-md-2 col-form-label h2">Telefono :</label>
                          <div class="col-12 col-md-10">
                              <input type="text" class="form-control"name="telefono" placeholder="Ingresa tu telefono" required>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="date" class="col-12 col-md-2 col-form-label h2">Fecha de Compra:</label>
                        <div class="col-12 col-md-10">
                            <input type="text" class="form-control" name="date" placeholder="Ingresa la Fecha" required>
                        </div>
                    </div>
  
                        <div id="carrito" class="table-responsive">
                            <table class="table" id="lista-compra">
                                <thead>
                                    <tr>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Sub Total</th>
                                       
                                    </tr>
  
                                </thead>
                                <tbody>

                                </tbody>
                                <td>{{$product->image}}</td>
                                <td>{{$product->producto}}</td>
                                <td>{{$product->precio}}</td>
                                <td>{{$product->precio}}</td>
                                
                                
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">SUB TOTAL :</th>
                                    <th scope="col">
                                        <p id="subtotal"></p>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">IGV :</th>
                                    <th scope="col">
                                        <p id="igv"></p>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">TOTAL :</th>
                                    <th scope="col">
                                        <p id="total"></p>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>
  
                            </table>
                        </div>
  
                        <div class="row justify-content-center" id="loaders">
                            <img id="cargando" src="img/cargando.gif" width="220">
                        </div>
  
                        <div class="row justify-content-between">
                            <div class="col-md-4 mb-2">
                                <a href="/categorias" class="btn btn-info btn-block">Seguir comprando</a>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <button type="submit" wire:click="guardar" class="btn btn-success btn-block">
                                    <a target="blank"></a> Realizar Compra</button>
                           
                            </div>
                           
                        </div>
                    </form>
  
                    {{-- <div class="col-xs-12 col-md-4" type="button">
                        <button class="btn btn-success btn-block">
                            <a target="blank" href="{{url('reporte')}}">FACTURA </a></button>
                   
                    </div> --}}
                </div>
  
  
            </div>
           
            
        </div>
    </main>
    </div>
  
  </x-app-layout>
  