<?php

$file = new SplFileObject('clientes.csv', 'r');
// ignora linhas vazias do arquivo ldo
$file->setflags(SplFileObject::SKIP_EMPTY);
	// fgets: traz o conteudo da primeira linha nao funcionou muito bem
	
	// echo '<b>while</b> <br/>';

	echo '<pre>';

	while(! $file->eof() ){
			$linha = $file->fgetcsv(';');
			if($linha[0]){
			// para debugar a estrutura da variavel var_dump($linha);
			// print_r($linha);
			echo 'Nome: '.$linha[0]. '<br/>';
			echo 'Email: '.$linha[1]. '<br/>';
			echo 'CPF: '.$linha[2]. '<br/>';
			echo '<hr />';
			}
		
	}
	