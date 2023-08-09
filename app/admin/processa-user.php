
<?php
	$user = $_POST['usuario'];
	$pass = $_POST['senha'];
	
	$salt = md5('user');
	$senha = crypt($pass,$salt);
	$pass = hash('sha512',$senha);

	require_once('../usuario.php');
	$usuario = new usuario();
	$logar = $usuario->logar($user,$pass);
	
?>