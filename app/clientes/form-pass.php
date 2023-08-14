<?php
$data = date ('d/m/Y - H:i');
$crypt = base64_encode($email);
$token = md5('token');
$assunto = "Link de Recuperação de senha";
$path = "https://www.agenciaelevation.com.br/app/clientes/";
$arquivo = "
<html>
<meta charset='utf-8'>
<table align='center' cellpadding='0' cellspacing='0' width='600' style='border-spacing: 2px 5px;' bgcolor='#fff'>        
<tr>
        <td style='padding: 10px 0 10px 0; font-family: sans-serif;'>
            <h2 style='color: #00c'>Elevation - Link de Recuperação de senha</h2> <br>
            Retemente: Suporte Elevation  [suporte@agenciaelevation.com.br] <br>
            Assunto:  $assunto 
        </td>
      </tr>

        <tr><td><hr></td></tr>

    <tr>
        <td style='padding: 10px 0 10px 0; font-family: sans-serif; font-size: 20px;'>
            <h3 style='color: #999'>Elevation - Link de Recuperação de senha:</h3>
            <p>prezado ". $email ." . hoje, dia ". $data ." foi solicitada a troca da sua senha
            através do link <strong>Esqueci minha senha</strong> na página de login de cliente no nosso site.</p>
            <p style='color: #a00; font-weight: bold'>caso a solicitação não tenha sido feita por você, exclua esse e-mail imediatamente!</p>

            <p>Se você solicitou a troca da senha, acesse o link abaixo:</p>

            <p><a style='background-color: #00c; color: #fff; border-radius: 6px; padding: 6px 12px' 
            href='".$path."trocaSenha.php?token=$token&crypt=$crypt' class='btn btn-primary'>
              TROCAR MINHA SENHA</a></p>
            
        </td>
    </tr>
    <tr>    
      <td><hr></td>
    </tr>

    <tr>    
      <td>Solicitação atendida em: " . $data . "</td>
   </tr>
   <tr>    
     <td>Obrigado por utilizar os serviços de suporte da Elevation</td>
  </tr>

</table>
</html>
";

  $suporte = 'suporte@agenciaelevation.com.br';
  $destino = $email;

  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: Suporte Elevation '. $suporte;

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  
