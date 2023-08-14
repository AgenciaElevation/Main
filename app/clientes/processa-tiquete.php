<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

	$dom = $_POST['dominio'];
	$email = $_POST['email'];
	$tiquete = $_POST['tiquete'];
		
		require('form-tiquete.php');

		require('../suporte.php');
		$suporte = new suporte();
		$tiquete = $suporte->novoTiquete($dom, $email, $tiquete);


}else{
		header('Location: login-suporte.php?');
	}
?>