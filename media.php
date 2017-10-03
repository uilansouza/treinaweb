<?php
$var1=35;
$var2=100;
$var3=0;

echo"<br>";

$media = (float)($var1+$var2+$var3)/3;

echo "Media de:".number_format($media,2);
echo "<br> Seu Status no sistema é: ";


switch ($media) {
	case $media>=7 && $media<=10: echo "Ótimo";
		# code...
		break;
	case $media>=3 && $media<=6: echo "Aprovado";
		# code...
		break;
	case $media <3: echo "Reprovado";
		# code...
		break;
	
	default:  echo "Fora do Escopo";
		# code..
		break;
}
