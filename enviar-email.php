<?php
  //Variáveis
  $name = $_POST['name'];
  $empresa = $_POST['empresa'];
  $email = $_POST['email'];
  $cnpj = $_POST['cnpj'];
  $site = $_POST['site'];
  $telefone = $_POST['telefone'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$name</p>
      <p><b>empresa: </b>$empresa</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>cnpj: </b>$cnpj</p>
      <p><b>site: </b>$site</p>
      <p><b>telefone: </b>$telefone</p>

      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "victor.louly@kidsbrasil.com.br";
  $assunto = "Contato MarketPlace";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $name <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=google.com.br'>";
?>