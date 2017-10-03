<?php

$clientes = [
	1=>'Carlos',
	2=>'Pedro',
	3=>'Claudia',
	4=>'Julia',
	5=>'Luciana'
];
?>

<select>
<?php
foreach ($clientes as $cod=>$nome ){
	if($cod==4 || $cod==2){
		continue;
	}

	echo "<option value=\"$cod\">$nome</option>";
	# code...
}
?>
</select>


