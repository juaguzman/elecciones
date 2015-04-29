<?php
include ("./conexion.php"); 


$id = $_GET['id'];


if($id>0)
{
    $sql ="select sum(votos) as 'sumaVoto'from candidatos";
    $consulta=  mysql_query($sql);
    $campos=mysql_fetch_object($consulta);
    $votosTot=$campos->sumaVoto;
     
    $sql ="select votos from candidatos where idcandidatos =$id";
    $consulta=  mysql_query($sql);
    $campos=mysql_fetch_object($consulta);
    $votosCan=$campos->votos;
   
    $promVotos=($votosCan*100)/$votosTot;
  
}
    
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     <meta charset="UTF-8">
  <title>ELECCIONES</title>
  <link rel="stylesheet" href="styles/styles.css">
  <script src="Scripts/Script.js"></script>
   <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
   <script>
function ponPrefijo()
{
    
    window.close()
}
</script> 
</head>
    <body id="binflu">
        <div id="promVotos">
            <table id="rs">
                <tbody>
                    <tr>
                        <th>Total de votos: <?php echo $votosTot;?></th>
                    </tr>
                     <tr>
                        <th>Total de votos candidato: <?php echo $votosCan;?></th>
                    </tr>
                    <tr>
                        <th>Promedio votos: <?php echo round($promVotos,2);?>%</th>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                <input id="Aceptar" type="submit" value="Aceptar" onclick="ponPrefijo()" >
                        </th>
                </tr>
                </tfoot>
            </table>
        </div>
       
    </body>
</html>
