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

    <div class="card">
      <div class="card-body">
        <div class="card-title">
          Registrar nuevo producto
        </div>
        <div class="card-text">
          <div class="md-form">
          <input type="text" id="txtbxId" class="form-control">
          <label for="inputMDEx">Id</label>
        </div>
        <div class="md-form">
          <input type="text" id="txtbxDescripcion" class="form-control">
          <label for="inputMDEx">Descripcion</label>
        </div>

        <div class="md-form input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text md-addon">Precio $</span>
          </div>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <div class="input-group-append">
            <span class="input-group-text md-addon">.00</span>
          </div>
        </div>
        <div class="md-form">
          <input type="number" id="txtbx" class="form-control">
          <label for="inputMDEx">Cantidad</label>
        </div>
        </div>
      </div>
    </div>




  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
