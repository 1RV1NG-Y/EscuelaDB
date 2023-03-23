<?php
include('connection.php');
$con = connection();

$id=$_GET['id'];

$sql="DELETE FROM grupo WHERE ID_GRUPO=$id";
$query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };
?>