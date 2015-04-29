<?php 
 include ("./conexion.php"); 





    $sql ="update candidatos set votos=0,costoCampania=0.00 where idcandidatos>0;";
    $consulta=  mysql_query($sql);
    
    if(!$consulta)
    {
        echo 'error';
    }
    else
    {
        header('Location:index.php');
    }



?>