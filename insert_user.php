<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];


$sql = "INSERT INTO infolks VALUES ('$id','$name','$lastname','$age')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: crudserver.php");
}else{

}

?>