<?php

	$cars=array(
		array("BMW", 26, 37),
		array("Toyota", 50, 60),
		array("volvo", 20, 25),
		array("Pajero", 80, 90)
	);
	for($i=0; $i<4; $i++)
	{
		echo "<p>Row Number $i</p>";
		echo "<ul>";
		for($col=0; $col<3; $col++)
		{
			echo "<li>".$cars[$i][$col]."</li>";
		}
		echo "</ul>";
	}
			
?>