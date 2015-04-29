
<?php 
 include ("./conexion.php"); 


$id = $_GET['id'];
$inf=$_POST['influencia'];

if($id>0)
{
    $sql ="SELECT * FROM candidatos where idcandidatos=$id";
    $consulta=  mysql_query($sql);
    $campos=mysql_fetch_object($consulta);
    
    
    
    if($inf=0)
    {
         $vot=$campos->votos;
         $cos=$campos->costoCampania;
         $cos=$cos+1000;
         $vot=$vot+1;
         $sql="update candidatos set votos=$vot, costoCampania=$cos where idcandidatos=$id";
         $consulta=  mysql_query($sql);
        
    }
    else if($inf=1)
    {
        $vot=$campos->votos;
         $cos=$campos->costoCampania;
         $cos=$cos+500;
         $vot=$vot+1;
         $sql="update candidatos set votos=$vot, costoCampania=$cos where idcandidatos=$id";
         $consulta=  mysql_query($sql);  
    }
     else if($inf=2)
    {
        $vot=$campos->votos;
         $cos=$campos->costoCampania;
         $cos=$cos+100;
         $vot=$vot+1;
         $sql="update candidatos set votos=$vot, costoCampania=$cos where idcandidatos=$id";
         $consulta=  mysql_query($sql);  
    }
  
   if($consulta != NULL)
   {
   echo "<script>  alert('voto Agregado');location.href='index.php';window.opener.location.reload() ;window.close();</script>";
   }
    echo " $id y $inf";
    
}
        
    
?>