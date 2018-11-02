<!DOCTYPE html>
<html lang="en">

<?php
include_once ('layout/lagoutHead.php');
include_once ('lib/user.php');
include_once ('lib/session.php');
?>
<?php
if($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST['userLogin'])){
    $user  = new User();
    $userData = $user->userLogin($_POST);
    if($userData == false){
        $note = '<div class="alert alert-danger">Invalid User Name Or Password</div>';
    }else{
        foreach ($userData as $data);
        session::init();
        session::set('login', 'true');
        session::set('userId', $data->id);
        session::set('userName', $data->fullName);
        session::set('versityId', $data->versityId);
        session::set('logInMsg', '<div class="alert alert-success">SuccessFully Logged In</div>');
        header('Location: home.php');
    }

}
?>

<body>

<!-- Navigation -->
<?php
include_once ('layout/navlogut.php');
?>

<!-- Header -->

<!-- Page Content -->
<div class="container">
    <div style="height: 100px"></div>
    <div class="col-sm-4" style="margin-left: 350px">
        <div class="form-group" style="color: green">
            <?php
            if(isset($_GET['msgg'])){
                echo $_GET['msgg'];
            }
            ?>
        </div>
        <div class="form-group" style="color: red">
            <?php
            if(isset($msgr)){
                echo $msgr;
            }
            ?>
        </div>
        <?php
        if(isset($note)){
            echo $note;
        }
        ?>
        <h2><caption>User Login</caption></h2>
        <form action="" class="form-group" method="post" >
            <select class="form-control" name="choice" id="">
                <option value="">Student</option>
                <option value="">Teacher</option>
            </select>
            <div  class="form-control">
                <input type="text" name="versityId" id="versityId" class="form-control" placeholder="University Id">
            </div>
            <div class="form-control"><input type="password" name="password" class="form-control" placeholder="Password"></div>
            <button class="btn btn-success" name="userLogin">login</button>
            Or You Can <a href="signup.php">Create Acccount</a>
        </form>
    </div>
    <div class="" style="height: 155px"></div>
</div>
<!-- /.container -->

<!-- Footer -->
<?php
include_once ('layout/footer.php');
include_once ('layout/script.php');

?>



</body>

</html>