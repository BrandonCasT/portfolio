<?php

function connection(){
    $host = "localhost";
    $user = "ernesto";
    $pass = "satan666";
    $bd = "seravi";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}

?>