<?php
require('app/dados.php');
$dados = new dados();
$dominio = $dados->dominio;
$consulta = $dados->consulta($dominio);


$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$arquivo = "
<html>
<meta charset='utf-8'>
<table align='center' cellpadding='0' cellspacing='0' width='600' style='border-spacing: 2px 5px;' bgcolor='#fff'>        
<tr>
        <td style='padding: 10px 0 10px 0; font-family: sans-serif;'>
            <h2 style='color: #00c'>Contato via formulário - Elevation</h2> <br>
            Retemente: " . $nome . "[".$email."] <br>
            Assunto:  $assunto 
        </td>
      </tr>

        <tr><td><hr></td></tr>

    <tr>
        <td style='padding: 10px 0 10px 0; font-family: sans-serif; font-size: 20px;'>
            <h3 style='color: #999'>mensagem:</h3>
            
            ". $mensagem ."
        </td>
      </tr>
</table>
</html>
";


  // email para quem será enviado o formulário
  foreach ($consulta as $linha) {
  $emailenviar = $linha['contato']; 
  }
  $destino = $emailenviar;

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: '. $email;

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
    echo "<script>window.location.href = '../index.php?email=enviado'</script>";
  } else {
    echo "<script>window.location.href = '../index.php?email=enviado'</script>";
  }
