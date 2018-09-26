<?php 

/**
* 
**/
class Conexao
{
	//credenciais de conexao ao BD
	private $host = 'localhost';
	private $dbname = 'blog';
	private $user = 'root';
	private $pass = '';
	//variável que vai armazenar a conexao feita
	private $conexao;

	//método que vai efetuar a conexao e retorná-la
	public function getConexao() {
		$this->conexao = null; //a conexao dessa classe é null
		try {
			$this->conexao = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->pass);
		} catch (PDOException $e) {
			echo "Erro de conexão: ".$e->getMessage();
		}
		//ao final, retorna a conexao efetuada
		return $this->conexao;
	}

}