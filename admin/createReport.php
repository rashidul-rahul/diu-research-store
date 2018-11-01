<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
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
                <h1 class="page-header">Create Report</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Complete All Boxes
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Text Input with Placeholder</label>
                                        <input class="form-control" placeholder="Enter text">
                                    </div>
                                    <div class="form-group">
                                        <label>Static Control</label>
                                        <p class="form-control-static">email@example.com</p>
                                    </div>
                                    <div class="form-group">
                                        <label>File input</label>
                                        <input type="file">
                                    </div>
                                    <div class="form-group">
                                        <label>Text area</label>
                                        <textarea style="height: 600px" class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->

                            <!-- /.col-lg-6 (nested) -->
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
include_once ('adminScript.php');
?>

</body>

</html>
