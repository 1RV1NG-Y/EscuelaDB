<?php
    include('connection.php');

    $con = connection();

    $sql1 = "SELECT SEXO,COUNT(SEXO) as no FROM alumno group by sexo";
    $query1 = mysqli_query($con,$sql1);
    $sql2 = "SELECT COUNT(DIRECCION.ID_ADMINISTRADOR) AS CONT, EF.NOMBRE AS NOMBRE_ESTADO, municipio.NOMBRE AS NOMBRE_MUNICIPIO FROM DIRECCION INNER JOIN EF ON DIRECCION.ID_EF = ef.ID_EF INNER JOIN municipio ON DIRECCION.ID_MUNICIPIO = municipio.ID_MUNICIPIO GROUP BY EF.NOMBRE,municipio.NOMBRE";
    $query2 = mysqli_query($con,$sql2);
    $sql3 = "SELECT NONMBRE, COUNT(id_grupo) as no from aula_grupo group by id_grupo";
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

    <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">        
    <link rel="stylesheet" type="text/css" href="../fuentes/iconic/css/material-design-iconic-font.min.css">
        
    <title>Materia</title>
</head>

<body>
    <h2 class="login-form-title">GROUP BY</h2>
    <div class="users-table">
    
        <h2 class="login-form-title2">Numero de alumnos segun su sexo</h2>
        <form class="login-form validate-form" id="CD1" action="">
            <button type="submit" name="submit" class="login-form-btn">Consulta</button>
    </form>
        <table>
            <thead>
                <tr>
                    <th>SEXO</th>
                    <th>NUMERO ALUMNOS</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query1)):?>
                <tr>
                    <th>   <?= $row['SEXO']?>   </th>
                    <th>   <?= $row['no']?></th>
                        
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <div class="users-table">
    
        <h2 class="login-form-title2">No de admins de cada estado y municipio</h2>
        <table>
        <form class="login-form validate-form" id="CD2" action="">
            <button type="submit" name="submit" class="login-form-btn">Consulta</button>
    </form>
            <thead>
                <tr>
                    <th>CANTIDAD</th>
                    <th>ESTADO</th>
                    <th>MUNICIPIO</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query2)):?>
                <tr>
                    <th>   <?= $row['CONT']?>   </th>
                    <th>   <?= $row['NOMBRE_ESTADO']?></th>
                    <th>   <?= $row['NOMBRE_MUNICIPIO']?></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <div class="users-table">
    
        <h2 class="login-form-title2">No grupos por aula</h2>
        <form class="login-form validate-form" id="CD3" action="">
            <button type="submit" name="submit" class="login-form-btn">Consulta</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>AULA</th>
                    <th>CANTIDAD DE GRUPOS</th>
             
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query3)):?>
                <tr>
                    <th>   <?= $row['NONMBRE']?>   </th>
                    <th>   <?= $row['no']?></th>
                 
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
   
    <script src="../jquery/jquery-3.3.1.min.js"></script>    
     <script src="../bootstrap/js/bootstrap.min.js"></script>    
     <script src="../popper/popper.min.js"></script>    
     <script src="codigo.js"></script>      
     <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>  
</body>

</html>