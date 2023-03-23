$('#CD1').submit(function(e){
   e.preventDefault();
   Swal.fire('SELECT SEXO,COUNT(SEXO) as No \n FROM alumno \n group by sexo')
});
$('#CD2').submit(function(e){
   e.preventDefault();
   Swal.fire({title: 'SELECT COUNT(DIRECCION.ID_ADMINISTRADOR) AS CONT, \nEF.NOMBRE AS NOMBRE_ESTADO, \nmunicipio.NOMBRE AS NOMBRE_MUNICIPIO\n FROM DIRECCION \nINNER JOIN EF ON DIRECCION.ID_EF = ef.ID_EF\n INNER JOIN municipio ON DIRECCION.ID_MUNICIPIO = municipio.ID_MUNICIPIO \nGROUP BY EF.NOMBRE,municipio.NOMBRE',
   width: 1200,
   })
});

$('#CD3').submit(function(e){
   e.preventDefault();
   Swal.fire('SELECT NONMBRE, COUNT(id_grupo) as No \n from aula_grupo \ngroup by id_grupo')
});

