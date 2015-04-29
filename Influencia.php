<?php 
$ids=$_GET['id'];


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
   <script>
function ponPrefijo()
{
    
    window.close()
}
</script> 
</head>
    <body id="binflu">
       
        <div id="influ">
           
             <div id="pregunta"> ¿Que medio influencio mas para que usted vote por el candidato?</div>
            <form action="votar.php?id=<?php echo $ids?>" method="post">
                <select id="selecion" name="influencia">
                 <option value="0">Television</option>
                 <option value="1">Internet</option>
                 <option value="2">Radio</option>
                 
                </select>
                <input id="votos" type="submit" value="votar" onclick="" >
            </form>
        </div>
    </body>
</html>
