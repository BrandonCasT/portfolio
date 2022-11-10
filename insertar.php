<?php
include("conexion.php");
$conn=conectar();

$name=$_POST['name'];
$lastname=$_POST['lastname'];
$age=$_POST['age'];


$sql="INSERT INTO infolks VALUES('$name','$lastname','$age')";
$query= mysqli_query($conn,$sql);

if($query){
    Header("Location: crudserver.php");
}else {
}
?>