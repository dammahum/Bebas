<?php
	$Kota = array ("Makassar", "Yogyakarta", "Bulukumba");
	
	echo count ($Kota);
	
	$Baju = ['Gamis', 'Jubah'];
	
	echo count ($Baju);
	
	$Ayam = array (
					"Kate",
					"Jago",
					"Ayam"
					);
	
	echo count ($Ayam);
	
	echo "<br>";
	
	// Contoh Associative 
	
	$pc = array ("Merk1" => "Acer", "Merk2" => "Asus ROG", "Merk3" => "Lenovo");
	
	echo $pc["Merk1"] . "<br>";
	echo $pc["Merk2"] . "<br>";
	echo $pc["Merk3"] . "<br>";
	
	$merkpc = array (5 => "Lenovo", 2 => "Acer", 7 => "Asus ROG");
	
	echo $merkpc[5];
	echo "<br>";
	echo $merkpc[2];
	echo "<br>";	
	echo $merkpc[7];
	
	echo "<br>";
	echo "<br>";
	
	$lapy  = array(
					1 => "Acer",
					2 => "Dell",
					3 => "Lenovo",
					4 => "Fujitsu",
					5 => "Asus",
					6 => "Razer",
					7 => "Apple"
				);
			
		foreach ($lapy as $key => $value)
		{
				echo "Merk Laptop yang ke-" . $key . " adalah " . $value . "<br>";
				echo "<br />";
		}
	
?>