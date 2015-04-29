
<?php 
 include ("./conexion.php"); 


$id = $_GET['id'];

if($id>0)
{
    $sql ="SELECT * FROM candidatos where idcandidatos=$id";
    $consulta=  mysql_query($sql);
    $campos=mysql_fetch_object($consulta);
    $vot=$campos->votos;
    $vot=$vot+1;
    $sql="update candidatos set votos=$vot where idcandidatos=$id";
    $consulta=  mysql_query($sql);
    
   // if($consulta != NULL)
    //{
      // echo "<script>  alert('voto Agregado');
    //location.href='index.php';    </script>";
    //}
    echo "$vot";
}
        
    
?>