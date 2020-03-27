<?php
	session_start(); 
	if(!isset($_SESSION['password']) == true){         
		unset($_SESSION['password']);
header("Location:index.php");
}    
echo" <h1>Página do Usuário</h1>";
echo"  <h4>Você vai morrer</h4>"
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<head>
<style>
h1{
    color:white;
    margin-left:90vh;
}
h4 {
    color:white;
    margin-left:100vh;
}
body{
    background-color:black;
}
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="black">
    <img src="source.gif" style="margin-left:70vh;">
</body>
</html>
