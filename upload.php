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

$category = new Category();
$categoryData = $category->getAllCategory();

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
    <form action="" method="post">
        <div class="form-group">
            <label for="categoryID">Select Category</label>
            <select class="form-control" name="categoryID" id="categoryID">
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
            <label for="description">Uplod Your Pdf file</label>
            <input type="file" class="form-control" name="paper" >
        </div>
        <input type="hidden" name="userId" value="<?=session::get('userId')?>">
        <input type="hidden" name="userId" value="<?=session::get('userId')?>">
        <div class="form-group">
            <button class="btn btn-success">Submit</button>
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