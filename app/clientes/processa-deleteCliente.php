<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

		$id = $_GET['id'];
		$id = base64_decode($id);
	

		require('../cliente.php');
		$cliente = new cliente();
		//$apaga = $cliente->excluir($id);
	
}else{
		header('Location: login-cliente.php?');
	}
?>