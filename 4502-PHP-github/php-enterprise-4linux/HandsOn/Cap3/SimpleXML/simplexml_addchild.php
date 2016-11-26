<?php 

$simpleXML = new SimpleXMLElement('cursos.xml', null, true);

$novo_curso = $simpleXML->addChild('curso');
$novo_curso->addChild('id', '450');
$novo_curso->addChild('nome', 'Linux fundamentals in cloud');
$novo_curso->addChild('categoria', 'linux');

$simpleXML->saveXML('cursos.xml');

header('Content-type: text/xml');

echo $simpleXML->asXML();
