<?php
// fopen_fread.php

	$file = fopen('produtos.txt', 'w');

	fwrite($file, "Mouse \n");
	fwrite($file, "Teclado \n");
	fwrite($file, "Monitor \n");
	fwrite($file, "Mousepad \n");
	fclose($file);
	
	$file = fopen('produtos.txt', 'a+');
	
	$dados = fread($file, 4096);
	
	echo '<br />';
	echo nl2br($dados);



	fclose($file);
