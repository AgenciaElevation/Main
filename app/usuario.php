<?php
require_once('conexao.php');
class usuario extends conexao
{
	private $username;
	private $email;
	private $senha;
	private $tabela = 'login';

	public function __construct()
	{
		parent::__construct();
	}


	public function getUsername()
	{
		return $this->username;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}


	// logar username
	public function logar($username, $pass){

		$sql = "SELECT id, username, password FROM $this->tabela WHERE username = '$username' 
			AND password = '$pass' AND status = 1";
		$result = $this->conn->query($sql);

		if (mysqli_num_rows($result) == 1) {

			session_start();
			$_SESSION['logado'] = true;
			$_SESSION['user'] = $username;
			$row = mysqli_fetch_assoc($result);
			$_SESSION['myID'] = $row['id'];

			header('Location: admin.php');
		} else {
			header('Location: login.php?erro=login');
		}
		$this->conn->close();
	}

	//verifica no banco
	public function verifica($user, $pass, $mail){

		$sql = "SELECT username, email FROM $this->tabela WHERE username = '$user' 
			OR email = '$mail'";
		$result = $this->conn->query($sql);

		if (mysqli_num_rows($result) >= 1) {
			header('Location:admin.php?insert=error');
		} else {
				$this->cadastraUser($user, $pass, $mail);
		}
		$this->conn->close();
	}

	//cadastrar novo usuário
	public function cadastraUser($user, $pass, $mail)
	{
		$sql = "INSERT INTO $this->tabela(username,password,email) VALUES(?,?,?)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('sss', $user, $pass, $mail);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:admin.php?insert=true');
		} else {
			die('falha no cadastro!');
		}
		$stmt->close();
		$this->conn->close();
	}

	//consulta no banco
	public function listar()
	{
		$sql = "SELECT * FROM $this->tabela";
		$result = $this->conn->query($sql);

		if ($result == true) {
			return $result;
		} else {
			die("Falha na consulta!");
		}
		$this->conn->close();
	}

	// consulta por id
	public function consultaID($id){
		$nome = '';
		$email = '';

		$sql = "SELECT username,email FROM $this->tabela WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('i', $id);
		$stmt->execute();

		if ($stmt == true) {
			$stmt->store_result();
			$stmt->bind_result($nome, $email);
			$stmt->fetch();

			$this->setUsername($nome);
			$this->setEmail($email);;
		} else {
			die("Falha na consulta!");
		}


		$stmt->close();
		$this->conn->close();
	}


	//editar dados
	public function editar($username, $email, $id)
	{
		$sql = "UPDATE $this->tabela SET username = ?, email = ?
				WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('ssi', $username, $email, $id);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:admin.php?edit=alterado');
		} else {
			die("Falha no atualizar!");
		}
		$stmt->close();
		$this->conn->close();
	}

		//desativa admin
		public function desativar($id){
			$sql = "UPDATE $this->tabela SET status = 0 WHERE id = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('i', $id);
			$stmt->execute();
	
			if ($stmt == true) {
				header('Location:admin.php?edit=alterado');
			} else {
				die("Falha no atualizar!");
			}
			$stmt->close();
			$this->conn->close();
		}

		//ativa admin
		public function ativar($id){
		$sql = "UPDATE $this->tabela SET status = 1 WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('i', $id);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:admin.php?edit=alterado');
		} else {
			die("Falha no atualizar!");
		}
		$stmt->close();
		$this->conn->close();
	}


	//trocar senha
	public function novaSenha($pass, $id)
	{
		$sql = "UPDATE $this->tabela SET password = ?
			WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('si', $pass, $id);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:admin.php?edit=alterado');
		} else {
			die("Falha no atualizar!");
		}
		$stmt->close();
		$this->conn->close();
	}


	//excluir username
	public function excluir($id)
	{
		$sql = "DELETE FROM $this->tabela
			WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('i', $id);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:admin.php?delete=true');
		} else {
			die("Falha ao apagar!");
		}
		$stmt->close();
		$this->conn->close();
	}
} //fim da classe username
