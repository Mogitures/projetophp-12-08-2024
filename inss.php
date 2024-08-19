<?php 

	$sal = 2300;
	$sald = 0;
	$bruto = "Salário bruto: ";
	$porcent = "Procentagem do desconto: ";
	$saldisc = "Salário com desconto: ";

	echo "<b>";

	if ($sal <= 1500) {
		
		$sald = $sal-($sal*0.10);
		echo "$bruto $sal<br>$porcent 10%<br>$saldisc $sald";

	}else if($sal >= 1501 && $sal <= 1600){

		$sald = $sal-($sal*0.15);
		echo "$bruto $sal<br>$porcent 15%<br>$saldisc $sald";

	}else if($sal >= 1601 && $sal <= 1800){

		$sald = $sal-($sal*0.20);
		echo "$bruto $sal<br>$porcent 20%<br>$saldisc $sald";

	}else if($sal >= 1801 && $sal <= 2500){

		$sald = $sal-($sal*0.275);
		echo "$bruto $sal<br>$porcent 27,5%<br>$saldisc $sald";

	}else{
		echo "Algum problema foi encontrado.";
	}

	echo "</b>";

 ?>