<?php
	$a = array(0,'satu',1,'dua','tiga',3);
	echo $a;
	var_dump($a);
	echo "<hr/>";
	print_r($a);

	echo "<br/>";

	$b = array('key' => 0 ,'angka' => 'ganjil', 1 => 'satu', 2 => 458968);
	print_r($b);
	echo "<br/>";

	//$b[] = 'value';
	$b[4]='value2';
	print_r($b);

	$b[] = $a //menjadi multidimensioanal array

	//echo "<br/>";

	$a = array(1,2,3,4,5);

	$a[] = 5;
	$a[7] = 5;
	$a[1] = 5;
	$a['satu'] = 5;

	unset($a['sepuluh']);
	unset($a[4]);
	unset($a);

	//susunan array = 1,5,3,4,5,5,5 

	print_r($a);

	foreach ($b as $key => $value) {
		echo "$key <br/>";
	}