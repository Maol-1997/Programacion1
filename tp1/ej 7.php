<?php
	$a=0;
	$xd=0;
	do{
		$arreglo[$a] = random_int(1,30);
		$a++;
	}while($a-1 < 10 || $arreglo[$a-1] != 30);
	asort($arreglo);
	$b =(int)(count($arreglo)/2);
	foreach($arreglo as $val){
		$xd++;
		if($xd <= $b)
			$array1[$xd] = $val;
		else
			$array2[$xd] = $val;
	}
	echo "Primer array:<br>";
	foreach($array1 as $val){
		echo $val." ";
	}
	echo "<br>Segundo array:<br>";
	foreach($array2 as $val){
		echo $val." ";
	}
	
?>