<?php

	$dom = new DOMDocument();
	$dom->load('cursos.xml');

	$remover = $dom->getElementsByTagName('teste')->item(0);

	$remover->parentNode->removeChild($remover);

	$dom->save('cursos.xml');
	header('Content-Type:text/xml');
	echo $dom->saveXML();

