<?php

	header('Content-Type: application/json');

	include_once '../../config/Conexao.php';
	include_once '../../model/Post.php';

	$db = new Conexao();
	$conexao = $db->getConexao();

	$post = new Post($conexao);

	$dados = file_get_contents('php://input');
	$dados = json_decode($dados);

	//var_dump($dados);

	$post->id = $dados->id;

	if($resultado = $post->delete()){
		echo json_encode(['mensagem' => 'Post excluído']);
	}else{
		echo json_encode(['mensagem' => 'Erro ao excluir']);
	}
	