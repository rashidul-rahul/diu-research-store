<!DOCTYPE html>
<html lang="en">

<?php
include_once ('layout/head.php');
include_once ('lib/paper.php');
include_once ('lib/user.php');
$paperData =  new paper();
$papers = $paperData->viewPaperById($_GET['id']);
foreach ($papers as $paper){
    echo $paper->title;
}
foreach ($papers as $paper){
}

//for user
$userData =  new User();
$users = $userData->viewUserByID($paper->userId);
foreach ($users as $user){
}
//var_dump($user)
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
    <div style="margin-top:100px;"></div>
        <div style="text-align: center">
            <h3><?=$paper->title?></h3>
        </div>
    <div style="text-align: center">
        <b>Object: <?=$paper->researchObject?></b>
    </div>

        <div style="text-align: center">
            <p>Description: <?=$paper->description?></p>
        </div>
        <embed src="<?=$paper->paper?>" type="application/pdf" width="100%" height="800px" />
    <br>
    <strong>author:</strong> <?=$user->fullName?><br>
    <strong>University Id:</strong> <?=$user->versityId?><br>
    <br>
    <?php
    if(session::get('versityId')  == $user->versityId) {
        ?>
        <form action="" method="post">
            <button type="submit" class="btn btn-success" name="editPaper">Edit Paper</button>
            <button type="submit" class="btn btn-danger" name="delete">Delete Paper</button>
        </form>
        <?php
    }
    ?>
<div class="col-sm-10">
    <h2>Comments</h2>
    <hr>
    <form action="" method="post">
        <label for="comment">Write Your Comments</label>
        <textarea class="form-control" id="comment" name="comment"></textarea>
        <button class="btn btn-success">Submit</button>
    </form>
</div>

</div>
<div style="margin-top: 30px"></div>
<!-- /.container -->

<!-- Footer -->
<?php
include_once ('layout/footer.php');
include_once ('layout/script.php');

?>



</body>

</html>
