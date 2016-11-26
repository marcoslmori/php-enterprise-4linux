<?php
// file_get_contentes.php

	// $file = file_get_contents('emails.txt');
	// echo nl2br($file);
	echo '<hr/>';
	file_put_contents('emails.txt',"email@terra.com.br \n",FILE_APPEND);
	$file = file_get_contents('emails.txt');
	echo nl2br($file);