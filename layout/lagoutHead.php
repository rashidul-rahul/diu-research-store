<?php
include_once ('path.php');
//include_once ('lib/session.php')
include_once ('lib/session.php');
session::init();
if (session::get('login') == true){
    header('Location:  home.php');
    exit();
}
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DIU Research Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=APP_PATH?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=APP_PATH?>/css/mbcss.css" rel="stylesheet">

</head>