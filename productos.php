<?php
	include("connection/connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
</head>
<body>
	
<h3>Agregar Prodcuto</h3>
<form action="productos.php" method="POST">
	Producto<input name="insumo" type="text">
	Unidades<select name="id_unidad" id="">
		<?php
			$sql="SELECT * FROM unidades";
			$rs=mysql_query($sql) or die (mysql_error());
			while ($row=mysql_fetch_array($rs)) {
				echo"<option value='".$row["id_unidad"]."'>".$row["unidad"]."</option>";
			}
		?>
	</select>
	Descripcion<input name="descripcion" type="text">
	<button class="btn btn-primary">Agregar</button>
</form>
<table class="table table-striped">
  <thead>
  	<th>Producto</th>
  	<th>Unidad</th>
  	<th>Descripcion</th>
  </thead>
  <tbody>
  <?php
	$sql="SELECT * FROM insumos JOIN unidades ON insumos.id_unidad=unidades.id_unidad";
	$rs=mysql_query($sql) or die (mysql_error());
	while ($row=mysql_fetch_array($rs)) {
		echo "<tr><td>".$row["insumo"]."</td><td>".$row["unidad"]."</td><td>$row[3]</td></tr>";
	}
?>
  	
  </tbody>
</table>
</body>
</html>
