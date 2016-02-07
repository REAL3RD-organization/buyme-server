<?php
/**
 * Date: 10/24/2015 024
 */


/**
 * Route method
 */

function route() {
    global $gb;
    $uri = explode("/", $_SERVER['REQUEST_URI']);

    if($uri[1] == "") {
        $gb["route"] = "home";
    }

    else {
        $gb["route"] = $uri[1];
    }
//    var_dump($gb['route']);



    // default call.
    require "src".DS."view".DS."template".DS."tmpl_home.php";
}

/**
 * redirect
 * redirect to given url
 */
function redirect($url) {
    header("Location: {$url}");
    $script = "<script>location.href='{$url}';</script>";
    die($script);
}
