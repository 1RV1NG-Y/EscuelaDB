<?php
include('connection.php');

$con = connection();

    $id=$_POST['id'];
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];


    $sql = "UPDATE aula SET ID_GRUPO='$name', NONMBRE='$lastname', EDIFICIO='$username' WHERE NONMBRE='$lastname'";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };

?>