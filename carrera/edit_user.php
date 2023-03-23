<?php
include('connection.php');

$con = connection();

    $id=$_POST['id'];
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];


    $sql = "UPDATE carrera SET CLAEVE='$name', NOMBRE='$lastname', NO_SEMESTRES='$username' WHERE ID_CARRERA=$id";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };

?>