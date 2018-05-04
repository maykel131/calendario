<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<title>Calendario</title>

	
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
</head>
<body>

	<?php require('clases/conectar.php'); ?>

	<div class="conteudo">
		<div class="fila">
			

		<h1> CALENDARIO </h1>
		
		<form class="fila" action="processos/insertar.php" method="post">
			<label>Tarefa para essa Data </label>
			<input  type="text" name="tarefa" required="">
			<label>Ingrese a Data </label>
			<input  type="text" name="date" class="tcal" value="" required="" />
			<p></p>
			<input type="submit" name="" value="Guardar">
		</form>


		<table id="tabla">
			<tr>
			  <td >ID</td>	
			  <td width="100px">TAREFA</td>	
			  <td width="100px">DATA</td>	
			  <td>OPCÃO</td>	
			</tr>
			<?php

              $obj=new conectar();
			  $sql="SELECT * FROM data";
			  $result= $obj->sentencia($sql);
             
             while ($array=mysqli_fetch_array($result)) {
             ?>
              <tr>
              	<td> <?php echo $array['id'] ?></td>
              	<td width="100px"> <?php echo $array['tarefa'] ?></td>
              	<td width="100px"> <?php echo $array['data'] ?></td>
              	<td>
              	 <a href="#" onclick="update('<?php echo $array['id'] ?>')" >Atulizar</a>
              	 <a href="#" onclick="deletee('<?php echo $array['id'] ?>')" >Apagar</a> 
              	</td>
              </tr>


             <?php
             }
			 ?>

		</table>
        
	  </div>
	</div>
</body>
</html>
<script type="text/javascript">
	function update(id){
		window.location.href="update.php?id="+id;
	}
	function deletee(id){
		window.location.href="processos/delete.php?id="+id;
	}

</script>