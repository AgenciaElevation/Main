<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

		$dominio = $_POST['site'];	

		require('upload.php');
		require('../dados.php');
		$dados = new dados();
		$logo = $dados->editarLogo($imagem, $dominio);

}else{
		header('Location: login.php?');
	}
