<?php

	$dom = new DOMDocument();

	$xml = file_get_contents('cursos.xml');

 	// carregando por meio de uma variavel
	$dom->loadXML($xml);
	var_dump($dom);

	// carregando direto  de um arquivo externo
	$dom->load('cursos.xml');

	var_dump($dom);


	