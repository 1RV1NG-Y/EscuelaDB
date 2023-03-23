<?php
    include('connection.php');

    $con = connection();

    $sql = "SELECT ID_PAGO,ID_ALUMNO,CONCEPTO,MONTO,FECHA_PAGO,SUM(MONTO) as total FROM pago";
    $query = mysqli_query($con,$sql);

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Realizar un pago</title>
</head>

<body>

        <div class="wrap-login">
    <div class="users-form">
        <form action="insert_user.php" method="POST">
            <h1 class="login-form-title2">Pago</h1>

            <input class="input100" type="number" name="id_carrera" placeholder="ID_ALUMNO">
            <input class="input100" type="text" name="claeve" placeholder="CONCEPTO">
            <input class="input100"type="float" name="nombre" placeholder="MONTO">
            <input class="input100" type="date" name="no_semestres" placeholder="FECHA">
            

            <input type="submit" value="Agregar usuario">
        </form>
    
    </div>
    </div>     
        
    <div class="users-table">
        <h2 class="login-form-title">Pago registrado</h2>
        <table>
            <thead>
                <tr>
                    <th>ID_PAGO</th>
                    <th>ID_ALUMNO</th>
                    <th>CONCEPTO</th>
                    <th>MONTO</th>
                    <th>FECHA PAGO</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)):?>
                <tr>
                    <th>   <?= $row['ID_PAGO']?>   </th>
                    <th>   <?= $row['ID_ALUMNO']?>  </th>
                    <th>   <?= $row['CONCEPTO']?>   </th>
                    <th>   <?= $row['MONTO']?>  </th>
                    <th>   <?= $row['FECHA_PAGO']?>   </th>
                                                        

                    <th><a href="update.php?id=<?= $row['ID_PAGO']?>"  class="users-table--edit">Editar</a></th>
                    <th><a href="delete.php?id=<?= $row['ID_PAGO']?>"  class="users-table--delete">Eliminar</a></th>
                </tr>
                <tr>
                <th>  SUMA DE LOS MONTOS:  <?= $row['total']?>   </th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    


</body>

</html>