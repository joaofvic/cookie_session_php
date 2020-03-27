<?php 

	session_start(); 	
	if(isset($_SESSION['username']) == true){
		header("Location: usuario.php");
    }
    error_reporting(0);

?>
<?php
    session_start();
		if(isset($_POST['enviar'])){			
    $password = $_POST['password'];
        $user=$_POST['usuario'];
       $_SESSION['username']=$user;
			if( $password == $_POST['password'] ){
				$_SESSION['password'] = $password;
				header("Location: usuario.php");
			}else{
			}
        }
	?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <title>Facebook</title>
   <style>
    body{
        background-color: black;
    }
   </style>
    </head>
  <body>

  <div class="container">
  <div class="row">
    <div style="" id="1" class="col-sm">
      
    </div>
    <div style="background-color: grey; margin-top:50px; height:200px" class="col-sm">
      <br>
      <h1 style="padding-left: 60px; ">Login</h1>
<form enctype="multipart/form-data" method="post">
<div>
  <span>Nome:</span>
    <input style="margin-left:15px; " type="text" name="usuario"  placeholder="nome"><br>
  <span>Senha:</span>
	<input style="margin-left: 15px; " type="password" name="password" placeholder="senha">
	<button style="margin-left:2px;" type="submit" name="enviar">Entrar</button>
</div>

      
    </div>
    <div id="3" class="col-sm">
      
    </div>
  </div>
</div>
   
</body>
</html>
  

