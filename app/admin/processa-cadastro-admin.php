<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {
		$user = $_POST['username'];
		$mail = $_POST['email'];	
		$pass = $_POST['senha'];
		$pass2 = $_POST['senha2'];


		if($pass != $pass2){
			header('Location: admin.php?senha=error');
		}else{
			$salt = md5('user');
			$senha = crypt($pass,$salt);
			$pass = hash('sha512',$senha);

			require('../usuario.php');
			$usuario = new usuario();
			$cadastra = $usuario->verifica($user, $pass, $mail);	
		}

}else{
		header('Location: login.php?');
	}
?>