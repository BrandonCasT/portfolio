<?php

function conectar(){

    $servername = "localhost";
    $username = "ernesto";
    $password = "satan666";
    $database = "seravi";

    $conn = mysqli_connect($servername, $username, $password, $database);
    $mysqli_select_db($conn, $database);

    return $conn;
}

?>