<?php 

$file = 'test.txt';

if (is_writable(dirname($file))) {

	$fp = fopen($file, 'w');
	fwrite($fp, 'PHP can write');
	fclose($fp);

	echo sprintf('written %s', $file);

} else 
 echo 'PHP cannot write';