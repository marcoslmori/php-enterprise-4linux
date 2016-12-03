<?php
	require 'Alunos.php';

	$alunos = new Alunos();

	$dados = json_decode(file_get_contents('php://input'), true);

	$verbo = $_SERVER['REQUEST_METHOD'];

	// Retorna para que est]a consumindo o metodo post, get etc
	//echo $verbo = $_SERVER['REQUEST_METHOD'];

	switch($verbo){
		case 'POST':
			header('HTTP/1.1 400');
			if ($alunos->inserir($dados) == 1){
				echo json_encode(['resposta'=>'dados inseridos com sucesso']);
			}else{
				echo json_encode(['resposta'=>'Falha ao inserir dados']);
			}
			break;

		case 'PUT':
			header('HTTP/1.1 400');
			if ($alunos->atualizar($dados) != 0){
				echo json_encode(['resposta'=>'dados inseridos com sucesso']);
			}else{
				echo json_encode(['resposta'=>'Falha ao inserir dados']);
			}
			break;

		case 'DELETE':
			header('HTTP/1.1 400');
			if ($alunos->deletar($dados) == 1){
				echo json_encode(['resposta'=>'dados deletados com sucesso']);
			}else{
				echo json_encode(['resposta'=>'Falha ao inserir dados']);
			}
			break;

			case 'GET':
				if (isset($_GET['id'])){
			 		echo $alunos->listarPorID($_GET['id']);
			 	}else{
			 	echo $alunos->listar();
			 	}
			break;
		}	
