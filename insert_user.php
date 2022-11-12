<?php
include_once("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];


$sql = "INSERT INTO infolks (id, name, lastname, age) VALUES (NULL,'Prueba','Prueba2',23)";
$query = mysqli_query($con, $sql);

if($query == TRUE){
    Header("Location: crudserver.php");
}

?>