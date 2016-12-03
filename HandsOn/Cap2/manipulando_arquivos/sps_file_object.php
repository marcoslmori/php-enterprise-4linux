<?php

	$file = new SplFileObject('produtos.txt', 'a+');
	// fgets: traz o conteudo da primeira linha
		
	echo '<b>com while</b> <br/>';
	
	while(! $file->eof() ){
			$linha = $file->fgets();
			echo $linha. '<br/>';

	}

	echo '<b>foreach</b> <br/>';

	foreach ($file as $linha ) {
		echo $linha. '<br/>';
	}

	//Archivo temporario - fica em buffer
		$temp = new SplTempFileObject();
		$temp->fwrite('sou um arquivo temporario');
		$temp->rewind();
		echo $temp->fgets();




