<?php 
	
	$x = rand(0, 100);
	echo "Number " . $x . "<br />";

	$lilac = 1;
	$peony = 1;
	$tulip = 0;

	while ($lilac < $x) {
		$tulip = $lilac;
		$lilac = $lilac + $peony;
		$peony = $tulip;
	};
	if ($lilac > $x) {
		echo "Задуманное число НЕ входит в числовой ряд";
	} elseif ($lilac = $x) {
		echo "Задуманное число входит в числовой ряд";
	};

?>
