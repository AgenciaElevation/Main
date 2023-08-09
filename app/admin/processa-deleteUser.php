<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

		$id = $_GET['id'];
		$id = base64_decode($id);
	

		require('../usuario.php');
		$usuario = new usuario();
		$apaga = $usuario->excluir($id);
	
}else{
		header('Location: login.php?');
	}
?>