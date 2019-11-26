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
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-1"></div>
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-10">
        <div class="card wow fadeInLeft card-nw" data-wow-delay="0.3s">
          <div class="card-body">
            <h4 class="titulo-card">
              Todos los productos
            </h4>

            <table class="table table-hover">
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
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- End your project here-->
  <?PHP include("scripts.html"); ?>
 
</body>

</html>
