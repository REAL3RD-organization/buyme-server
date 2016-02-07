<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/6/2016 006
 * Time: 2:34 PM
 */

global $gb;
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/css/user.css" type="text/css" />
    <link rel="stylesheet" href="/css/login.css" type="text/css" />

    <!-- External JavaScripts
        ============================================= -->
    <script src="/js/jquery-1.12.0.min.js"></script>

    <!-- Document Title
        ============================================= -->
    <title>buyme</title>
</head>

<body id="body" class="">
<div id="doc">

    <div id="gnav">
        <div class="find">find</div>
        <div class="login">로그인</div>
    </div>
    <?php
        if($gb["route"] == "home") {
            require_once "src".DS."view".DS."content".DS."brand.php";
        }
    ?>

    <?php
        if($gb["route"] == "login") {
            require_once "src".DS."view".DS."content".DS."login.php";
        }
    ?>

    <?php
    if($gb["route"] == "register") {
        require_once "src".DS."view".DS."content".DS."register.php";
    }
    ?>

    <?php
        if($gb["route"] == "home") {
            require_once "src".DS."view".DS."content".DS."page.php";
        }
    ?>

    <?php
    if($gb["route"] == "submit") {
        require_once "src".DS."view".DS."content".DS."submit.php";
    }
    ?>


    </div>

</div>
</body>
</html>