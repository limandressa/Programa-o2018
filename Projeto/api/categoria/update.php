<?php

header('Content-Type: application/json');

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {

	require_once '../../config/Conexao.php';
	require_once '../../model/Categoria.php';

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
}

