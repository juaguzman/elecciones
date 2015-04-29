<?php session_start();
include ("../conexion.php");
$id=$_GET['id'];
$sql="select * from candidatos where idcandidatos=$id";
$consulta=  mysql_query($sql);
$campos=  mysql_fetch_object($consulta);

 $fotov = $campos->imagenCandidato;
    $ruta = "../candidatos/";


unlink($ruta.$fotov);


$sql = "DELETE from candidatos WHERE idcandidatos=$id";

$consulta=  @mysql_query($sql);

if (!$sql) 
    {
    $consulta.="Error Eliminanda la sugerencia en la base de datos: " . mysql_error();
    } 
    else 
        {
        $consulta.="la sugerencia con identificacion " . $id . " fue eliminado del sistema";
        }
        header("Location:login.php");
        return $consulta;
?>


<img src="../candidatos/"