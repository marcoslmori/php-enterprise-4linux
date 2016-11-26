<?php

echo '<pre>';

	$dt1= new DateTime();
	print_r($dt1);
	
	$dt1->setDate(2017,1,1);
	$dt1->setTime(2017,1,1);
	print_r($dt1);
	

	
	$dt2= new DateTime('2016-11-26 00:0:00.123456');
	print_r($dt2);
	$dt2->modify('+2 days');
	print_r($dt2);

	echo $dt2->format('d/m/Y H:i:s.u');

	echo '<hr />';
	
	$dt3 = new DateTime();
	echo $dt3->format('d-m-Y H:i:s');
	$dtTimeZone = new DateTimeZone('America/Rio_branco');
	$dt3->setTimeZone($dtTimeZone);
	echo '<br />';
	echo $dt3->format('d-m-Y H:i:s');








