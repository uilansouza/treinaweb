<?php
/*
$valor =12345678;
$total=strlen($valor);

var_dump($total);

for($i=0;$i<$total; $i++ )
	$var[$i]=$valor[$i];

var_dump($var);
*/



function calculaD1($cpf) {
	//A variável $somaD1 acumulará a soma de: 
	//(a * 1) + (b * 2) + (c * 3) + (d * 4) + (e * 5) + (f * 6) + (g * 7) + (h * 8) + (i * 9)
	$somaD1 = 0;

	//vamos usar a variável i como fator de multiplicação 
	//Também usamos a variável com i-1 para pegar a opção do CPF que precisamos multiplicar
	for($i=1; $i <= 9; $i++) {
		$somaD1 += $cpf[$i] * $i;
	}
	echo'cpf D1: ';
	var_dump($somaD1);

	

	//Agora precisamos dividir a soma por 11 para descobrir o digito verificador 1
	$d1 = $somaD1 % 11;
	

	//Se o d1 for igual a 10 mudamos ele para 0
	if($d1 == 10)
		$d1 = 0;

	//Retornamos o d1 
	return $d1;
}
 $cpf=  '1234567890';
calculaD1($cpf);