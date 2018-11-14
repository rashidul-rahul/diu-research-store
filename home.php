<!DOCTYPE html>
<html lang="en">

 <?php
include_once ('layout/head.php');
include_once ('lib/paper.php');
$paperData = new paper();
$latestPapers = $paperData->viewAllLatestPaper();

 ?>
  <body>

    <!-- Navigation -->
    <?php
    include_once ('layout/nav.php');
    ?>

    <!-- Header -->
    <?php
//    include_once ('layout/header.php');
    ?>
    <!-- Page Content -->
    <div class="container">
        <div class="" style="height: 50px;">
        </div>
        <?php
        $data =  session::get('logInMsg');
        if (isset($data)){
            echo $data;
            session::setNull("logInMsg");
        }
        ?>
        <div style="text-align: center"><img src="upload/image/zi7JTbpT_400x400.jpg" alt=""></div>
        <h2 class="my-4" style="text-align: center">Welcome to Daffodil International  Research Portal</h2>
      <!-- Marketing Icons Section -->
        <br>
        <div style="text-align: center;margin-left: 330px" class="col-sm-6">
            <form class="form-inline">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <br><br>

      <!-- Portfolio Section -->
      <h2 style="text-align: center">Latest Paper</h2><br>
      <div class="row">
          <div class="row">
              <?php
              foreach ($latestPapers as $latestPaper) {
                  ?>
                  <div class="col-lg-4 col-sm-6 portfolio-item">
                      <div class="card h-100">
                          <a href="#"><img class="card-img-top" src="<?=$latestPaper->paperImage ?>" alt=""></a>
                          <div class="card-body">
                              <h4 class="card-title">
                                  <a href="paper.php?id=<?= $latestPaper->id ?>"><?= $latestPaper->title ?></a>
                              </h4>
                              <p class="card-text"><?= $latestPaper->description ?></p>
                          </div>
                      </div>
                  </div>
                  <?php
              }
              ?>
          </div>
      </div>

    </div>


    <div style="height: 30px"></div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
    include_once ('layout/footer.php');
    include_once ('layout/script.php');

    ?>



  </body>

</html>
