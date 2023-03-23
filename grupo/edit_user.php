<?php
include('connection.php');

$con = connection();

    $id=$_POST['id'];
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];


    $sql = "UPDATE grupo SET NOMBRE='$name', CAPACIDAD='$lastname', TURNO='$username' WHERE ID_GRUPO=$id";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };

?>