<?php
include_once ('config/path.php');
include_once ('lib/session.php');
session::init();
if(!session::get('login')){
    header('Location: index.php?msgg='.urlencode('You Must login'));
}
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DIU Research Papers</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=APP_PATH?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=APP_PATH?>/css/mbcss.css" rel="stylesheet">

</head>
