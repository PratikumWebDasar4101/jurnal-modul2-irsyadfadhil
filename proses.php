<?php 
	error_reporting(0);
	$angka = $_GET['angka'];
	for ($i=0; $i < $angka ; $i++) { 
		for ($j=$i; $j < $angka; $j++) { 
			echo "*";
		}
		echo "<br>";	
	}
?>
