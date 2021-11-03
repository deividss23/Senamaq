<?php
  $nome = $_POST['name'];
  $email= $_POST['email'];
  $mensagem= $_POST['message'];
  $to = "contato@senamaq.com.br";
  $assunto = $_POST['subject'];
  mail($to,$assunto,$mensagem);
?>