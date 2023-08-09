<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

		$dom = $_GET['dom'];
		$dominio = base64_decode($dom);
	
		require_once('../imagens.php');
		$imagem = new imagens();
		$reseta = $imagem->resetarCarousel($dominio);
	
}else{
		header('Location: login.php?');
	}
?>