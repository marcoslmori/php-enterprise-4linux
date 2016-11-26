<?php
	echo date('d/m/y');
	echo '<br />';
	echo date('d-m-y');
	echo '<br />';
	echo date('Y-m-d');
	echo '<br />';
	echo date('d');
	echo '<br />';
	echo date('m');
	echo '<br />';
	echo date('Y');
	echo '<br />';
	echo date('d,m,Y');
	echo '<br />';
	echo date('d m Y');
	echo '<br />';
	echo time();
	echo '<br />';
	echo microtime();


	$proxSemana = time() + (7 * 24 * 60 * 60);

	echo '<br />';
	echo $proxSemana;
	echo '<br />';
	echo 'formatando a variavel $proximaSemana';
	echo '<br />';
	echo date('d-m-Y', $proxSemana);
	
	echo '<br />';
	echo microtime(true);
	echo '<br />';

	echo '<br />';
	echo date('d-m-Y',strtotime('now'));
	echo '<br />';
	echo date('d-m-Y',strtotime('next day'));
	echo '<br />';
	echo 'mostra o primeiro dia da proxima semana';
	echo '<br />';
	echo date('d-m-Y',strtotime('+ 1 week'));
	echo '<br />';
	echo date('d-m-Y',strtotime('next week'));
	echo '<br />';
	echo date('d-m-Y', strtotime('tomorrow'));
	echo '<br />';
	echo date('d-m-Y', strtotime('+ 2 days'));
	echo '<br />';
	echo date('d-m-Y', strtotime('+ 3 month'));
	echo '<br />';
	echo date('d-m-Y', strtotime('+ 3 year'));
	echo '<br />';

	echo '---------------------------------<br />';
	echo 'MAKE TIME<br />';
	echo date('d-m-Y H:i:s', mktime(10,10,10,11,19,16));
	echo '<br />';



	