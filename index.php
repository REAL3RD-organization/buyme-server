<?php
/**
 * Application Entry Point.
 * @since 11.2015
 */


    // macro for directory separator.
    define("DS", DIRECTORY_SEPARATOR);


	$gb['route'] = 0;;

	// load the presets.
	require "src".DS."system".DS."router.php";
	require "src".DS."system".DS."database.php";


	route();






