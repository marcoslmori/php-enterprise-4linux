<?php

	$dom = new DOMDocument();
	$dom->load('cursos.xml');

	// print_r($dom->getElementsByTagName('curso'));
	$categorias = $dom->getElementsByTagName('categoria');
	$categorias->item(2)->nodeValue = 'PHP';

	// print_r($titulo);

	$dom->save('cursos.xml');

	header('Content-Type:text/xml');

	echo $dom->saveXML();