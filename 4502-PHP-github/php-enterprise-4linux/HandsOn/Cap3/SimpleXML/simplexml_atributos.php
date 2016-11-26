<?php

	$simpleXML = new SimpleXMLElement('cursos.xml', null, true);

	// recuperando os atributos
	$attrs = $simpleXML->curso[0]->attributes();


	// alterando os atributos
	$attrs->preco='900';

	// removendo os atributos
	unset($attrs->periodo);

	// adicionando atributos
	$simpleXML->curso[0]->addAttribute('periodo', 'noturno');

	$simpleXML->saveXML('cursos.xml');

	//var_dump($attrs);
	//print_r($attrs);

	header('Content-type: text/xml');

	echo $simpleXML->asXML();