<?php

require 'config.php';
require 'lib/funcs.php';

$nome_cli =($_POST['cliente']);
$qtd_cli = trim($_POST['km_consumido']);
$tipo_cli =  trim($_POST['consumidor']);

$erro=0;

if(strlen($nome_cli) < 3)$erro++;
if(strlen($qtd_cli) ==0 || !is_numeric($qtd_cli))$erro++;
if(strlen($tipo_cli) < 3)$erro++;


if($erro){
	
	header('Location: index.php?pagina=criar&erro=1');
	exit();

}

$con = conecta();


$insert = "INSERT INTO cliente
			(nome_cli, qtd_cli,tipo_cli)
           VALUES('$nome_cli',$qtd_cli,'$tipo_cli')";

$res = mysqli_query($con, $insert);




if($res){
	header('Location: index.php?pagina=criar&sucesso=1');
} 

