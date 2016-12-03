
erro - checar
<?php

	$dom = new DOMDocument();
	$dom->load('cursos.xml');

	$preco = $dom->getElementsByTagName('curso')->item(0)->getAttribute('preco'); 
	
	$dom->getElementsByTagName('curso')->item(0)->getAttribute('preco'); ('periodo', 'Sabado);

	$periodo = $dom->getElementsByTagName('curso')->item(0)->getAttribute('periodo');
	


	echo $preco;
	echo '<br />';
	echo $periodo;
