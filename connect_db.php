<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "db_high_school";
    
    $connect = mysqli_connect($server,$user,$password,$db_name);
    mysqli_set_charset($connect,"utf8");

?>