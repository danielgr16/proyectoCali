<!DOCTYPE html>
<html lang="en">

<?PHP include("head.html"); ?>

<body>
  <!-- Start your project here-->
  <?PHP include("nav.html"); ?>
  <div class="container cont-principal">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="card wow fadeInLeft card-nw" data-wow-delay="0.3s">
          <div class="card-body">
            <h4 class="titulo-card">
              Agregar producto
            </h3>
          <div class="md-form txt-id">
            <input type="number" id="form3" class="form-control">
            <label for="form3" class="active">Id</label>
          </div>
          <div class="md-form">
            <input type="text" id="form3" class="form-control">
            <label for="form3" class="active">Descripción</label>
          </div>
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
          <div class="md-form txt-50">
            <input type="number" id="form3" class="form-control">
            <label for="form3" class="active">Precio</label>
          </div>
          <div class="md-form txt-50">
            <input type="number" id="form3" class="form-control">
            <label for="form3" class="active">Cantidad</label>
          </div>

          <button type="submit" class="btn btn-warning" style="margin-top:20px;">Guardar</button>

        </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
<<<<<<< HEAD
        <div class="card wow fadeInLefMX
t" data-wow-delay="0.3s">
=======
        <div class="card wow fadeInRight card-nw" data-wow-delay="0.3s">
>>>>>>> 53632da7f6c7462a34a33a013fc9ca7951ff166e
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
  </div>
  <?PHP include("scripts.html"); ?>
  <!-- End your project here-->
</body>

</html>