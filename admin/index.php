<?php
	$error="&nbsp;";
	if(isset($_POST['op']))
	{
		$mail=strtolower($_POST['mail']);
		$contra=$_POST['con'];
		
		if($mail=="admin@elecciones.com" && $contra=="123")
		{
			session_start();
			$_SESSION['email'][0]="admin@elecciones.com";
			$_SESSION['contra'][0]="123";
			$_SESSION['cont']=1;
			header('Location:login.php');
		}else{
			$error="* Usuario no autorizado!";
		}	
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Elecciones 2015</title>
  <link rel="stylesheet" href="../styles/styleAdmin.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="../admin/scripts/scriptback.js"></script>
  
</head>
<body>
  <div class="container">
  <div id="login-form">
    <h3><i class="fa fa-user fa-2x"></i>Ingreso elecciones</h3>
    <fieldset>

      <form action="" method="POST">
        <input name="mail" type="email" required placeholder="Email">
        <input name="con" type="password" required  placeholder="Password">
        <input type="submit" name="op" value="Entrar">
        <footer class="clearfix">
          <p><span class="info">?</span><a href="#">Olvid&oacute; su contrase&ntilde;a?</a></p>
		  <p style="color:red;"><?php echo $error;?></p>
        </footer>
      </form>
    </fieldset>
  </div> <!-- end login-form -->
</div>
</body>
</html>