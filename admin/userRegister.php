<!DOCTYPE html>
<html lang="en">

<?php
include_once ('adminHead.php');
include ('../lib/User.php');
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['userResister'])){
    $userReg = new User();
    if($userReg->userRegistration($_POST)){
        header("Location: allUser.php?msg=".urlencode('SuccessFully Add User'));
        exit();
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
                <h1 class="page-header">User Registration</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       Create Account For Reporters
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <?php
                                if(isset($value)){
                                    echo $value ;
                                }
                                ?>
                                <form role="form" action="userRegister.php" method="post">

                                    <div class="form-group">
                                        <label  for="name">Full Name</label>
                                        <input id="name"  name="name" type="text" class="form-control" placeholder="Enter Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" class="form-control" placeholder="Eamil  Address" type="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Contact Number</label>
                                        <input id="phone" name="phone" type="text" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input  id="address" name="address" class="form-control">
                                        <p class="help-block">Example:123, Road-2, Gulsan, Dhaka-123</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" class="form-control" placeholder="*******" type="password" name="password">
                                    </div>
<!--                                    <div class="form-group">-->
<!--                                        <label>Static Control</label>-->
<!--                                        <p class="form-control-static">email@example.com</p>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>File input</label>-->
<!--                                        <input type="file">-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Text area</label>-->
<!--                                        <textarea class="form-control" rows="3"></textarea>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Checkboxes</label>-->
<!--                                        <div class="checkbox">-->
<!--                                            <label>-->
<!--                                                <input type="checkbox" value="">Checkbox 1-->
<!--                                            </label>-->
<!--                                        </div>-->
<!--                                        <div class="checkbox">-->
<!--                                            <label>-->
<!--                                                <input type="checkbox" value="">Checkbox 2-->
<!--                                            </label>-->
<!--                                        </div>-->
<!--                                        <div class="checkbox">-->
<!--                                            <label>-->
<!--                                                <input type="checkbox" value="">Checkbox 3-->
<!--                                            </label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Inline Checkboxes</label>-->
<!--                                        <label class="checkbox-inline">-->
<!--                                            <input type="checkbox">1-->
<!--                                        </label>-->
<!--                                        <label class="checkbox-inline">-->
<!--                                            <input type="checkbox">2-->
<!--                                        </label>-->
<!--                                        <label class="checkbox-inline">-->
<!--                                            <input type="checkbox">3-->
<!--                                        </label>-->
<!--                                    </div>-->
                                    <button type="submit" name="userResister" class="btn btn-default">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
<!--                            <div class="col-lg-6">-->
<!--                                <h1>Disabled Form States</h1>-->
<!--                                <form role="form">-->
<!--                                    <fieldset disabled>-->
<!--                                        <div class="form-group">-->
<!--                                            <label for="disabledSelect">Disabled input</label>-->
<!--                                            <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label for="disabledSelect">Disabled select menu</label>-->
<!--                                            <select id="disabledSelect" class="form-control">-->
<!--                                                <option>Disabled select</option>-->
<!--                                            </select>-->
<!--                                        </div>-->
<!--                                        <div class="checkbox">-->
<!--                                            <label>-->
<!--                                                <input type="checkbox">Disabled Checkbox-->
<!--                                            </label>-->
<!--                                        </div>-->
<!--                                        <button type="submit" class="btn btn-primary">Disabled Button</button>-->
<!--                                    </fieldset>-->
<!--                                </form>-->
<!--<!--                                <h1>Form Validation States</h1>-->
<!--<!--                                <form role="form">-->
<!--<!--                                    <div class="form-group has-success">-->
<!--<!--                                        <label class="control-label" for="inputSuccess">Input with success</label>-->
<!--<!--                                        <input type="text" class="form-control" id="inputSuccess">-->
<!--<!--                                    </div>-->
<!--<!--                                    <div class="form-group has-warning">-->
<!--<!--                                        <label class="control-label" for="inputWarning">Input with warning</label>-->
<!--<!--                                        <input type="text" class="form-control" id="inputWarning">-->
<!--<!--                                    </div>-->
<!--<!--                                    <div class="form-group has-error">-->
<!--<!--                                        <label class="control-label" for="inputError">Input with error</label>-->
<!--<!--                                        <input type="text" class="form-control" id="inputError">-->
<!--<!--                                    </div>-->
<!--<!--                                </form>-->
<!--                                <h1>Input Groups</h1>-->
<!--                                <form role="form">-->
<!--                                    <div class="form-group input-group">-->
<!--                                        <span class="input-group-addon">@</span>-->
<!--                                        <input type="text" class="form-control" placeholder="Username">-->
<!--                                    </div>-->
<!--                                    <div class="form-group input-group">-->
<!--                                        <input type="text" class="form-control">-->
<!--                                        <span class="input-group-addon">.00</span>-->
<!--                                    </div>-->
<!--                                    <div class="form-group input-group">-->
<!--                                            <span class="input-group-addon"><i class="fa fa-eur"></i>-->
<!--                                            </span>-->
<!--                                        <input type="text" class="form-control" placeholder="Font Awesome Icon">-->
<!--                                    </div>-->
<!--                                    <div class="form-group input-group">-->
<!--                                        <span class="input-group-addon">$</span>-->
<!--                                        <input type="text" class="form-control">-->
<!--                                        <span class="input-group-addon">.00</span>-->
<!--                                    </div>-->
<!--                                    <div class="form-group input-group">-->
<!--                                        <input type="text" class="form-control">-->
<!--                                        <span class="input-group-btn">-->
<!--                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>-->
<!--                                                </button>-->
<!--                                            </span>-->
<!--                                    </div>-->
<!--                                </form>-->
<!--                            </div>-->
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
include_once ("adminScript.php");
?>

</body>

</html>
