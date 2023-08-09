<?php
date_default_timezone_set('America/Sao_paulo');

	Abstract Class conexao{
		public $dominio = "http://www.agenciaelevation.com.br";
		protected $servidor = '198.136.59.49';
		protected $user = 'agenciae_dev';
		protected $pass = '#P4$$w0Rd@mPm1973';
		protected $banco = 'agenciae_mainBD';
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