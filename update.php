<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<title>Atualiza</title>

	
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
</head>
<body>

	<?php require('clases/conectar.php');
	 	$id=$_GET['id'];
	 ?>

	<div class="conteudo">
		<div class="fila">
			

		<h1> Actulizar </h1>

		<?php

              $obj=new conectar();
			  $sql="SELECT * FROM data where id = '$id' ";
			  $result= $obj->sentencia($sql);
             
             $array=mysqli_fetch_array($result);
         ?>
		
		<form class="fila" action="processos/atualizar.php" method="post">
			<input type="hidden"  name="id" value="<?php echo $id ?>">
			<label>Tarefa para essa Data </label>
			<input value="<?php echo $array['tarefa'] ?>"  type="text" name="tarefa" required="">
			<label>Ingrese a Data </label>
			<input value="<?php echo $array['data'] ?>"  type="text" name="date" class="tcal" value="" required="" />
			<p></p>
			<input type="submit" name="" value="Guardar">
		</form>


		
        
	  </div>
	</div>
</body>
</html>