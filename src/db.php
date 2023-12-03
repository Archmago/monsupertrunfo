<?php

    $host = 'db';
    $user = $_ENV['MYSQL_USER'];
    $pass = $_ENV['MYSQL_PASSWORD'];
    $mydatabase = $_ENV['MY_DATABASE'];

    $conn = new mysqli($host, $user, $pass, $mydatabase);

?>