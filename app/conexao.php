<?php
date_default_timezone_set('America/Sao_paulo');

	Abstract Class conexao{
		public $dominio = "http://www.agenciaelevation.com.br";
		private $servidor = 'localhost';
		private $user = 'root';
		private $pass = '';
		private $banco = 'elevation';
		protected $conn;
		
		public function __construct(){
			$this->conexao();
		}
			
		private function conexao(){
			$this->conn = new mysqli($this->servidor, 
			$this->user, $this->pass, $this->banco);
			
		}
	}
?>