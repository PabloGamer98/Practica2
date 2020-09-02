<?php 
$rand = range(1, 30);
shuffle($rand);

$numero=(isset($_POST['numero']))?$_POST['numero']:"";
$cadena=(isset($_POST['texto']))?$_POST['texto']:"";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<form method="POST" action="">
		<input required type="text" name="texto" placeholder="ingresa algo">
		<select required id="select_random" name="numero">
			<option>selecciona un numero...</option>
			<?php foreach ($rand as $val) { ?>
			<option><?php echo $val; ?></option>
			<?php } ?>
		</select>
		<button id="btn_submit" class="btn btn-primary" type="submit">Enviar</button>
	</form>



	<div class="contenedor">

		<div class="cont1">
			<?php 
				if($numero!="" || $numero!=" " || $numero!=NULL){
					for($i=0;$i<$numero;$i++){
						echo $cadena."<br>";
					}
				}
		 	?>
		 </div>

		<div class="cont2">
			<?php 

				$invertidad=strrev($cadena);
				if($numero!="" || $numero!=" " || $numero!=NULL){
					for($i=0;$i<$numero;$i++){
						echo $invertidad."<br>";
					}
				}
			
			?>	
			</div>

	</div>


<br>
<label> </label>



</body>
</html>