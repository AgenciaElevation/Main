<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

	$facebook = $_POST['facebook'];
	$instagram = $_POST['instagram']; 
	$twitter = $_POST['twitter']; 
	$youtube = $_POST['youtube'];
	$linkedin = $_POST['linkedin']; 
	$tiktok = $_POST['tiktok'];		
	$dominio = $_POST['site'];

		require('../dados.php');
		$dados = new dados();
		$editar = $dados->editarRedes($facebook, $instagram, $twitter, $youtube, $linkedin, $tiktok, $dominio);
}else{
		header('Location: login.php?');
	}
?>