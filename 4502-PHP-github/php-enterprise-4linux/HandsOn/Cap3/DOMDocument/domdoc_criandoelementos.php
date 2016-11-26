<?php

	$dom = new DOMDocument();
	$dom->load('cursos.xml');

	
	$cursos = $dom->getElementsByTagName('curso');
	
	
	foreach ($cursos as $item) {
		$carga = $dom->createElement('carga_horario', '40');
		$item->appendChild($carga);
	}

	$dom->save('cursos.xml');

	header('Content-Type:text/xml');

	echo $dom->saveXML();
