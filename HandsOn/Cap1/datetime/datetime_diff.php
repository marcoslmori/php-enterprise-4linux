<?php
// datetime_diff.php
echo '<pre>';

$dt1 = new DateTime();
// $dtInterval = new date_interval('P7D');
$dt2 = new DateTime ('2016-10-10');

$diferenca = $dt1->diff($dt2);
print_r($diferenca);

echo $diferenca->format("%R %m mes(es) %d dia(s) ou %a 	Dias");
