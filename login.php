<?php
require_once("conecta.php");
$email = $_POST['email'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];

  if (isset($entrar)) {
           
    $verifica = mysqli_query("SELECT * FROM usuarios WHERE email = 
    '$email' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Email e/ou senha incorretos');window.location
        .href='login-form.php';</script>";
        die();
      }else{
        header("Location:index.php");
      }
  }
?>