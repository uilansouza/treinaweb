<?php

require 'config.php';
require 'lib/funcs.php';

$cliente =($_POST['cliente']);
$totalhoras = trim($_POST['totalhoras']);
$valorhora =  trim($_POST['valorhora']);

$erro=0;

if(strlen($cliente) < 3)$erro++;
if(strlen($totalhoras) ==0 || !is_numeric($totalhoras))$erro++;
if(strlen($valorhora) ==0 || !is_numeric($valorhora))$erro++;

if($erro){
	header('Location: index.php?pagina=criar&erro=1');
	exit();

}

$con = conecta();


$insert = "INSERT INTO tbl_orcamentos
			(cliente, totalhoras,valorhora)
           VALUES('$cliente',$totalhoras,$valorhora)";

$res = mysqli_query($con, $insert);




if($res){
	header('Location: index.php?pagina=criar&sucesso=1');
} 

