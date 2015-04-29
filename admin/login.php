<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Administracion de elecciones</title>
  <link rel="stylesheet" href="../styles/styleAdmin.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="scripts/scriptback.js"></script>
</head>
<?php include ("../conexion.php"); ?>
<?php $sql ="SELECT * FROM candidatos";
$consulta=  mysql_query($sql); ?>
<body>
   
    <table>
	<thead>
		<tr>
			<th colspan="7"><i></i> ELECCIONES 2015 </th>
		</tr>
		<tr>
			<td colspan="7"><h6><a href="agregar_candidato.php">AGREGAR CANDIDATO</a></h6></td>
		</tr>
		<tr>
                    <td>Nombre</td>			
                    <td>Apellido</td>
                    <td>Edad</td>
                    <td>Imagen</td>
                    <td>Partido politico</td>
                    <td colspan="2">Acciones</td>  
		</tr>
        </thead>
        
        <tbody>
                  <?php while($campos=mysql_fetch_object($consulta)){?> 
                <tr>
                    
                   
                    <td><?php echo $campos->nomCandidato;?></td>			
                    <td><?php echo $campos->apellCandidato;?></td>
                    <td><?php echo $campos->edadCandidato;?></td>
                    <td><?php echo $campos->imagenCandidato;?></td>
                    <td><?php echo $campos->partidoPol;?></td>
                    <td><a href="#" onclick="eliminar(<?php echo $campos->idcandidatos; ?>)"><img src="../img/elmn.png" width="25px" heigt="25px"></a></td>
                    <td><a href="#" onclick="modificar(<?php echo $campos->idcandidatos; ?>)"><img src="../img/mdf.png" width="25px" heigt="25px"></a></td>  
		</tr>
                <?php }?>
	</tbody>
    </table>
    
</body>
</html>