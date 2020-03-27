

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
    <title>formulário</title>
    </head>
    <style>
   
    </style>
    <body> 
        <?php
if(isset($_COOKIE['nome']) && isset($_GET['deletecookie'])){
    unset($_COOKIE['nome']);
     
} if(isset($_POST['caract'])){
    setcookie('nome', $_POST['caract']);
    header("location: index.php");
}else{ 
    if(isset($_COOKIE['nome'])){
        echo  $_COOKIE ['nome']; 
    echo "<a id='nome' href='?deletecookie=true' ><br><button>voltar</button></a>"; 
    }else{ 
?>
<form method="POST" action="index.php">
    <label id="nom">Coloque seu nome</label>
    <input type="text" id="caract" name="caract" placeholder="nome">
    <button type="submit" value="Enviar" id ="gt">armazenar</button>
</form>
<?php } } ?>
    </body>
    </html>
