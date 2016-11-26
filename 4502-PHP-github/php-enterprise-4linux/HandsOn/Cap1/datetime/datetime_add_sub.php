<?php
// datetime_add_sub.php
	echo '<pre>';

	$dtIntervalo = new DateInterval('P7D');

	echo '<hr />';
	$dt1 = new DateTime();
	$dt1->add($dtIntervalo);
	print_r($dt1);

	echo '<hr />';
	$dt2 = new DateTime();
	$dt2->sub($dtIntervalo);
	print_r($dt2);


	