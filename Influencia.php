<?php 
$id=$_GET['id'];


?>
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
  <script src="Scripts/Script.js"></script>
   <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
</head>
    <body id="binflu">
       
        <div id="influ">
             <div id="pregunta"> ¿Que medio influencio mas para que usted vote por el candidato?</div>
             <select name="influencia" id="selecion">
                <option value="tele">Television</option>
                <option value="tele">Radio</option>
                <option value="tele">Internet</option>
            </select>
             
             <a id="votar" class="pr" href="#" onclick="votar(<?php echo $id; ?>),inf=<?php echo $_POST['influencia'];?>" >Votar</a> 
             
        </div>
    </body>
</html>
