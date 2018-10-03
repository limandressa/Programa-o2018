<?php

class Post
{

	public $id;
	public $titulo;
	public $texto;
	public $id_categoria;
	public $dt_criacao;
	public $autor;

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



	public function create() {
		try {
		$query = "INSERT INTO post (id, titulo, texto, id_categoria, autor, dt_criacao) 
		values(:id, :titulo, :texto, :id_categoria, :autor, :dt_criacao)";
		//prepara a execucao
		$stmt = $this->conexao->prepare($query);
		$stmt->bindParam('id', $this->id);
		$stmt->bindParam('titulo', $this->titulo);
		$stmt->bindParam('texto', $this->texto);
		$stmt->bindParam('id_categoria', $this->id_categoria);
		$stmt->bindParam('autor', $this->autor);
		$stmt->bindParam('dt_criacao', $this->dt_criacao);
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



		public function update() {
		try {
		$query = "UPDATE categoria SET nome=:nome, descricao=:descricao WHERE id=:id";
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

		public function delete() {
	
			$query = "DELETE FROM categoria WHERE id=:id";
			//prepara a execucao
			$stmt = $this->conexao->prepare($query);
			$stmt->bindParam('id', $this->id);
			if($stmt->execute()){
				return true;
			}else{
				return false;
			}
		} 

}

