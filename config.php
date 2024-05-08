<?php
    $host = "localhost:3307";
    $user = "root";                     
    $pass = "root";                                  
    $db = "movietheatredb";
    $port = 3306;
     $con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysqli_error());
?>