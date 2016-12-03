<?php
// eh o cara que esta consultando

ini_set('soap.wsdl_cache_enabled', '0');

$client = new SoapClient('http://localhost/4502-PHP/4502-PHP-github/php-enterprise-4linux/HandsOn/Cap4/soup/wsdlAlunos.wsdl');
// $retorno = json_decode($client->ListarAlunos(), true);
$retorno = json_decode($client->ListarPorId(1), true);
var_dump($retorno);