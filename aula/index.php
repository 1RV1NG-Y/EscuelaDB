<?php
    include('connection.php');

    $con = connection();

    $sql = "SELECT * FROM aulag";
    $query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>AULAS</title>
</head>

<body>

        <div class="wrap-login">
    <div class="users-form">
        <form action="insert_user.php" method="POST">
            <h1 class="login-form-title2">Crear aula</h1>

            <input class="input100" type="number" name="id_carrera" placeholder="ID_AULA">
            <input class="input100" type="number" name="claeve" placeholder="ID_GRUPO">
            <input class="input100"type="text" name="nombre" placeholder="NONMBRE">
            <input class="input100" type="text" name="no_semestres" placeholder="EDIFICIO">
            

            <input type="submit" value="Agregar usuario">
        </form>
    
    </div>
    </div>     
        
    <div class="users-table">
        <h2 class="login-form-title">Carrera registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>NOMBRE GRUPO</th>
                    <th>NOMBRE AULA</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)):?>
                <tr>
                    <th>   <?= $row['NOMBRE']?>   </th>
                    <th>   <?= $row['NONMBRE']?></th>
                                        

                    <th><a href="update.php?id=<?= $row['NONMBRE']?>"  class="users-table--edit">Editar</a></th>
                    <th><a href="delete.php?id=<?= $row['NONMBRE']?>"  class="users-table--delete">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

        
</body>

</html>