<?php session_start();
include ("../conexion.php");
$id=$_GET['id'];
$sql="select * from candidatos where idcandidatos=$id";
$consulta=  mysql_query($sql);
$campos=  mysql_fetch_object($consulta);


if(isset($_POST['op']))
{
  if($id > 0 )
{
    $fotov = $campos->imagenCandidato;
    $ruta = "../candidatos/";
    unlink($ruta.$fotov);
    $nombre = $_POST['nom'];
    $apellido = $_POST['ape'];
    $edad =$_POST['eda'];
    $nomimagen = $_FILES['imge']['name'];
    $partido = $_POST['par'];
    
    
       
            if ($_FILES["imge"]["error"] > 0)
            {
            echo "ha ocurrido un error";
            }
            else {
                $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
                $limite_kb = 300;
                if (in_array($_FILES['imge']['type'], $permitidos) && $_FILES['imge']['size'] <= $limite_kb * 1024)
                {
                if (!file_exists($ruta.$nomimagen)){
                             
                $resultado = move_uploaded_file($_FILES['imge']['tmp_name'], $ruta.$nomimagen);
			if ($resultado)
                            {
                                $ruta="candidatos/";
                                unlink($ruta.$fotov);
				echo "el archivo ha sido movido exitosamente";
                                echo "id='$id' y nombre='$nombre' y apellido='$apellido' y edad='$edad' "
            . "y imagen='$nomimagen' y partido='$partido'";
     
            $query = "update candidatos set nomCandidato='$nombre', apellCandidato='$apellido',"
             . "edadCandidato='$edad', imagenCandidato='$nomimagen', partidoPol='$partido'"
             . " WHERE idcandidatos=$id";
     
            @mysql_query($query) or die('Error al procesar consulta: ' . mysql_error());
            echo 'sugerencia modificada';
            header('Location:login.php');
                                  
                                
			} else {
				echo "ocurrio un error al mover el archivo.";
                                echo "$nomimagen y $ruta";
                                
                                }
                             }
                             else {
			echo $_FILES['imge']['name'] . ", este archivo existe";
		}
                     }
                     else
                     {
                         echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
                     }
                     }
                        
                        
                
                        
                        
                    }
                }
                
                
                
                
             
    

//header("Location:peliculas.php");
 

   

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Administracion de elecciones</title>
        <link rel="stylesheet" href="../styles/styleAdmin.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="../admin/scripts/scriptback.js"></script>
        
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
        <table>
	<thead>
            <tr>
                <th colspan="2"><i class="fa fa-user"></i> MODIFICAR CANDIDATO </th>
            </tr>
	</thead>
	<tbody>
            <tr>
                <td><label for="nom">Nombre:</label></td>
                <td><input type="text" name="nom" required value="<?php echo $campos->nomCandidato;?>"></td>
            </tr>
            <tr>
                <td><label for="ape">Apellido:</label></td>                        
                <td><input type="text" name="ape" required value="<?php echo $campos->apellCandidato;?>"></td>
            </tr>
            <tr>
                <td><label for="eda">Edad:</label></td>
                <td><input type="text" name="eda" required value="<?php echo $campos->edadCandidato;?>"></td>
            </tr>
            <tr>
		<td><label for="imge">Imagen:</label></td>
                <td><input type="file" name="imge" required value="<?php echo $campos->imagenCandidato;?>"></td>
            </tr>
            <tr>
                <td><label for="par">Partido politico:</label></td>
                <td><input type="text" name="par" required value="<?php echo $campos->partidoPol;?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="op" value="Modificar Candidato"></td>
            </tr>
            <tr>
                <td colspan="2"><h6><a href="login.php">Regresar</a></h6></td>
            </tr>
	</tbody>
</table>
</form>
        
</body>
</html>

