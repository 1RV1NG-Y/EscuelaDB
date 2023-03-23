<?php
include('connection.php');
$con = connection();

$id=$_GET['id'];
//echo "Mi nombre es $id";

$sql="SELECT * FROM carrera WHERE ID_CARRERA='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Usuarios</title>
</head>

<body>
    <div class="users-form">
        <form action="edit_user.php" method="POST">
            <h1>Editar carrera</h1>
            <input type="hidden" name="id" value="<?= $row['ID_CARRERA']?>">
            <input type="text" name="name" placeholder="Nombre" value="<?= $row['CLAEVE']?>">
            <input type="text" name="lastname" placeholder="Apellido" value="<?= $row['NOMBRE']?>">
            <input type="text" name="username" placeholder="Username" value="<?= $row['NO_SEMESTRES']?>">


            <input type="submit" value="Actualizar informacion">
        </form>
    </div>
    
</body>
</html>