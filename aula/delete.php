<?php
include('connection.php');
$con = connection();

$id=$_GET['id'];

$sql="DELETE FROM aula WHERE NONMBRE='$id'";
$query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };
?>