<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {
	$id = $_POST['id'];
	$pass = $_POST['senha'];
	$pass2 = $_POST['senha2'];


		if($pass != $pass2){
			header('Location: mudaSenha.php?erro=senha');
		}else{
			$salt = md5('user');
			$senha = crypt($pass,$salt);
			$pass = hash('sha512',$senha);

			require('../cliente.php');
			$cliente = new cliente();
			$novaSenha = $cliente->novaSenha($pass,$id);
			
		
		}


}else{
		header('Location: login.php?');
	}
?>