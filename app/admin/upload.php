<?php
date_default_timezone_set('America/Sao_paulo');
$agora = date('d-m-Y-h-i-s');

$arquivo = $_FILES['logo']['tmp_name'];
$logo = $_FILES['logo']['name'];

//pega a extensão
$extensao = pathinfo($logo, PATHINFO_EXTENSION);

//muda o nome
$tmp_nome = md5($logo . $agora);
$imagem = $tmp_nome . "." . $extensao;

//novo destino
$destino = '../../assets/img/'. $imagem;

move_uploaded_file($arquivo, $destino);

?>