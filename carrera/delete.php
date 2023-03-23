<?php
include('connection.php');
$con = connection();

$id=$_GET['id'];

$sql="DELETE FROM carrera WHERE ID_CARRERA=$id";
$query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };
?>