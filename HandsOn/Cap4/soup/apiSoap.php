<?php

	ini_set('soap.wsdl_cache_enabled', '0');

	require 'alunos.php';

	$oAluno = new Alunos();

	$serverSoap = new SoapServer('http://localhost/4502-PHP/4502-PHP-github/php-enterprise-4linux/HandsOn/Cap4/soup/wsdlAlunos.wsdl');

	$serverSoap->setObject($oAluno);

	$serverSoap->handle();


