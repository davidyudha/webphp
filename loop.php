<?php
	//for
	$jum=0;
	$max=20;
	for($i=0; $i<$max ;$i++){
		if($i%2!=0){
			echo $i," ";
			$jum+=$i;
		}
	}
	echo "<br/>","Jumlah bilangan ganjil adalah ",$jum;
	echo "<br/>";

	//while
	$i=0;
	while ($i < $max) {
		if ($i%2!=0) {
			echo $i," ";
		}
		$i++;
	}
	echo "<br/>";
	//do-while
	$i=0;
	do {
		if ($i%2!=0) {
			echo $i," ";
		}
		$i++;
	} while ($i < $max);

