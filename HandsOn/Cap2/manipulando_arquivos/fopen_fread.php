<?php
// fopen_fread.php

	$file = fopen('emails.txt', 'a+');
	$dados = fread($file, 4096);
	echo '<br />';
	echo nl2br($dados);
