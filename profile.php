<!DOCTYPE html>
<html lang="en">

<?php
include_once ('layout/head.php');
?>

<body>

<!-- Navigation -->
<?php
include_once ('layout/nav.php');
include_once ('lib/user.php');
$userData =  new User();
 $users = $userData->viewUserByID(session::get('userId'));
foreach ($users as $user);
?>

<!-- Header -->
<?php
//include_once ('layout/header.php');
?>
<!-- Page Content -->
<div class="container">
    <div class="col-md-10" >
        <h3>My Profile</h3>
        <form action="" class="form-group">
            <div class="form-control">
                <label for="name" class="col-sm-2 col-form-label"><strong>Name:</strong></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="name" value="<?=$user->fullName?>">
                </div>
                <label for="email" class="col-sm-2 col-form-label"><strong>Email:</strong></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="email" value="<?=$user->email?>">
                </div>
                <label for="versityId" class="col-sm-2 col-form-label"><strong>University Id:</strong></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="versityId" value="<?=$user->versityId?>">
                </div>
                <label for="date" class="col-sm-2 col-form-label"><strong>Created Date:</strong></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="date" value="<?=$user->createdAt?>">
                </div>
                <button class="btn btn-success" name="update">Edit/Update</button>
            </div>
        </form>
    </div>

</div>
<!-- /.container -->

<!-- Footer -->
<?php
include_once ('layout/footer.php');
include_once ('layout/script.php');

?>



</body>

</html>
