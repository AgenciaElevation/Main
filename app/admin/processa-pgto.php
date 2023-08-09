<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

		$id = $_GET['id'];
		$id = base64_decode($id);
		$hoje = date('Y-m-d');


		require('../cliente.php');
		$cliente = new cliente();
		$pgto = $cliente->confirmaPgto($hoje, $id);


}else{
		header('Location: login.php?');
	}
?>