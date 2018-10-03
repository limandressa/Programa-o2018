<?php

/*header('Content-Type: application/json');

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {



	$dados = json_decode(file_get_contents('php://input', true));

	$db = new Conexao();
	$conexao = $db->getConexao();

	$cat = new Categoria($conexao);

	$cat->id = $dados->id;
	$cat->nome = $dados->nome;
	$cat->descricao = $dados->descricao;

	if ($cat->update()) {
		$dados = ['mensagem' => 'Mudou'];
	} else {
		$dados = ['mensagem' => 'Não mudou'];
	}

	echo json_encode($dados);
} else {
	echo json_encode(['mensagem' => 'Método não suportado']);
}*/

/*header('Content-Type: application/json; charset=utf-8');
	require_once '../../config/Conexao.php';
	require_once '../../model/Categoria.php';
if($_SERVER['REQUEST_METHOD']!='PUT') die('ERRO: Método errado');
$db = new Conexao();
$cat = new Categoria($db->getConexao());
try{
    $values = json_decode(file_get_contents('php://input'),true);
    if(!isset($values)||$values=="") die("ERRO: informe os valores do usuário corretamente");
    if(isset($_GET['id']) && $_GET['id']>0){
        $cat->update($values,$_GET['id']);
    }else{
        die('ERRO: informe o id corretamente');
    }
}catch(PDOException $e){
    die("ERRO: ".$e->getMessage());
}*/


header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {

	require_once '../../config/Conexao.php';
	require_once '../../model/Categoria.php';

	$db = new Conexao();
	$conexao = $db->getConexao();
	$cat = new Categoria($conexao);
	$dados = file_get_contents('php://input');
	$dados = json_decode($dados);

	//var_dump($dados);

	$cat->id = $dados->id;
	$cat->nome = $dados->nome;
	$cat->descricao = $dados->descricao;
	
	if ($cat->update()) {
		$res = array('mensagem' => 'Categoria mudada');
		http_response_code(201);
	} else {
		$res = array('mensagem' => 'não mudou');
	}
	echo json_encode($res);
} else {
	echo json_encode(['mensagem' => 'Método não suportado']);
}


