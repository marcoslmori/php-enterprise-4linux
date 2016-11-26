<?php
// date_timezone_set.php
	setlocale(LC_ALL,'pt_BR.utf8');
	date_default_timezone_set('America/Sao_Paulo');
	echo strftime('%A, %d de %B %Y');