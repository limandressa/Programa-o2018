<?php

	header('Content-Type: application/json');

	include_once '../../config/Conexao.php';
	include_once '../../model/Categoria.php';

	$db = new Conexao();
	$conexao = $db->getConexao();

	$cat = new Categoria($conexao);

	$dados = file_get_contents('php://input');
	$dados = json_decode($dados);

	//var_dump($dados);

	$cat->id = $dados->id;

	if($resultado = $cat->delete()){
		echo json_encode(['mensagem' => 'Categoria excluída']);
	}else{
		echo json_encode(['mensagem' => 'Erro ao excluir categoria']);
	}
	

