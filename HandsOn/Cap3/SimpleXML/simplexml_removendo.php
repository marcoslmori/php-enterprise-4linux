<?php

$simpleXML = new SimpleXMLElement('cursos.xml', null, true);

unset($simpleXML->curso[0]->teste);

$simpleXML->saveXML('cursos.xml');

header('Content-type: text/xml');

echo $simpleXML->asXML();