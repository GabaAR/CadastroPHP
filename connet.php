<?php

    $servername = "localhost";
    $username   = "root";
    $password   = "root";
    $database   = "lojainformatica";

    $connet = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($connet, "utf8");


?>

