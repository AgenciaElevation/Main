<?php
		$email = $_POST['email'];
		
		require('../cliente.php');
		$cliente = new cliente();
		$verifica = $cliente->verificaEmail($email);

?>