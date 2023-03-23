<?php
    include('connection.php');
    $con = connection();

    $name=$_POST['id_carrera'];
    $lastname=$_POST['claeve'];
    $username=$_POST['nombre'];
    $password=$_POST['no_semestres'];


    $sql = "INSERT INTO carrera VALUES('$name','$lastname','$username','$password')";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };
?>