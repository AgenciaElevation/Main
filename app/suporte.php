<?php
	require_once('conexao.php');
	Class Suporte extends conexao{ 
        private $dom; 
		private $email;
		private $tiquete; 
		private $feedback; 
		private $finished; 

		protected $tabela = 'suporte';

		//construtor
		public function __construct(){
			parent::__construct();	
		}
	
	
		public function consulta($dom){
			$sql = "SELECT * FROM $this->tabela WHERE dominio = '$dom'";
			$result = $this->conn->query($sql) 
			or die("Falha na consulta");
			
			if (mysqli_num_rows($result) == 0) {
				echo "Não há tiquetes de suporte abertos ainda.";
				echo "<script>$('.tiquetes').hide();</script>";
				echo "<br><br>";
				
			}else{
				return $result;
			}
			$this->conn->close();
		}
		
		public function novoTiquete($dom, $email, $tiquete)
		{
			$sql = "INSERT INTO $this->tabela(dominio, email, tiquete) VALUES(?,?,?)";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('sss', $dom, $email, $tiquete);
			$stmt->execute();
	
			if ($stmt == true) {
				header('Location: meuPlano.php?tiquete=aberto');;
			} else {
				die('falha no cadastro!');
			}
			$stmt->close();
			$this->conn->close();
		}

		public function consultaAbertos()
		{
			$sql = "SELECT * FROM $this->tabela WHERE finished = 0";
			$result = $this->conn->query($sql)
				or die("Falha na consulta");
	
			if ($result == true) {
				return $result;
			} else {
				die("Falha na consulta!");
			}
			$this->conn->close();
		}

		public function consultaALL()
		{
			$sql = "SELECT * FROM $this->tabela";
			$result = $this->conn->query($sql)
				or die("Falha na consulta");
	
			if ($result == true) {
				return $result;
			} else {
				die("Falha na consulta!");
			}
			$this->conn->close();
		}

		public function finalizaTiquete($feedback, $finished, $id)
		{
			$sql = "UPDATE $this->tabela SET feedback = ?, finished = ?
					WHERE id = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('ssi', $feedback, $finished, $id);
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









