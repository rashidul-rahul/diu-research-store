<!DOCTYPE html>
<html lang="en">

<?php
include_once ('layout/head.php');
include_once ('lib/paper.php');
$papersObj = new paper();
$paperData = $papersObj->getAllPaperByUserId(session::get('userId'));
//var_dump($paperData);
?>

<body>

<!-- Navigation -->
<?php
include_once ('layout/nav.php');
?>

<!-- Header -->
<?php
//include_once ('layout/header.php');
?>
<!-- Page Content -->
<div class="container">
    <div class="" style="height: 70px;">
    </div>
    <h2 style="text-align: center">My Uploaded Papers</h2>
    <br><br>
    <div class="row">
        <?php
        foreach ($paperData as $paper) {
            ?>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="<?=$paper->paperImage ?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="paper.php?id=<?= $paper->id ?>"><?= $paper->title ?></a>
                        </h4>
                        <p class="card-text"><?= $paper->description ?></p>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div style="height: 20px"></div>
</div>

<?php
include_once ('layout/footer.php');
include_once ('layout/script.php');

?>



</body>

</html>
