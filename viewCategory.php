<!DOCTYPE html>
<html lang="en">

  <?php
  include_once ('layout/head.php');
  include_once ('lib/category.php');
  include_once ('lib/paper.php');

  if(isset($_GET['id'])){
      $categoryData = new Category();
      $categories = $categoryData->viewCategoryByID($_GET['id']);
  }
  $paperData = new paper();
  $papers = $paperData->viewPaperByCategory($_GET['id']);
  ?>

  <body>

    <!-- Navigation -->
    <?php
    include_once ('layout/nav.php');
    ?>
    <!-- Page Content -->
    <div style="height: 100px"></div>
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">
          <?php
          foreach ($categories as $category) {
          echo $category->name;
          ?>
      </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="home.php">Home</a>
            </li>
            <li class="breadcrumb-item active"><?= $category->name ?></li>
        </ol>
        <?php
        }
?>
      <!-- Project One -->
        <?php
        foreach ($papers as $paper) {
            ?>
            <div class="row">
                <div class="col-md-7">
                    <a href="paper.php?id=<?= $paper->id ?>">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="<?= $paper->paperImage ?>" alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3><?= $paper->title ?></h3>
                    <p><?= $paper->description ?></p>
                    <a class="btn btn-primary" href="paper.php?id=<?= $paper->id ?>">View Paper
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <!-- /.row -->

            <hr>
            <?php
        }
        ?>
      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
    include_once ('layout/footer.php');
    include_once ('layout/script.php');
    ?>

    <!-- Bootstrap core JavaScript -->


  </body>

</html>
