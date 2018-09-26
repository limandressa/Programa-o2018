<?php

header('Content-Type: application/json');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require_once '../../config/Conexao.php';
	require_once '../../model/Categoria.php';

	$db = new Conexao();
	$conexao = $db->getConexao();

	$cat = new Categoria($conexao);

	$dados = file_get_contents('php://input');

	$dados = json_decode($dados);
	var_dump($dados);

	$cat->nome = $dados->nome;
	$cat->descricao = $dados->descricao;

	if ($cat->create()) {
		$res = array('mensagem', 'Categoria criada');
		http_response_code(201);
	} else {
		$res = array('mensagem', 'não criou');
	}

	echo json_encode($res);
} else {
	echo json_encode(['mensagem' => 'Método não suportado']);
}

