<!DOCTYPE html>
<html lang="en">

<?PHP include("head.html"); ?>

<body>
  <!-- Start your project here-->
  <?PHP include("nav.html"); ?>
  <div class="back-color mt-5"></div>
  <div class="container cont-principal">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-7">
        <div class="card wow fadeInLeft card-nw" data-wow-delay="0.3s">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col">
                  <h4 class="titulo-card">
                  Agregar producto
                </h4>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <div class="md-form txt-id">
                    <input type="number" id="form3" class="form-control">
                    <label for="form3" class="active">Id</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="md-form">
                    <input type="text" id="form3" class="form-control">
                    <label for="form3" class="active">Descripción</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="dropdown">
                    <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Categoria
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Auriculares</a>
                      <a class="dropdown-item" href="#">Pantallas</a>
                      <a class="dropdown-item" href="#">Consolas</a>
                      <a class="dropdown-item" href="#">Electrodomesticos</a>
                      <a class="dropdown-item" href="#">Instrumentos musicales</a>
                      <a class="dropdown-item" href="#">Bocinas</a>
                      <a class="dropdown-item" href="#">Computadoras</a>
                      <a class="dropdown-item" href="#">Videojuegos</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="md-form">
                    <input type="text" id="form3" class="form-control">
                    <label for="form3" class="active">Marca</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="md-form">
                    <input type="text" id="form3" class="form-control">
                    <label for="form3" class="active">Modelo</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  <div class="md-form">
                    <input type="number" id="form3" class="form-control">
                    <label for="form3" class="active">Cantidad</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="md-form input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text md-addon">Precio $</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                      <span class="input-group-text md-addon">.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8"></div>
                <div class="col-4">
                  <a href="index.php"><button type="submit" class="btn mdb-color lighten-1 text-white" style="margin-top:20px; width: 100%;">Guardar</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
        <div class="card wow fadeInRight card-nw" data-wow-delay="0.3s">
            <div class="card-body">
        <div class="md-form">
            <h6>Foto del Producto <i class="fa fa-camera" aria-hidden="true"></i></h6>
            <img src="" alt="">
            <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
          </div>
        </div>
        </div>
      </div>
    </div>

    <!-- TOAST -->
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="..." class="rounded mr-2" alt="...">
        <strong class="mr-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
        Hello, world! This is a toast message.
      </div>
    </div>
  </div>
  
  <?PHP include("scripts.html"); ?>
  <!-- End your project here-->
</body>

</html>