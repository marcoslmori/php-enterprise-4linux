<?php

	$xml = file_get_contents('cursos.xml');
	$simpleXML = new SimpleXMLElement($xml);
	var_dump($simpleXML);

	