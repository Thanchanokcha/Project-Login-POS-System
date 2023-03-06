<?php

    $host = "localhost";
    $db_username = "root";
    $db_password = ""; 
    $db_name = "system";

    $con = mysqli_connect($host, $db_username, $db_password, $db_name)
    or die("Error " . mysqli_error($con));
    date_default_timezone_set('Asia/Bangkok');
?>