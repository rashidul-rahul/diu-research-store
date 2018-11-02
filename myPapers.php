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
    <div class="" style="height: 50px;">
    </div>
    <h2 class="my-4">My Papers</h2>
    <!-- Marketing Icons Section -->
    <div class="row">
        <?php
        if(empty($paperData)){
            echo '<div class="alert alert-danger" style="margin-top: 50px; margin-bottom: 50px"><h1>You Have No Uploaded Paper</h1></br></br><button class="btn btn-success"><a href="upload.php" style="text-decoration: none; color: black">Upload Your Paper</a></button></div>';
        }
        foreach ($paperData as  $paper) {
            ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header"><?=$paper->title?></h4>
                    <div class="card-body">
                        <p class="card-text"><?=$paper->description?></p>
                    </div>
                    <div class="card-footer">
                        <a href="paper.php?id=<?=$paper->id?>" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php
include_once ('layout/footer.php');
include_once ('layout/script.php');

?>



</body>

</html>
