<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

	$dom = $_POST['dom'];
	$email = $_POST['email'];
	$fone = $_POST['fone'];

	if(isset($_POST['whats'])){
		$whats = $_POST['whats'];
	}
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$num = $_POST['num'];

	if(isset($_POST['comp'])){
		$comp = $_POST['comp'];
	}
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];

		require('../cliente.php');
		$cliente = new cliente();
		$atualiza = $cliente->atualizaDadosCliente($email, $fone, $whats, $cep, $rua, $num, $comp, $bairro, $cidade, $estado, $dom);


}else{
		header('Location: login-cliente.php?');
	}
?>