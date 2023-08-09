<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

	$id = $_POST['id'];
	$username = $_POST['username'];
	$email = $_POST['email'];

	
		require('../cliente.php');
		$cliente = new cliente();
		$edita = $cliente->editar($username,$email, $id);


}else{
		header('Location: login-cliente.php?');
	}
?>