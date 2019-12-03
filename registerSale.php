<!DOCTYPE html>
<html lang="en">
<?PHP include("head.html"); ?>

<body>

  <!-- Start your project here-->
  <?PHP include("nav.html"); ?>
  <div class="back-color mt-5"></div>
  <div class="container cont-principal">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-10 offset-xl-1">
        <div class="card wow fadeInLeft card-nw" data-wow-delay="0.3s">

          <div class="jumbotron" id="vista1">
            <h1 class="display-3">Generador de venta</h1>
            <p class="lead">Para tener acceso a generar una venta, necesitas estar registrador como vendedor</p>
            <hr class="my-2">
            <p>En caso de olvidar tus credenciales favor de comunicarse con soporte Al : 01 800 999 000</p>

            <p class="lead">
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
                Autenticarme como Vendedor</button>
            </p>
          </div>
          <div class="jumbotron" id="vista2">
            <section class="mb-4">

          
              <!--Section description-->
              <p class="text-center w-responsive mx-auto mb-5">Click en crear venta para comenzar a escanear los productos</p>
             

              <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                  <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control">
                          <label for="name" class="">Nombre</label>
                        </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control">
                          <label for="email" class="">Marca</label>
                        </div>
                      </div>
                      <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="md-form mb-0">
                          <input type="text" id="subject" name="subject" class="form-control">
                          <label for="subject" class="">Modelo</label>
                        </div>
                      </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                      <!--Grid column-->
                      <div class="col-md-12">

                        <div class="md-form">
                          <textarea type="text" id="message" name="message" rows="2"
                            class="form-control md-textarea"></textarea>
                          <label for="message">Dimensiones</label>
                        </div>

                      </div>
                    </div>
                    <!--Grid row-->

                  </form>

                  <div class="text-center text-md-left">
                    <a class="btn btn-primary" id="iniciarVenta" >Crear Venta</a>
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Agregar</a>
                  </div>
                  
                  <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3">
                <button type="submit" id="timbre" class="button">Marcador Activado</button>
                <hr>
                 <aside class="bg-dark text-justify">
                  <h1 class="display-4 text-success">$</h1>
                 </aside>
                </div>
                <!--Grid column-->

              </div>

            </section>


            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Autenticación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <input type="text" placeholder="Usuario"> <input type="text" placeholder="Contrasena">
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
          <button type="button" id="target" class="btn btn-primary" data-dismiss="modal">Enviar</button>
        </div>
      </div>
    </div>
  </div>


  <!-- End your project here-->
  <?PHP include("scripts.html"); ?>

</body>

</html>
