<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "STSTRV";

    $connect= mysqli_connect($host,$username,$password,$database);

    if(!$connect)
    {
        die("Database connection failed"  .mysqli_error($connect));
    }

    else
    {
    //    echo "Database connection success";
    }


?>