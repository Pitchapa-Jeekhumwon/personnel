<?php 
    define('DB_SERVER','localhost');
    define('DB_USENAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','personnel');

    $link = mysqli_connect(DB_SERVER,DB_USENAME,DB_PASSWORD,DB_NAME);

    if($link==false){
        die("ERROR: Could not connect. ".mysqli_connect_error());
    }
?>