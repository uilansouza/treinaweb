<?php
$totalSegundos = 200000;
$segundos=$totalSegundos;
// a conta 60* 60*24 é equivalente a 86400 que é equivalente a 1 dia
$dias=(int)($segundos/86400);// resto da divisão

// quantos segundos restaram da divisão acima

$segundos = $segundos-($dias*86400);
//echo" Resto de segundos: $segundos";

//Uma hora tem 3600 segundos
// para descobrir a quantidade fazemos segundos/3600
$horas= (int)($segundos/3600);

// Um minuto tem 60 segundos
// Para descobrir a quantidade de minutos fazemos segundos/60
$minuto = (int) ($segundos/60);


//por fim.. os segundos que restaram
$segundos= $segundos -($minuto * 60);

printf("<strong> Em %d segundos temos: </strong> %d dias, %d horas, %d minutos e %d segundos",$totalSegundos, $dias, $horas, $minuto, $segundos);




