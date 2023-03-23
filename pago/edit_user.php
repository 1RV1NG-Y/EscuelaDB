<?php
include('connection.php');

$con = connection();

    $id=$_POST['id'];
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];



    $sql = "UPDATE pago SET CONCEPTO='$name', MONTO='$lastname' WHERE ID_PAGO='$id'";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };

?>