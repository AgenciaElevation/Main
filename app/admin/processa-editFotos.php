<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

		$dominio = $_POST['site'];	

		//imagem 1
		if($_FILES['empresa1']['tmp_name'] != ''){
			$arquivo1 = $_FILES['empresa1']['tmp_name'];
			$ext1 = pathinfo($_FILES['empresa1']['name'], PATHINFO_EXTENSION);
			$empresa1 = "empresa1." . $ext1;

			$destino1 = '../../assets/img/'. $empresa1;
			move_uploaded_file($arquivo1, $destino1);
		}else{
			$empresa1 = $_POST['emp1'];
		}

		//imagem 2
		if($_FILES['empresa2']['tmp_name'] != ''){
			$arquivo2 = $_FILES['empresa2']['tmp_name'];
			$ext2 = pathinfo($_FILES['empresa2']['name'], PATHINFO_EXTENSION);
			$empresa2 = "empresa2." . $ext2;

			$destino2 = '../../assets/img/'. $empresa2;
			move_uploaded_file($arquivo2, $destino2);
		}else{
			$empresa2 = $_POST['emp2'];
		}	

				
			require_once('../imagens.php');
				$imagem = new imagens();
				$carousel = $imagem->editarFotos($empresa1, $empresa2, $dominio);

}else{
		header('Location: login.php');
	}
