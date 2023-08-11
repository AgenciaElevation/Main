<?php
require_once('conexao.php');
class cliente extends conexao
{
	private $nome;
	private $dom;
	private $status;
	private $id;
	private $email;
	private $senha;
	private $fone;
	private $whats;
	private $cpfcnpj;
	private $cep;
	private $rua;
	private $num;
	private $comp;
	private $bairro;
	private $cidade;
	private $estado;
	private $contrato;
	private $plano;
	private $pgto;

	private $tabela = 'clientes';


	public function __construct()
	{
		parent::__construct();
	}


	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getDom()
	{
		return $this->dom;
	}

	public function setDom($dom)
	{
		$this->dom = $dom;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->status = $status;
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

	public function getFone()
	{
		return $this->fone;
	}

	public function setFone($fone)
	{
		$this->fone = $fone;
	}

	public function getWhats()
	{
		return $this->whats;
	}

	public function setWhats($whats)
	{
		$this->whats = $whats;
	}

	public function getCpfcnpj()
	{
		return $this->cpfcnpj;
	}

	public function setCpfcnpj($cpfcnpj)
	{
		$this->cpfcnpj = $cpfcnpj;
	}

	public function getCep()
	{
		return $this->cep;
	}

	public function setCep($cep)
	{
		$this->cep = $cep;
	}

	public function getRua()
	{
		return $this->rua;
	}

	public function setRua($rua)
	{
		$this->rua = $rua;
	}

	public function getNum()
	{
		return $this->num;
	}

	public function setNum($num)
	{
		$this->num = $num;
	}

	public function getComp()
	{
		return $this->comp;
	}

	public function setComp($comp)
	{
		$this->comp = $comp;
	}

	public function getBairro()
	{
		return $this->bairro;
	}

	public function setBairro($bairro)
	{
		$this->bairro = $bairro;
	}

	public function getCidade()
	{
		return $this->cidade;
	}

	public function setCidade($cidade)
	{
		$this->cidade = $cidade;
	}

	public function getEstado()
	{
		return $this->estado;
	}

	public function setEstado($estado)
	{
		$this->estado = $estado;
	}

	public function getContrato()
	{
		return $this->contrato;
	}

	public function setContrato($contrato)
	{
		$this->contrato = $contrato;
	}

	public function getPlano()
	{
		return $this->plano;
	}

	public function setPlano($plano)
	{
		$this->plano = $plano;
	}

	public function getPgto()
	{
		return $this->pgto;
	}

	public function setPgto($pgto)
	{
		$this->pgto = $pgto;
	}

	


	// logar cliente
	public function logar($email, $senha)
	{

		$sql = "SELECT id, email, senha FROM $this->tabela WHERE email = '$email' 
			AND senha = '$senha' AND status = 1";
		$result = $this->conn->query($sql);

		if (mysqli_num_rows($result) == 1) {

			session_start();
			$_SESSION['logado'] = true;
			$row = mysqli_fetch_assoc($result);
			$_SESSION['ID'] = $row['id'];

			header('Location: cliente.php');
		} else {
			header('Location: index.php?erro=login');
		}
		$this->conn->close();
	}

	//verifica no banco
	public function verifica($nome, $email, $senha, $fone, $cpfcnpj, $cep, $rua, $num, $comp, $bairro, $cidade, $estado)
	{

		$sql = "SELECT cpfcnpj, email FROM $this->tabela WHERE cpfcnpj = '$cpfcnpj' 
			OR email = '$email'";
		$result = $this->conn->query($sql);

		if (mysqli_num_rows($result) >= 1) {
			header('Location:cadastraCliente.php?insert=error');
		} else {
			$this->cadastracliente($nome, $email, $senha, $fone, $cpfcnpj, $cep, $rua, $num, $comp, $bairro, $cidade, $estado);
		}
	}

	//cadastrar novo cliente
	public function cadastracliente($nome, $email, $senha, $fone, $cpfcnpj, $cep, $rua, $num, $comp, $bairro, $cidade, $estado)
	{
		$sql = "INSERT INTO $this->tabela(nome, email, senha, fone, cpfcnpj, cep, rua, num, comp, bairro, cidade, estado) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('sssssssissss', $nome, $email, $senha, $fone, $cpfcnpj, $cep, $rua, $num, $comp, $bairro, $cidade, $estado);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:index.php?cadastro=completo');
			echo "cadastrado";
		} else {
			die('falha no cadastro!');
		}
		$stmt->close();
		$this->conn->close();
	}

	// consulta por id
	public function consultaID($id)
	{
		$dom = '';
		$nome = '';
		$status = '';
		$email = '';
		$fone = '';
		$whats = '';
		$cpfcnpj = '';
		$cep = '';
		$rua = '';
		$num = '';
		$comp = '';
		$bairro = '';
		$cidade = '';
		$estado = '';
		$contrato = '';
		$plano = '';
		$pgto = '';

		$sql = "SELECT dominio, nome, `status`, email, fone, whats, cpfcnpj, rua, num, comp, bairro, cidade, estado, cep, data_contrato, plano, pgto  FROM $this->tabela WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('i', $id);
		$stmt->execute();

		if ($stmt == true) {
			$stmt->store_result();
			$stmt->bind_result($dom, $nome, $status, $email, $fone, $whats, $cpfcnpj, $rua, $num, $comp, $bairro, $cidade, $estado, $cep, $contrato, $plano, $pgto);
			$stmt->fetch();

			$this->setDom($dom);
			$this->setNome($nome);
			$this->setStatus($status);
			$this->setEmail($email);
			$this->setFone($fone);
			$this->setWhats($whats);
			$this->setCpfcnpj($cpfcnpj);
			$this->setRua($rua);
			$this->setNum($num);
			$this->setComp($comp);
			$this->setBairro($bairro);
			$this->setCidade($cidade);
			$this->setEstado($estado);
			$this->setCep($cep);
			$this->setContrato($contrato);
			$this->setPlano($plano);
			$this->setPgto($pgto);
		} else {
			die("Falha na consulta!");
		}
		$stmt->close();
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


	//editar dados
	public function editar($cliente, $email, $id)
	{
		$sql = "UPDATE $this->tabela SET cliente = ?, email = ?
				WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('ssi', $cliente, $email, $id);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:cliente.php?edit=alterado');
		} else {
			die("Falha no atualizar!");
		}
		$stmt->close();
		$this->conn->close();
	}

	public function editaCliente($dom, $id)
	{
		$sql = "UPDATE $this->tabela SET dominio = ?
				WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('si', $dom, $id);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:showClients.php?edit=alterado');
		} else {
			die("Falha no atualizar!");
		}
		$stmt->close();
		$this->conn->close();
	}

	public function atualizaDadosCliente($email, $fone, $whats, $cep, $rua, $num, $comp, $bairro, $cidade, $estado, $dom)
	{
		$sql = "UPDATE $this->tabela SET email = ?, fone = ?, whats = ?, cep = ?, 
				rua = ?, num = ?, comp = ?, bairro  = ?, cidade  = ?, estado  = ?
				WHERE dominio = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('ssississsss', $email, $fone, $whats, $cep, $rua, $num, $comp, $bairro, $cidade, $estado, $dom);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:meusDados.php?edit=alterado');
		} else {
			die("Falha no atualizar!");
		}
		$stmt->close();
		$this->conn->close();
	}

	//trocar senha
	public function novaSenha($senha, $id)
	{
		$sql = "UPDATE $this->tabela SET senhaword = ?
			WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('si', $senha, $id);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:cliente.php?edit=alterado');
		} else {
			die("Falha no atualizar!");
		}
		$stmt->close();
		$this->conn->close();
	}

	//desativa cliente
	public function desativar($id)
	{
		$sql = "UPDATE $this->tabela SET status = 0 WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('i', $id);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:showClients.php?edit=alterado');
		} else {
			die("Falha no atualizar!");
		}
		$stmt->close();
		$this->conn->close();
	}

	//ativa cliente
	public function ativar($id)
	{
		$sql = "UPDATE $this->tabela SET status = 1 WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('i', $id);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:showClients.php?edit=alterado');
		} else {
			die("Falha no atualizar!");
		}
		$stmt->close();
		$this->conn->close();
	}

	//confirma pgto
	public function confirmaPgto($hoje, $id)
	{
		$sql = "UPDATE $this->tabela SET data_contrato = ?, pgto = 1 WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('si', $hoje, $id);
		$stmt->execute();

		if ($stmt == true) {
			header('Location:showClients.php?edit=alterado');
		} else {
			die("Falha no atualizar!");
		}
		$stmt->close();
		$this->conn->close();
	}



} //fim da classe cliente

