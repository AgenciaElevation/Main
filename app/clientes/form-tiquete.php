<?php
$data = date ('d/m/Y - H:i');
$assunto = "Tíquete de Suporte";
$arquivo = "
<html>
<meta charset='utf-8'>
<table align='center' cellpadding='0' cellspacing='0' width='600' style='border-spacing: 2px 5px;' bgcolor='#fff'>        
<tr>
        <td style='padding: 10px 0 10px 0; font-family: sans-serif;'>
            <h2 style='color: #00c'>Abertura de tíquete de suporte - Elevation</h2> <br>
            Retemente: " . $dom . " - [".$email."] <br>
            Assunto:  $assunto 
        </td>
      </tr>

        <tr><td><hr></td></tr>

    <tr>
        <td style='padding: 10px 0 10px 0; font-family: sans-serif; font-size: 20px;'>
            <h3 style='color: #999'>Problema relatado:</h3>
            
            ". $tiquete ."
        </td>
    </tr>
    <tr>    
        <td>Abertura do tíquete: " . $data . "</td>
    </tr>
</table>
</html>
";

  $destino = 'suporte@agenciaelevation.com.br';

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: '. $email;

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  
