<!DOCTYPE html>
<html lang="en">
<?PHP include("head.html"); ?>
<body>

  <!-- Start your project here-->
  <?PHP include("nav.html"); ?>

  <div class="back-color"></div>
  <div class="container cont-principal">
  <a class="btn-floating btn-lg btn-default fab"><i class="fas fa-plus fab-ico"></i></a>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl"></div>
      <div class="col-12">
        <div class="card wow fadeInLeft card-nw" data-wow-delay="0.3s">
          <div class="card-body">
            <h4 class="titulo-card">
              Todos los productos
            </h4>

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
            <!-- <table class="table table-hover">
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
                  <th scope="row">0001</th>
                  <td>Audirculares Inalambricos</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">0002</th>
                  <td>Disco duro 500GB</td>
                  <td>Samsung</td>
                  <td>SM34902</td>
                  <td>900</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">0003</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">0004</th>
                  <td></td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">0005</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">0006</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">0007</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">0008</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">0009</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> -->


  <!-- End your project here-->
  <?PHP include("scripts.html"); ?>
 
</body>

</html>
