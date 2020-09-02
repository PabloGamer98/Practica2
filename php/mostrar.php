<?php  

$numero=$_POST['numero'];
$cadena=$_POST['texto'];


for($i=0;$i<$numero;$i++){
	echo $cadena."<br>";
}

echo "<br>";

$invertidad=strrev($cadena);

for($i=0;$i<$numero;$i++){
	echo $invertidad."<br>";
}


?>