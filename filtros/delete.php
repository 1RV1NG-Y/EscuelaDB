<?php
include('connection.php');
$con = connection();

$id=$_GET['id'];

$sql="DELETE FROM materia WHERE ID_MATERIA=$id";
$query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };
?>