<?php session_start();
include ("../conexion.php"); 
$sql ="SELECT * FROM candidatos";
$consulta=  mysql_query($sql); 
if(isset($_POST['op']))
{
$nombre = $_POST['nom'];
$apellido = $_POST['ape'];
$edad =$_POST['eda'];
$nomimagen = $_FILES['imge']['name'];
$partido = $_POST['par'];

$ruta="../candidatos/". $nomimagen;
$temp=$_FILES['imge']['tmp_name'];  
               
if ($_FILES["imge"]["error"] > 0){
 echo "ha ocurrido un error";
}
else { $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
       $limite_kb = 300;
       if (in_array($_FILES['imge']['type'], $permitidos) && $_FILES['imge']['size'] <= $limite_kb * 1024)
       {
        if (!file_exists($ruta)){
        $resultado = move_uploaded_file($_FILES['imge']['tmp_name'], $ruta);
	if ($resultado){
            echo "el archivo ha sido movido exitosamente";
            $sql ="INSERT INTO  candidatos VALUES('','$nombre','$apellido','$edad','$nomimagen',0,0,'$partido')";
            $consulta=  mysql_query($sql);
            if ($consulta){
                echo "<script>
                alert('Datos registrados');
                location.href='login.php';
                </script>";
                }                     
                } 
                else {
		echo "ocurrio un error al mover el archivo.";
                echo "$nomimagen y $ruta";
                }
                }
                else {
		echo $_FILES['imge']['name'] . ", este archivo existe";
                echo"<script>alert('archivo ya existe en la cartelera')</script>"; 
		}
                }
                else{
                echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
                }
                }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Administracion de elecciones</title>
        <link rel="stylesheet" href="../styles/styleAdmin.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="../scripts/script.js"></script>
        
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
        <table>
	<thead>
            <tr>
                <th colspan="2"><i class="fa fa-user"></i> AGREGAR CANDIDATO </th>
            </tr>
	</thead>
	<tbody>
            <tr>
                <td><label for="nom">Nombre:</label></td>
                <td><input type="text" name="nom" required></td>
            </tr>
            <tr>
                <td><label for="ape">Apellido:</label></td>                        
                <td><input type="text" name="ape" required></td>
            </tr>
            <tr>
                <td><label for="eda">Edad:</label></td>
                <td><input type="text" name="eda" required></td>
            </tr>
            <tr>
		<td><label for="imge">Imagen:</label></td>
                <td><input type="file" name="imge" required></td>
            </tr>
            <tr>
                <td><label for="par">Partido politico:</label></td>
                <td><input type="text" name="par" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="op" value="Agregar Candidato"></td>
            </tr>
            <tr>
                <td colspan="2"><h6><a href="login.php">Regresar</a></h6></td>
            </tr>
	</tbody>
</table>
</form>
        
</body>
</html>

