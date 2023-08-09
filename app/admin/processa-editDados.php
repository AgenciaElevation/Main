<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

	$logo = $_POST['logo'];
	$titulo = $_POST['titulo']; 
	$subtitulo = $_POST['subtitulo']; 
	$fone = $_POST['fone'];
	$whats = $_POST['whats']; 
	$dias = $_POST['dias'];		
	$horarioInicial = $_POST['inicio'];
	$horarioFinal = $_POST['fim'];
	$maps = $_POST['maps'];
	$dominio = $_POST['site'];

		require('../dados.php');
		$dados = new dados();
		$editar = $dados->editarDados($titulo, $subtitulo, $fone, $whats, $dias, $horarioInicial, $horarioFinal, $maps, $dominio);

}else{
		header('Location: login.php?');
	}
?>