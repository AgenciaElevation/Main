<?php
	require_once('conexao.php');
	Class Dados extends conexao{ 
        private $titulo; 
		private $subtitulo; 
		private $fone; 
		private $horarioInicial; 
		private $horarioFinal;  
        private $sobre; 

		protected $tabela = 'dados';

		//construtor
		public function __construct(){
			parent::__construct();	
		}
	
	
		public function consulta($dominio){
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
		
		public function editarDados($titulo, $subtitulo, $fone, $whats, $dias, $horarioInicial, $horarioFinal, $maps, $dominio)
		{
			$sql = "UPDATE $this->tabela SET titulo = ?, subtitulo = ?, fone = ?,
				whats = ?, dias = ?, horarioInicial = ?, horarioFinal = ?, maps = ?
				WHERE `site` = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('sssisssss', $titulo, $subtitulo, $fone, $whats, $dias, $horarioInicial, $horarioFinal, $maps, $dominio);
			$stmt->execute();
	
			if ($stmt == true) {
				header('Location:admin.php?edit=alterado');
			} else {
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();
		}

		public function editarConteudo($empresa, $servicos, $equipe, $dominio)
		{
			$sql = "UPDATE $this->tabela SET sobre = ?, servicos = ?, equipe = ?
				WHERE `site` = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('ssss', $empresa, $servicos, $equipe, $dominio);
			$stmt->execute();
	
			if ($stmt == true) {
				header('Location:admin.php?edit=alterado');
			} else {
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();
		}

		public function editarRedes($facebook, $instagram, $twitter, $youtube, $linkedin, $tiktok, $dominio)
		{
			$sql = "UPDATE $this->tabela SET facebook = ?, instagram = ?, twitter = ?,
				youtube = ?, linkedin = ?, tiktok = ?
				WHERE `site` = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('sssssss', $facebook, $instagram, $twitter, $youtube, $linkedin, $tiktok, $dominio);
			$stmt->execute();
	
			if ($stmt == true) {
				header('Location:admin.php?edit=alterado');
			} else {
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();
		}

		public function editarLogo($imagem, $dominio)
		{
			$sql = "UPDATE $this->tabela SET logo = ?
				WHERE `site` = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('ss', $imagem, $dominio);
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









