<!DOCTYPE html>
<html lang="en">
<?PHP include("head.html"); ?>
<body>

  <!-- Start your project here-->
  <?PHP include("nav.html"); ?>

  <div class="back-color mt-5"></div>
  <div class="">
    <a href="addProduct.php">
      <button class="fab shadow-md"><i class="material-icons fab-ico">add</i></button>
    </a>
  </div>
  <div class="container cont-principal">
    <div class="row">
      <div class="col-12">
        <div class="card wow fadeInLeft card-nw" data-wow-delay="0.3s">
          <div class="card-body">
            <div class="container p-0">
              <div class="row">
                <div class="col">
                  <h4 class="titulo-card">
                    Todos los productos
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
                        <th scope="col">Descripcion</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Precio</th>
                        <th scope="col">U/M</th>
                        <th scope="col">Cantidad</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>Audifonos Inalambricos</td>
                        <td>Skullcandy</td>
                        <td>SK4433</td>
                        <td>Electronicos</td>
                        <td>100</td>
                        <td>dlls</td>
                        <td>35</td>
                      </tr>
                      <tr>
                        <td>002</td>
                        <td>Disco Duro 500GB</td>
                        <td>Samsung</td>
                        <td>SM546434</td>
                        <td>Comp. de computadora</td>
                        <td>900</td>
                        <td>pesos</td>
                        <td>50</td>
                      </tr>
                      <tr>
                        <td>003</td>
                        <td>Disco Duro 1TB</td>
                        <td>Samsung</td>
                        <td>SM546535</td>
                        <td>Comp. de computadora</td>
                        <td>1600</td>
                        <td>pesos</td>
                        <td>24</td>
                      </tr>
                      <tr>
                        <td>004</td>
                        <td>Pantalla 37"</td>
                        <td>Visio</td>
                        <td>df4443</td>
                        <td>Pantallas</td>
                        <td>12,000</td>
                        <td>pesos</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>005</td>
                        <td>Guitarra electrica</td>
                        <td>Fender</td>
                        <td>Stratocaster</td>
                        <td>Instrumentos musicales</td>
                        <td>38,000</td>
                        <td>pesos</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>006</td>
                        <td>Bocinas Bluetooth</td>
                        <td>Sony</td>
                        <td>S344c</td>
                        <td>Bocinas</td>
                        <td>19</td>
                        <td>dlls</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <td>007</td>
                        <td>Laptop 17" 1TB</td>
                        <td>HP</td>
                        <td>AW50032332</td>
                        <td>Computadoras</td>
                        <td>400</td>
                        <td>dlls</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <td>008</td>
                        <td>Nintendo Switch</td>
                        <td>Nintendo</td>
                        <td>Switch</td>
                        <td>Videojuegos</td>
                        <td>300</td>
                        <td>dlls</td>
                        <td>58</td>
                      </tr>
                      <tr>
                        <td>009</td>
                        <td>Bocina portatil</td>
                        <td>JBL</td>
                        <td>J32432ssa</td>
                        <td>Bocinas</td>
                        <td>100</td>
                        <td>dlls</td>
                        <td>19</td>
                      </tr>
                      <tr>
                        <td>010</td>
                        <td>Teclado Electronico</td>
                        <td>Yamaha</td>
                        <td>JX300</td>
                        <td>Instrumentos</td>
                        <td>150</td>
                        <td>dlls</td>
                        <td>40</td>
                      </tr>
                      <tr>
                        <td>011</td>
                        <td>Mouse Inalambrico</td>
                        <td>Microsoft</td>
                        <td>L400</td>
                        <td>Comp. de computadora</td>
                        <td>75</td>
                        <td>dlls</td>
                        <td>20</td>
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
  </div>


            
  <!-- End your project here-->
  <?PHP include("scripts.html"); ?>
 
</body>

</html>
