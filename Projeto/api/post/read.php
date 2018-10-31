
<?php
	header('Content-Type: application/json');
//arquivo para testar o metodo read()
	include_once '../../config/Conexao.php';
	include_once '../../model/Post.php';

	$db = new Conexao();
	$conexao = $db->getConexao();

	$post = new Post($conexao);

	if (isset($_GET['id_categoria'])){
		$resultado = $post->read($_GET['id_categoria']);	
	}else{
		$resultado = $post->read(); //todos	
	}

	if (sizeof($resultado)>0){
		echo (json_encode($resultado));	
	}else{
		echo (json_encode(['mensagem'=>'Nenhum post']));
	}






