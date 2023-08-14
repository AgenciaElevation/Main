<?php
$data = date ('d/m/Y - H:i');
$assunto = "Sua solicitação de suporte foi atendida!";
$arquivo = "
<html>
<meta charset='utf-8'>
<table align='center' cellpadding='0' cellspacing='0' width='600' style='border-spacing: 2px 5px;' bgcolor='#fff'>        
<tr>
        <td style='padding: 10px 0 10px 0; font-family: sans-serif;'>
            <h2 style='color: #00c'>Abertura de tíquete de suporte - Elevation</h2> <br>
            Retemente: Suporte Elevation - [suporte@agenciaelevation.com.br] <br>
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
      <td><hr></td>
    </tr>
    <tr>
      <td style='padding: 10px 0 10px 0; font-family: sans-serif; font-size: 20px;'>
          <h4 style='color: #999'>Feedback do surpote técnico:</h4>   
          ". $feedback ."
      </td>
    </tr>
    <tr>    
      <td>Sua solicitação foi atendida em: " . $data . "</td>
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
      $headers .= 'From: Suporte Elevation - '. $suporte;

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  
