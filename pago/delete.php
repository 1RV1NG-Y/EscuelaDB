<?php
include('connection.php');
$con = connection();

$id=$_GET['id'];

$sql="DELETE FROM pago WHERE ID_PAGO='$id'";
$query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };
?>