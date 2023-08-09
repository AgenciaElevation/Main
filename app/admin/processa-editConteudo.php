<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

	$empresa = $_POST['empresa'];
	$servicos = $_POST['servicos'];
	$equipe = $_POST['equipe'];
	$dominio = $_POST['site'];	


		require('../dados.php');
		$dados = new dados();
		$editar = $dados->editarConteudo($empresa, $servicos, $equipe, $dominio);

}else{
		header('Location: login.php?');
	}
?>