<!DOCTYPE html>
<html lang="en">

<?php
include_once ('layout/lagoutHead.php');
?>

<body>

<!-- Navigation -->
<?php
include_once ('layout/navlogut.php');
?>
<?php
include ('lib/user.php');

if($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST['createAccount'])){
    $user  = new User();
    if($user->userRegistration($_POST)){
        header('Location: index.php?msgg='.urlencode('Successfully Created Account'));
    }else {
        $msgr ='Account Not Created try Again';
    }
}else{
    $msgr = "Nothing Found";
}
?>

<!-- Header -->
<?php
//include_once ('layout/header.php');
?>
<!-- Page Content -->
<div class="container">
    <div style="height: 100px"></div>
    <div class="col-sm-4" style="margin-left: 350px">
        <h2><caption>User Sign Up</caption></h2>
        <form method="post">
            <?php
            if(isset($msgr)){
                echo $msgr;
            }
            ?>
            <div class="form-group">
                <select name="" id="" class="form-control">
                    <option value="" class="form-control">Student</option>
                    <option class="form-control">Teacher</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="You Full Name">
            </div>
            <div class="form-group">
                <label for="email">University Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@diu.edu.bd">
            </div>
            <div class="form-group">
                <label for="versityId">University Id</label>
                <input type="text" name="versityId" class="form-control" id="versityId" placeholder="000-00-0000">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="*****">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="createAccount">Create Account</button>
            </div>
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