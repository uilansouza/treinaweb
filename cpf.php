<?php
$i=50;
//Verificar os cadastros que serão colocados
?>
<br>
DIGITE OS NUMEROS DO SEU CPF<BR>
<form action="" method="get" >
    <input type="text" name="a" size="2" maxlength="1">
    <input type="text" name="b" size="2" maxlength="1">
    <input type="text" name="c" size="2" maxlength="1">
    <input type="text" name="d" size="2" maxlength="1">
    <input type="text" name="e" size="2" maxlength="1">
    <input type="text" name="f" size="2" maxlength="1">
    <input type="text" name="g" size="2" maxlength="1">
    <input type="text" name="h" size="2" maxlength="1">
    <input type="text" name="i" size="2" maxlength="1">-
    <input type="text" name="d1" size="2" maxlength="1">
    <input type="text" name="d2" size="2" maxlength="1">
    <br>
    <input type="submit" name="enviar" value="Enviar">
    <input type="reset" name="enviar" value="apagar">
</form>

<?php
	

if (count($_GET)==12){
	
    $var=[
     'a'=>$_GET["a"],
     'b'=>$_GET["b"],
     'c'=>$_GET["c"],
     'd'=>$_GET["d"],
     'e'=>$_GET["e"],
     'f'=>$_GET["f"],
     'h'=>$_GET["g"],
     'i'=>$_GET["h"],
     'g'=>$_GET["i"],
     'd1'=>$_GET["d1"],
     'd2'=>$_GET["d2"]
    ];

    
    $d1=($var["a"]*1)+($var["b"]*2)+($var["c"]*3)+($var["d"]*4)+($var["e"]*5)+($var["f"]*6)+($var["g"]*7)+($var["h"]*8)+($var["i"]*9);

   // $d1%=11;


    $d2=($var["a"]*0)+($var["b"]*1)+($var["c"]*2)+($var["d"]*3)+($var["e"]*4)+($var["f"]*5)+($var["g"]*6)+($var["h"]*7)+($var["i"]*8)+($var["d1"]*9);

   // $d2%=11;

    if($d1==10)
    	$d1=0;
    if($d2==10)
    	$d2=0;


    if($var["d1"]==$d1){
    	
    	}else{
    	echo"Favor verificar o Penultimo digito<br>";
    	exit();

    }
    
    if($var["d2"]==$d2){

    	}else{
    	echo"Favor verificar o ultimo digito<br>";
    	exit();
    }


    echo "cadastrado com sucesso!!";

  /* var_dump($var);
   echo"<br>";
    echo 'Varival D1:<br>';
    var_dump($d1);
    echo '<br>Varival D2:<br>';
	var_dump($d2);*/

    
}
    

