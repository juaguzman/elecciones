<?php session_start();
include ("../conexion.php"); 
$consulta=  mysql_query($sql);

$ruta="../candidatos/";
unlink($ruta.$consulta['nomimagen'][$id]);

$id = $_GET[id];

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