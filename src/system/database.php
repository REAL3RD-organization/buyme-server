<?php
/**
 * Date: 10/12/2015 012
 */



//    $dsn = 'mysql:dbname=buyme;host=localhost;port=3306';
//    $user = 'root';
//    $pwd = 'root';
//
//    $pdo = new PDO($dsn, $user, $pwd);



/* Connect to an ODBC database using driver invocation */
$dsn = 'mysql:dbname=buyme;host=localhost';
$server = "localhost";
$db = "buyme";
$user = 'root';
$pwd = 'root';




try {
    $pdo = new PDO('mysql:host=' . $server . ';dbname=' . $db . ';charset=UTF8', $user, $pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}