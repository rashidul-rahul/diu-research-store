<?php
include ('../lib/category.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
?>
<?php
$categoryList = new Category();
$categories = $categoryList->getAllCategory();
//var_dump($users);
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
                <h1 class="page-header">All Category</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <?php
                    if(isset($_GET['msg'])){
                        echo "<span style='color: red'>".$_GET['msg']."</span>";
                    }
                    ?>
                    <div class="panel-heading">
                        List of Users/Reporters
                    </div>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Created Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($categories as $category){?>
                                <tr>
                                    <td><?=$category->name?></td>
                                    <td class="center"><?=$category->createdAt?></td>
                                    <td><a href="categoryEdit.php?id=<?=$category->id?>">EDIT</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php
include_once('adminScript.php');
?>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>

