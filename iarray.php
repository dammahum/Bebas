<?php
	$hp= array("Samsung","Asus","Xiaomi");
	
	sort($hp);
	foreach ($hp as $tlp)
	{
			echo "Merk Hp : $tlp";
			echo "<br>";
	}
	
	echo "<hr>";
	
	$laptop= array ("Jenis" => "Acer", "RAM" => "4GB", "HDD" => "500GB");
	foreach ($laptop as $k => $val) {
		echo "$k" . ": " . "$val";
		echo "<br>";
	}
	
	echo "<hr>";
	
 
	$bunga = array( array("Mawar", 125 , 15),
					array("Edelweis", 75 , 25),
					array("Angrek", 115 , 7) 
             ); 
			 
	echo $bunga[0][0]." Harga ".$bunga[0][1]." Anda Dapat Membeli ".$bunga[0][2]."<br />";
	echo $bunga[1][0]." Harga ".$bunga[1][1]." Anda Dapat Membeli ".$bunga[1][2]."<br />";
	echo $bunga[2][0]." Harga ".$bunga[2][1]." Anda Dapat Membeli ".$bunga[2][2]."<br />";
	
	echo "<ol>";
	for ($row = 0; $row < 3; $row++)
	{
    echo "<li><b>Baris $row</b>";
    echo "<ul>";

    for ($col = 0; $col < 3; $col++)
    {
        echo "<li>".$bunga[$row][$col]."</li>";
    }

    echo "</ul>";
    echo "</li>";
	}
	echo "</ol>";
?>