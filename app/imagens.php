<?php
	require_once('conexao.php');
	Class Imagens extends conexao{

		protected $tabela = 'imagens';

		//construtor
		public function __construct(){
			parent::__construct();	
		}
	
	
		public function consultaImagens($dominio){
			$sql = "SELECT * FROM $this->tabela WHERE `site` = '$dominio'";
			$result = $this->conn->query($sql) 
			or die("Falha na consulta");
			
			if($result == true){
				return $result;
			}else{
				die("Falha na consulta!");
			}
			$this->conn->close();
		}
		
		public function editarCarousel($slider1, $slider2, $slider3, $slider4, $dominio)
		{
			$sql = "UPDATE $this->tabela SET slider1 = ?, slider2 = ?, slider3 = ?, slider4 = ?
				WHERE `site` = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('sssss', $slider1, $slider2, $slider3, $slider4, $dominio);
			$stmt->execute();
	
			if ($stmt == true) {
				header('Location:admin.php?edit=alterado');
			} else {
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();
		}
		
		public function resetarCarousel($dominio)
		{
			$sql = "UPDATE $this->tabela SET slider1 = default, slider2 = default, slider3 = default, slider4 = default
				WHERE `site` = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('s', $dominio);
			$stmt->execute();
	
			if ($stmt == true) {
				header('Location:admin.php?edit=alterado');
			} else {
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();
		}


		public function editarFotos($empresa1, $empresa2, $dominio)
		{
			$sql = "UPDATE $this->tabela SET empresa1 = ?, empresa2 = ?
				WHERE `site` = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('sss', $empresa1, $empresa2, $dominio);
			$stmt->execute();
	
			if ($stmt == true) {
				header('Location:admin.php?edit=alterado');
			} else {
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();
		}
	}
?>









