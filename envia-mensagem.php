<?php

if(isset($_POST['nome'], $_POST['email'], $_POST['igreja'], $_POST['cidade'], $_POST['uf'])){
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $igreja = filter_input(INPUT_POST, 'igreja', FILTER_SANITIZE_SPECIAL_CHARS);
  $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
  $uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_SPECIAL_CHARS);

  // Obtem o html modelo do email
  $html = file_get_contents('modelo-mensagem.php');

  // Substitui as strings pelas informações do intercessor
  $html = str_replace('{{nome}}', $nome, $html);
  $html = str_replace('{{email}}', $email, $html);
  $html = str_replace('{{igreja}}', $igreja, $html);
  $html = str_replace('{{cidade}}', $cidade, $html);
  $html = str_replace('{{uf}}', $uf, $html);

  include('config-email.php');
  // Envia o email
  $enviar = email_Send($email, $nome, 'projetoabraao@gmail.com', "Novo Intercessor", $html);

  // var_dump($enviar);
  if($enviar){
    header("location: /seja-um-intercessor.php?status=sucesso");
  } else {
    header("location: /seja-um-intercessor.php?status=erro");
  }
}