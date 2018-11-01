<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
include ('../lib/category.php');
?>
<?php
if(isset($_GET['id'])){
    $categoryData = new Category();
    $categories = $categoryData->viewCategoryByID($_GET['id']);
}
foreach ($categories as $category){

}
?>
<?php

?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updateCategory'])){
    if($categoryData->upadateCategory($_POST, $category->id)){
        header("Location: allCategory.php?msg=".urlencode('SuccessFully Update'));
        exit();
    }else{
        header("Location: allCategory.php?msg=".urlencode('Update Failed'));
        exit();
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deleteCategory'])){
    if($categoryData->deleteCategory($_GET['id'])){
        header("Location: allCategory.php?msg=".urlencode('SuccessFully Delete'));
        exit();
    }else{
        return "Sorry";
    }

}
?>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php
    include_once ('adminNav.php');
    ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit User Information</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php
                        if(isset($value)){
                            echo $value;
                        }
                        ?>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="" method="post">
                                    <div class="form-group">
                                        <label  for="name">Full Name</label>
                                        <input id="name"  name="name" type="text" class="form-control" value="<?=$category->name?>" >
                                    </div>
                                    <button type="submit" name="updateCategory" class="btn btn-default">Submit</button>
                                    <button type="submit" name="deleteCategory" class="btn btn-default">Delete This Category</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php
include_once ("adminScript.php");
?>

</body>

</html>
