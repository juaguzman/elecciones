<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
  <meta charset="UTF-8">
  <title>ELECCIONES</title>
  <link rel="stylesheet" href="styles/styles.css">
   <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
</head>
<?php include ("header.php"); ?>
<?php include ("./conexion.php"); ?>
<?php $sql ="SELECT * FROM candidatos";
$consulta=  mysql_query($sql); ?>
    <body>
   <?php while($campos=mysql_fetch_object($consulta)){?>     
        <table class="pr">
            <tbody>
            <tr>
                
            <tr>
            <th><img src="img/<?php echo $campos->imagenCandidato;?>" width="350" height="140"></th>
            </tr>
            <tr>
            <th>ID: <?php echo $id=$campos->idcandidatos;?></th>
            </tr>
            <tr>
            <th>Nombre: <?php echo $campos->nomCandidato;?></th>
            </tr>
            <tr>
            <th>Apellido: <?php echo $campos->apellCandidato;?></th>
            </tr>
            <tr>
            <th>Edad: <?php echo $campos->edadCandidato;?> </th>
            </tr>
            <tr>
            <th>Partido Politico: <?php echo $campos->partidoPol;?>  </th>
            </tr> 
             <tr>
             <th>Costo campaña: <?php echo $campos->costoCampania;?>  </th>
            </tr>          
             <tr>
            <th>Votos: <?php echo $campos->votos;?>  </th>
            </tr> 
             <tr>
                 <th> <form method="post" action="Candidato.php?id=<?php echo $id; ?>">
                <input type="submit" value="Votar" /></th>
            </tr> 
            <a class="pr" href="#" onclick="modificar(<?php echo $campos->id_sug; ?>)" >Votar</a>
            </tr>
            </tbody>
        </table> 
        <?php }?> 
        
    </body>
</html>
