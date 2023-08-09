<?php
	session_start();
	if (isset($_SESSION['logado']) && $_SESSION['logado'] == true ) {

		$dominio = $_POST['site'];	

		//imagem 1
		if($_FILES['slider1']['tmp_name'] != ''){
			$arquivo1 = $_FILES['slider1']['tmp_name'];
			$ext1 = pathinfo($_FILES['slider1']['name'], PATHINFO_EXTENSION);
			$slider1 = "slider1." . $ext1;

			$destino1 = '../../assets/img/slider/'. $slider1;
			move_uploaded_file($arquivo1, $destino1);
		}else{
			$slider1 = $_POST['sub1'];
		}

		//imagem 2
		if($_FILES['slider2']['tmp_name'] != ''){
			$arquivo2 = $_FILES['slider2']['tmp_name'];
			$ext2 = pathinfo($_FILES['slider2']['name'], PATHINFO_EXTENSION);
			$slider2 = "slider2." . $ext2;

			$destino2 = '../../assets/img/slider/'. $slider2;
			move_uploaded_file($arquivo2, $destino2);
		}else{
			$slider2 = $_POST['sub2'];
		}	

		//imagem 3
		if($_FILES['slider3']['tmp_name'] != ''){
			$arquivo3 = $_FILES['slider3']['tmp_name'];
			$ext3 = pathinfo($_FILES['slider3']['name'], PATHINFO_EXTENSION);
			$slider3 = "slider3." . $ext3;

			$destino3 = '../../assets/img/slider/'. $slider3;
			move_uploaded_file($arquivo3, $destino3);
		}else{
			$slider3 = $_POST['sub3'];	
		}
							
		//imagem 4
		if($_FILES['slider4']['tmp_name'] != ''){
			$arquivo4 = $_FILES['slider4']['tmp_name'];
			$ext4 = pathinfo($_FILES['slider4']['name'], PATHINFO_EXTENSION);
			$slider4 = "slider4." . $ext4;

			$destino4 = '../../assets/img/slider/'. $slider4;
			move_uploaded_file($arquivo4, $destino4);
		}else{
			$slider4 = $_POST['sub4'];	
		}
				
			require_once('../imagens.php');
				$imagem = new imagens();
				$carousel = $imagem->editarCarousel($slider1, $slider2, $slider3, $slider4, $dominio);

}else{
		header('Location: login.php');
	}
