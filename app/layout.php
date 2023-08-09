<?php
	require_once('conexao.php');
	Class layout extends conexao{
		private $template;
		private $cor;
		private $tabela = 'layout';
		
		public function __construct(){
			parent::__construct();
		}
		
		//consulta
		public function consulta(){
			$sql = "SELECT * FROM $this->tabela";
			$result = $this->conn->query($sql) 
			or die("Falha na consulta");
			
			if($result == true){
				return $result;
			}else{
				die("Falha na consulta!");
			}
			$this->conn->close();
		}
		
		//trocar cor
		public function mudarCor($cor){
			$sql = "UPDATE $this->tabela SET cor = ?";

			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('s',$cor,);
			$stmt->execute();
			
			if($stmt == true){
				header('Location:admin.php?edit=alterado');
			}else{
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();	
		}

		
} 
	