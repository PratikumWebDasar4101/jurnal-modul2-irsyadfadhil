<?php 
	error_reporting(0);
	$angka = $_GET['angka'];
	for ($i=0; $i < $angka ; $i++) { 
		for ($j=$i; $j < $angka; $j++) { 
			echo "*";
		}
		echo "<br>";	
	}
	$b=0;
	$b1=0;
	//bilangan genap
	echo "genap = ";
	for ($i=0; $i < $angka ; $i++) { 
		$b = ($b+2);
		echo $b;
	}
	echo "<br>";
	//bilangan ganjil
	echo "ganjil = ";
	for ($i=0; $i < $angka ; $i++) { 
		$b1 = ($b1+2);
		echo $b1-1;
	}
?>
