<?php
    include('connection.php');

    $con = connection();

    $sql1 = "SELECT * FROM aula_grupo";
    $query1 = mysqli_query($con,$sql1);
    $sql2 = "SELECT * FROM direccion_admin";
    $query2 = mysqli_query($con,$sql2);
    $sql3 = "SELECT * FROM direccion_admiin";
    $query3 = mysqli_query($con,$sql3);
    $sql4 = "SELECT * FROM admin_alfabetico";
    $query4 = mysqli_query($con,$sql4);
    $sql5 = "SELECT * FROM num_dir";
    $query5 = mysqli_query($con,$sql5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Materia</title>
</head>

<body>
    <h2 class="login-form-title">Vistas</h2>
    <div class="users-table">
        <h2 class="login-form-title2">Aula con el grupo al que pertence</h2>
        <table>
            <thead>
                <tr>
                    <th>ID_AULA</th>
                    <th>NOMBRE</th>
                    <th>EDIFICIO</th>
                    <th>ID_GRUPO</th>
                    <th>NOMBRE</th>
                    <th>CAPACIDAD</th>
                    <th>TURNO</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query1)):?>
                <tr>
                    <th>   <?= $row['ID_AULA']?>   </th>
                    <th>   <?= $row['NOMBRE']?></th>
                    <th>   <?= $row['EDIFICIO']?></th>
                    <th>   <?= $row['ID_GRUPO']?></th>
                    <th>   <?= $row['NOMBRE']?></th>
                    <th>   <?= $row['CAPACIDAD']?></th>
                    <th>   <?= $row['TURNO']?></th>      
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <div class="users-table">
        <h2 class="login-form-title2">Direcciones administradores</h2>
        <table>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>DIRECCION</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query2)):?>
                <tr>
                    <th>   <?= $row['ADMIN']?>   </th>
                    <th>   <?= $row['DIRECCION']?></th>
                        
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <div class="users-table">
        <h2 class="login-form-title2">Ciudad y estado de cada admin</h2>
        <table>
            <thead>
                <tr>
                    <th>DIRECCION</th>
                    <th>NOMBRE</th>
                    <th>MUNICIPIO</th>
                    <th>ESTADO</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query3)):?>
                <tr>
                    <th>   <?= $row['DIRECCION']?>   </th>
                    <th>   <?= $row['ADMIN']?></th>
                    <th>   <?= $row['MUNICIPIO']?></th>
                    <th>   <?= $row['ESTADO']?></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <div class="users-table">
        <h2 class="login-form-title2">Administradores ordenados por apellido</h2>
        <table>
            <thead>
                <tr>
                    <th>ID_DMINISTRADOR</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query4)):?>
                <tr>
                    <th>   <?= $row['ID_ADMINISTRADOR']?>   </th>
                    <th>   <?= $row['NOMBRE']?></th>
                    <th>   <?= $row['APPAT']?></th>
                        
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <div class="users-table">
        <h2 class="login-form-title2">No de direcciones por admin</h2>
        <table>
            <thead>
                <tr>
                    <th>ID_DMINISTRADOR</th>
                    <th>NOMBRE</th>
                    <th>NUMERO DE DIRECCIONES</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query5)):?>
                <tr>
                    <th>   <?= $row['ID_ADMINISTRADOR']?>   </th>
                    <th>   <?= $row['NOMBRE']?></th>
                    <th>   <?= $row['NUMERO_DIR']?></th>
                        
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    
    
</body>

</html>