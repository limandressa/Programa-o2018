<?php
/**
	Classe que manipula os dados de categorias
*/

class Categoria
{
	//atributos correspondentes aos da tabela categoria
	public $id;
	public $nome;
	public $descricao;
	//variável para a conexão
	private $conexao;

	//sempre que um objeto é instanciado
	//já recebe a conexão
	public function __construct($con)
	{
		$this->conexao = $con;
	}

	//faz uma consulta e retorna um resultado
	public function read($id=null) {
		if (isset($id)) {// id tem valor		
		$query = "SELECT id, nome, descricao FROM 
				 categoria WHERE id=:id ORDER BY nome";
		//prepara a execucao
		$stmt = $this->conexao->prepare($query);
		$stmt->bindParam('id', $id);
	} if (!isset($id)) {// id nao tem valor	
		$query = "SELECT id, nome, descricao FROM 
				 categoria ORDER BY nome";
		//prepara a execucao
		$stmt = $this->conexao->prepare($query);
		}
		//executa a consulta
		$stmt->execute();
		//transforma os resultados em um array
		$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//retorna o resultado
		return $resultado;
	}
 //esse é o meu --------------
	public function create() {
		try {
		$query = "INSERT INTO categoria (id, nome, descricao) values(:id, :nome, :descricao)";
		//prepara a execucao
		$stmt = $this->conexao->prepare($query);
		$stmt->bindParam('id', $this->id);
		$stmt->bindParam('nome', $this->nome);
		$stmt->bindParam('descricao', $this->descricao);
		//executa a consulta
		if ($stmt->execute()) {
			return true;
		} else { 
			return false; 
		}
		//transforma os resultados em um array
		$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//retorna o resultado
		return true;
		} catch(Exception $e) {
  		    die("erro com o servidor: " . $e->getMessage());
		}
	}

	//tá errado ainda
	public function update() {
				
		$query = "UPDATE categoria SET nome=:nome, descricao=:descricao WHERE id=:id";
		//prepara a execucao
		$stmt = $this->conexao->prepare($query);
		$stmt->bindParam('id', $this->$id);
		$stmt->bindParam('nome', $this->$nome);
		$stmt->bindParam('descricao', $this->$descricao);
	
		//executa a consulta
		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
		
		////transforma os resultados em um array
		//$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
		////retorna o resultado
		//return $resultado;
	}

	public function delete($id=null) {
		if (isset($id)) {// id tem valor		
		$query = "DELETE * FROM categoria WHERE id=:id";
		//prepara a execucao
		$stmt = $this->conexao->prepare($query);
		$stmt->bindParam('id', $id);
		}
		//executa a consulta
		$stmt->execute();
		//transforma os resultados em um array
		$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//retorna o resultado
		return $resultado;
	}
}

