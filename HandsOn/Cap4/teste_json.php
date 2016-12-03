<?php
echo '<pre>';
	$usuario =
	[
		'nome' => 'Nome do Usuario',
		'email'=> 'email@gmail.com',
		'endereco' => [
						'rua' => 'Vergueiro',
						'numero' => '3047',
						'bairro' => 'Vila Mariana',
					  ]
	];


	print_r($usuario);
	echo '<hr />';
	// retorna um array associativo
	$json = json_encode($usuario);
	var_dump($json);
	echo '<hr />';
	$arr = json_decode($json, true);
	var_dump($arr);
