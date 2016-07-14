<?php

	
	$p1=$_GET['r1f'];
	$p2=$_GET['r2f'];
	$p3=$_GET['r3f'];
	$p4=$_GET['p4'];
	$p2 = strtoupper($p2);
	$p3 = strtoupper($p3);
	$acertos = 0;
	if($p1=="right")
	{
		$acertos+=1;
		echo "Você acertou questão 1<br>";
	}
	else
	{
		echo "Você a errou 1<br>";
	}
	if($p2=="SIM")
	{
		$acertos+=1;
		echo "Você acertou questão 2<br>";
	}
	else
	{
		echo "Você a errou 2<br>";
	}
	if($p3=="DEMENTADOR")
	{
		$acertos+=1;
		echo "Você acertou questão 3<br>";
	}
	else
	{
		echo "Você a errou 3<br>";
	}
	if($p4=="right")
	{
		$acertos+=1;
		echo "Você acertou questão 4<br>";
	}
	else
	{
		echo "Você a errou 4<br>";
	}
	
	echo "Você acertou $acertos de 4";
?>