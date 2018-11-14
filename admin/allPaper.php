<?php
include_once ('../path.php');
include (ROOTPATH.'/lib/paper.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
?>
<?php
$paperData = new paper();
$papers = $paperData->viewAllLatestPaper();
//var_dump($users);
$serial = 1;
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
                <h1 class="page-header">All Papers</h1>
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
                        List of All Papers
                    </div>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Title</th>
                                <th>Research Object</th>
                                <th>Description</th>
                                <th>Registered Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($papers as $paper){?>
                                <tr>
                                    <td><?=$serial?></td>
                                    <td><?=$paper->title?></td>
                                    <td><?=$paper->researchObject?></td>
                                    <td class="center"><?=$paper->description?></td>
                                    <td class="center"><?=$paper->createdAt?></td>
                                    <td><a href="paperDelete.php?id=<?=$paper->id?>">Delete</a></td>
                                </tr>
                                <?php
                                $serial++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
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

