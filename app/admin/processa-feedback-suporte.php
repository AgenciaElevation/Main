<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

		$id = $_POST['id'];
		$email = $_POST['email'];
		$tiquete = $_POST['tiquete'];
		$feedback = $_POST['feedback'];
		$finished = $_POST['finished'];
		
		require('../suporte.php');
		$suporte = new suporte();
		$finaliza = $suporte->finalizaTiquete($feedback, $finished, $id);


}else{
		header('Location: login.php?');
	}
?>