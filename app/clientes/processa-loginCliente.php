
<?php
	$email = $_POST['cliente'];
	$senha = $_POST['senha'];
	
	$salt = md5('cliente');
	$senha = crypt($senha,$salt);
	$pass = hash('sha512',$senha);

	require_once('../cliente.php');
	$cliente = new cliente();
	$logar = $cliente->logar($email,$pass);
	
?>