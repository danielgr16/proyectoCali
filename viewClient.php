<!DOCTYPE html>
<html lang="en">
<?PHP include("head.html"); ?>
<body>

  <!-- Start your project here-->
  <?PHP include("nav.html"); ?>
  <div class="back-color mt-5"></div>
  <div class="container cont-principal">
    <div class="row">
      <div class="col-12">
        <div class="card wow fadeInLeft card-nw" data-wow-delay="0.3s">
          <div class="card-body">
            <div class="container p-0">
              <div class="row">
                <div class="col">
                  <h4 class="titulo-card">
                    Clientes
                  </h4>
                </div>
                <div class="col-4">
                  <form class="form-inline md-form form-sm active-cyan-2 mt-2">
                    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                      aria-label="Search">
                    <i class="fas fa-search" aria-hidden="true"></i>
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <!-- <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> -->
                  <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Compras</th>
                        <th scope="col">Ultima compra</th>
                        <th scope="col">Detalles</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>Juan</td>
                        <td>Perez</td>
                        <td>5</td>
                        <td>05/10/2019</td>
                        <td>
                          <button type="button" class="btn-sm btn-list-nw" data-toggle="modal" data-target="#staticBackdrop">
                            <i class="material-icons">pageview</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>002</td>
                        <td>Ana</td>
                        <td>Martinez</td>
                        <td>2</td>
                        <td>05/10/2019</td>
                        <td>
                          <button type="button" class="btn-sm btn-list-nw" data-toggle="modal" data-target="#staticBackdrop">
                            <i class="material-icons">pageview</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>003</td>
                        <td>Roberto</td>
                        <td>Prado</td>
                        <td>6</td>
                        <td>01/10/2019</td>
                        <td>
                          <button type="button" class="btn-sm btn-list-nw" data-toggle="modal" data-target="#staticBackdrop">
                            <i class="material-icons">pageview</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>004</td>
                        <td>Juan Carlos</td>
                        <td>Alvarado</td>
                        <td>8</td>
                        <td>03/09/2019</td>
                        <td>
                          <button type="button" class="btn-sm btn-list-nw" data-toggle="modal" data-target="#staticBackdrop">
                            <i class="material-icons">pageview</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>005</td>
                        <td>Alfredo</td>
                        <td>Jimenez</td>
                        <td>1</td>
                        <td>05/09/2019</td>
                        <td>
                          <button type="button" class="btn-sm btn-list-nw" data-toggle="modal" data-target="#staticBackdrop">
                            <i class="material-icons">pageview</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>006</td>
                        <td>Alexis</td>
                        <td>Ibarra</td>
                        <td>10</td>
                        <td>02/07/2019</td>
                        <td>
                          <button type="button" class="btn-sm btn-list-nw" data-toggle="modal" data-target="#staticBackdrop">
                            <i class="material-icons">pageview</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>007</td>
                        <td>Laura</td>
                        <td>Torres</td>
                        <td>5</td>
                        <td>02/03/2019</td>
                        <td>
                          <button type="button" class="btn-sm btn-list-nw" data-toggle="modal" data-target="#staticBackdrop">
                            <i class="material-icons">pageview</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>008</td>
                        <td>Mario</td>
                        <td>Castañeda</td>
                        <td>12</td>
                        <td>06/04/2019</td>
                        <td>
                          <button type="button" class="btn-sm btn-list-nw" data-toggle="modal" data-target="#staticBackdrop">
                            <i class="material-icons">pageview</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>009</td>
                        <td>Juan Carlos</td>
                        <td>Bodoque</td>
                        <td>8</td>
                        <td>03/10/2019</td>
                        <td>
                          <button type="button" class="btn-sm btn-list-nw" data-toggle="modal" data-target="#staticBackdrop">
                            <i class="material-icons">pageview</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div> 

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-prod-nw" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Informacion de cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container p-0">
              <div class="row">
                <div class="col">
                  <h6 class="mb-3"><strong>Id cliente:</strong> 001</h6>
                </div>
              </div>
              <div class="row">
                <div class="col p-1">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Folio</th>
                        <th>Producto</th>
                        <th>Cant.</th>
                        <th>Fecha</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>55644</td>
                        <td>Disco duro 500GB adata</td>
                        <td>2</td>
                        <td>05/11/2019</td>
                        <td>170dlls</td>
                      </tr>
                      <tr>
                        <td>45121</td>
                        <td>Laptop 17" 1TB HP</td>
                        <td>1</td>
                        <td>02/10/2019</td>
                        <td>700dlls</td>
                      </tr>
                      <tr>
                        <td>44521</td>
                        <td>Nintendo Switch</td>
                        <td>3</td>
                        <td>06/02/2018</td>
                        <td>900dlls</td>
                      </tr>
                      <tr>
                        <td>35515</td>
                        <td>Mouse inalambrico</td>
                        <td>7</td>
                        <td>01/01/1018</td>
                        <td>850dlls</td>
                      </tr>
                      <tr>
                        <td>25545</td>
                        <td>Bocina bluetooth</td>
                        <td>2</td>
                        <td>11/11/2017</td>
                        <td>480dlls</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn red darken-4 text-white" data-dismiss="modal">cerrar</button>
          </div>
        </div>
      </div>
    </div>       
  </div>



  <!-- End your project here-->

  <?PHP include("scripts.html"); ?>

</body>
</html>
