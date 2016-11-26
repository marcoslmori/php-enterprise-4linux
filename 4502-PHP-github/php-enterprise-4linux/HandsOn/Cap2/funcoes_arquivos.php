<?php

	$fileName = 'teste.txt';
	$stream = fopen($fileName, 'w+');
	fclose($stream);
	
	// chmod
	if(file_exists($fileName)){
		chmod($fileName, 0777);
		echo 'permissao alterada <hr/> <br/>';
	}

	$info = stat($fileName);
	var_dump($info);

	if(! file_exists('touch.txt')){
	
		touch('touch.txt');	
	
	}
	

	if(file_exists('touch.txt')){
		unlink('touch.txt');
	}

	if(file_exists($fileName)){
		copy($fileName, 'teste2.txt');
	}


	rename($fileName, 'teste1.txt');

	$consulta = glob('manipulacao_arquivos/*.txt');
	echo '<pre>';
	print_r($consulta);


	$str = fopen('teste1', w+);
	flock($str, LOCK_EX); //cria uma trava

	flock($str, LOCK_UN)






	







