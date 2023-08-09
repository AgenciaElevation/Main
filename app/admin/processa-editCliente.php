<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

	$id = $_POST['id'];
	$dom = $_POST['dominio'];

	
		require('../cliente.php');
		$cliente = new cliente();
		$edita = $cliente->editaCliente($dom, $id);


}else{
		header('Location: login-cliente.php?');
	}
?>