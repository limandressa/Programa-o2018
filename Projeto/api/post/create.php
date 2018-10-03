<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require_once '../../config/Conexao.php';
	require_once '../../model/Post.php';

	$db = new Conexao();
	$conexao = $db->getConexao();
	$post = new Post($conexao);
	$dados = file_get_contents('php://input');
	$dados = json_decode($dados);

	echo json_encode($dados);

	$post->autor = $dados->autor;
	$post->id_categoria = $dados->id_categoria;
	$post->texto = $dados->texto;
	$post->titulo = $dados->titulo;

	if ($post->create()) {
		$res = array('mensagem' =>'Post criado');
		http_response_code(201);
	} else {
		$res = array('mensagem'=> 'nao criou');
	}
	echo json_encode($res);
} else {
	echo json_encode(['mensagem' => 'Metodo não suportado']);
}