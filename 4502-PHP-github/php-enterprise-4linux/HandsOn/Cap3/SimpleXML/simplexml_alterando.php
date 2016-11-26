<?php
	$simpleXML = new SimpleXMLElement('cursos.xml', null, true);

	//var_dump($simpleXML);

	// alterando o titulo


	$simpleXML->curso[0]->categoria="PHP";
	$simpleXML->saveXML('cursos.xml');


	header('Content-Type:text/xml');

	echo $simpleXML->asXML();


