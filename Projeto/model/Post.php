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
	public function read($id_categoria=null) {
		if (isset($id_categoria)) {// id tem valor		
		$query = "SELECT id, id_categoria, dt_criacao, texto, titulo, autor FROM 
				 post WHERE id_categoria=:id_categoria ORDER BY titulo";
		//prepara a execucao
		$stmt = $this->conexao->prepare($query);
		$stmt->bindParam('id_categoria', $id_categoria);
	} if (!isset($id_categoria)) {// id nao tem valor	
		$query = "SELECT id, id_categoria, dt_criacao, texto, titulo, autor FROM 
				 post ORDER BY titulo";
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
		$query = "UPDATE post SET titulo=:titulo, texto=:texto, id_categoria:=id_categoria, autor=:autor, dt_criacao=:dt_criacao WHERE id=:id";
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

