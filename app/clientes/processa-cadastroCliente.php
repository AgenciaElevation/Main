<?php
		
		$email = $_POST['email'];
		$email2 = $_POST['email2'];	
		$senha = $_POST['senha'];
		$senha2 = $_POST['senha2'];

		
		$nome = $_POST['nome'];
		$fone = $_POST['fone'];
		$cpfcnpj = $_POST['cpf-cnpj'];
		$cep = $_POST['cep'];

		$rua = $_POST['rua'];
		$num = $_POST['numero'];

		if(isset($_POST['complemento'])){
			$comp = $_POST['complemento'];
		}
		
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];

		if(isset($_POST['plano1'])){
			$plano = $_POST['plano1'];
		}
		if(isset($_POST['plano2'])){
			$plano .= $_POST['plano2'];
		}
		if(isset($_POST['plano3'])){
			$plano .= $_POST['plano3'];
		}
		if(isset($_POST['plano4'])){
			$plano4 = $_POST['plano4'];
			$plano = $plano4;
		}
 

		if($senha != $senha2){
			header('Location: cadastraCliente.php?senha=error');
		}else if($email != $email2){
			header('Location: cadastraCliente.php?email=error');
		}else{
			$salt = md5('cliente');
			$senha = crypt($senha,$salt);
			$pass = hash('sha512',$senha);

			require('../cliente.php');
			$cliente = new cliente();
			$cadastra = $cliente->verifica($nome, $email, $pass, $fone, $cpfcnpj, $cep, $rua, $num, $comp, $bairro, $cidade, $estado, $plano);

		}
?>