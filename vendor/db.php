<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'billcalc';


$db = mysqli_connect($host, $user, $password, $db_name);
try {
    if ($db) {
        // $_SESSION['message'] = "Database connecting OK";
        // unset($_SESSION['message']);
    } else {
        $_SESSION['message'] = "Database connecting FAILED";
        // unset($_SESSION['message']);
    }
} catch (\Throwable $th) {
    var_dump($th);
}
