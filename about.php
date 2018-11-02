<!DOCTYPE html>
<html lang="en">

  <?php
  include_once ('path.php');
  include_once (ROOTPATH.'/layout/head.php');
  ?>

  <body>

    <!-- Navigation -->
    <?php
    include_once ('layout/nav.php');
    ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">About
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="home.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
        </div>
        <div class="col-lg-6">
          <h2>About DIU Research  Site</h2>
          <p>This site is for Daffodil International University Research Papers. You Can Find all Department's
              Published Research Paper Here. You Can view and Download All The papers from this website if  you are a
          registered user.</p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2>Our Team</h2>

      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title">Sheak Rashed Haider Noori</h4>
              <h6 class="card-subtitle mb-2 text-muted">Instructor</h6>
              <p class="card-text">Associate Professor Department Of  CSE</p>
            </div>
            <div class="card-footer">
              <a href="#">mail@diu.edu.bd</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title">Hasibul Islam</h4>
              <h6 class="card-subtitle mb-2 text-muted">Designer</h6>
              <p class="card-text">Id: 141-15-3299 Department of CSE</p>
            </div>
            <div class="card-footer">
              <a href="#">hasibul3299@diu.edu.bd</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title">Rashidul Islam  Rahul</h4>
              <h6 class="card-subtitle mb-2 text-muted">Developer</h6>
              <p class="card-text">Id: 141-15-3217 Department of CSE</p>
            </div>
            <div class="card-footer">
              <a href="#">rahul3217@diu.edu.bd</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
    include_once ('layout/footer.php');
    include_once ('layout/script.php');
    ?>

  </body>

</html>
