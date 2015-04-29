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
  <script src="Scripts/scriptfront.js"></script>
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
                <th><img src="candidatos/<?php echo $campos->imagenCandidato;?>" width="250" height="140"></th>
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
             <th> 
            <form action="" method="POST" enctype="multipart/form-data">
            <a id="votar" class="pr" href="#" onclick="votar(<?php echo $campos->idcandidatos; ?>)" >Votar</a>  
            <a href="#"  onclick= ventana=window.open('Influencia.php?id=<?php echo $campos->idcandidatos; ?>','ventana','width=640,height=300,scrollbars=NO,accesskey=""menubar=NO,resizable=NO,titlebar=NO,status=NO');return false>Contacto</a>
            </form>    
            </th>
            </tr>            
            </tr>
            </tbody>
        </table> 
        <?php }?> 
        
    </body>
</html>
