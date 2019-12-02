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
          <div class="card-body">
            <div class="container p-0">
              <div class="row">
                <div class="col-7">
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <h4 class="titulo-card">Crear usuario</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-8">
                        <div class="md-form txt-id">
                          <input type="text" id="form3" class="form-control">
                          <label for="form3" class="active">Id</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-8">
                        <div class="md-form">
                          <input type="password" id="form3" class="form-control">
                          <label for="form3" class="active">Contraseña</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="dropdown">
                          <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Selecciona un rol
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Administrador</a>
                            <a class="dropdown-item" href="#">Vendedor</a>
                            <a class="dropdown-item" href="#">Almacenista</a>
                            <a class="dropdown-item" href="#">Capturista</a>
                            <a class="dropdown-item" href="#">Contador</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col">
                        <h4>Permisos</h4>                        
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Administrador (Todos los permisos)</label>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Agregar usuarios</label>
                        </div>   
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                          <label class="custom-control-label" for="defaultUnchecked">Ver almacen</label>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col">
                      <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Capturar productos</label>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col">
                      <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Registrar ventas</label>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col">
                      <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Cambios en el inventario</label>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col">
                      <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Cambios de precio en las ventas</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="md-form">
                    <h6>Foto del Producto <i class="fa fa-camera" aria-hidden="true"></i></h6>
                    <img src="" alt="">
                    <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                  </div>
                </div>
              </div>
            </div>
              <div class="col-3 offset-9">
                <a href="index.php"><button type="submit" class="btn mdb-color lighten-1 text-white" style="margin-top:20px; width: 100%;">Guardar</button></a>
              </div>
          </div>
        </div>
        
  </div>

  <!-- End your project here-->
  <?PHP include("scripts.html"); ?>
</body>

</html>
