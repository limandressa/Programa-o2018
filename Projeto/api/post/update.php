<?php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {

	require_once '../../config/Conexao.php';
	require_once '../../model/Post.php';

	$db = new Conexao();
	$conexao = $db->getConexao();
	$post = new Post($conexao);
	$dados = file_get_contents('php://input');
	$dados = json_decode($dados);

	//var_dump($dados);

	$post->id = $dados->id;
	$post->autor = $dados->autor;
	$post->id_categoria = $dados->id_categoria;
	$post->texto = $dados->texto;
	$post->titulo = $dados->titulo;
	$post->dt_criacao = $dados->dt_criacao;
	
	if ($post->update()) {
		$res = array('mensagem' => 'Post mudada');
		http_response_code(201);
	} else {
		$res = array('mensagem' => 'não mudou');
	}
	echo json_encode($res);
} else {
	echo json_encode(['mensagem' => 'Método não suportado']);
}


