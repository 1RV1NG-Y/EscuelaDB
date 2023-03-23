<?php
include('connection.php');

$con = connection();

    $id=$_POST['id'];
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];


    $sql = "UPDATE materia SET CLAVE='$name', NOMBRE='$lastname', CREDITOS='$username' WHERE ID_MATERIA=$id";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };

?>