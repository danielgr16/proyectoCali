<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Agregar producto</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- Start your project here-->
  <?PHP include("nav.html"); ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="container bg-white rounded shadow-lg">
          <div class="form-group" style="padding:15px;">
            <h6>Agregar Producto <i class="fa fa-plus-circle" aria-hidden="true"></i></h6>
            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Nombre</small>
            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
            
            <button type="submit" class="btn btn-warning btn-block" style="margin-top:20px;">Guardar</button>
          </div>
        </div>

      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="container bg-white rounded shadow-lg">
          <div class="form-group" style="padding:15px;">
            <h6>Foto del Producto <i class="fa fa-camera" aria-hidden="true"></i></h6>
            <img src="" alt="">
            <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End your project here-->
</body>

</html>