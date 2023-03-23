<?php
    include('connection.php');

    $con = connection();

    $sql = "SELECT * FROM grupo";
    $query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>GRUPO</title>
</head>

<body>
<div class="wrap-login">
    <div class="users-form">
        <form action="insert_user.php" method="POST">
            <h1>Crear grupo</h1>

            <input class="input100" type="number" name="id_carrera" placeholder="ID_GRUPO">
            <input class="input100" type="text" name="claeve" placeholder="NOMBRE">
            <input class="input100" type="number" name="nombre" placeholder="CAPACIDAD">
            <input class="input100" type="text" name="no_semestres" placeholder="TURNO">
            

            <input type="submit" value="Agregar usuario">
        </form>
    </div>
    </div>

    <div class="users-table">
        <h2 class="login-form-title2">Grupos registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Numero de semestres</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)):?>
                <tr>
                    <th>   <?= $row['ID_GRUPO']?>   </th>
                    <th>   <?= $row['NOMBRE']?></th>
                    <th>   <?= $row['CAPACIDAD']?></th>
                    <th>   <?= $row['TURNO']?></th>
                    

                    <th><a href="update.php?id=<?= $row['ID_GRUPO']?>"  class="users-table--edit">Editar</a></th>
                    <th><a href="delete.php?id=<?= $row['ID_GRUPO']?>"  class="users-table--delete">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    
</body>

</html>