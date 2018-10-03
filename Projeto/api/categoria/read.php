<?php
	header('Content-Type: application/json');
//arquivo para testar o metodo read()
	include_once '../../config/Conexao.php';
	include_once '../../model/Categoria.php';

	$db = new Conexao();
	$conexao = $db->getConexao();

	$cat = new Categoria($conexao);

	if (isset($_GET['id'])){
		$resultado = $cat->read($_GET['id']);	
	}else{
		$resultado = $cat->read(); //todos	
	}

	if (sizeof($resultado)>0){
		echo (json_encode($resultado));	
	}else{
		echo (json_encode(['mensagem'=>'Nenhuma categoria cadastrada']));
	}

