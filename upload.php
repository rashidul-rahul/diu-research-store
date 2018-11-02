<!DOCTYPE html>
<html lang="en">

<?php
include_once ('layout/head.php');
?>

<body>

<!-- Navigation -->
<?php
include_once ('layout/nav.php');
include_once ('lib/category.php');
include_once ('lib/paper.php');

$category = new Category();
$categoryData = $category->getAllCategory();

//form
if($_SERVER['REQUEST_METHOD'] == 'POST' &&  isset($_POST['uploadPaper'])){
    $_FILES['paper']['name'] = str_replace(' ', '_', $_FILES['paper']['name']);
    $targetFile = 'upload/pdf/'.basename($_FILES['paper']['name']);
    if(move_uploaded_file($_FILES['paper']['tmp_name'], $targetFile)){
        $paper =  new paper();
        if($paper->createPaper($_POST, $targetFile)){
            echo 'successfully Upload';
        }
    }else{
        echo 'not ok';
    }



}
?>

<!-- Header -->
<?php
//include_once ('layout/header.php');
?>
<!-- Page Content -->
<div class="container">
    <div class="col-md-5" style="margin-top: 50px"></div>
    <h3>Upload Your Paper:</h3>
    <div class="col-md-5" style="margin-left: 250px">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="categoryId">Select Category</label>
            <select class="form-control" name="categoryId" id="categoryId">
                <?php
                foreach ($categoryData as $data) { ?>
                    <option value="<?= $data->id ?>"><?= $data->name ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" placeholder="Title" id="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Your Description......"></textarea>
        </div>
        <div class="form-group">
            <label for="paper">Uplod Your Pdf file</label>
            <input type="file" class="form-control" name="paper"  id="paper">
        </div>
        <input type="hidden" name="userId" value="<?=session::get('userId')?>">
        <div class="form-group">
            <button name="uploadPaper" class="btn btn-success">Submit</button>
        </div>
    </form>
    </div>
    <div class="col-md-5" style="margin-top: 50px"></div>
</div>
<!-- /.container -->

<!-- Footer -->
<?php
include_once ('layout/footer.php');
include_once ('layout/script.php');

?>



</body>

</html>