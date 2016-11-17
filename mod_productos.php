<?php 
	include("connection/connection.php");
		$sql1="SELECT id FROM inventario WHERE id_insumo='".$_POST["id_insumo"]."'";
		$rs1=mysql_query($sql1) or die(mysql_error());
		$num=mysql_num_rows($rs1);
		if ($num != 0) {
			echo"<script>alert('El producto no puede ser modificado ya que posee movimientos');window.location='productos1.php';</script>";
		}
		else {
			$row1=mysql_fetch_array($rs1);

			$sql="UPDATE insumos SET insumo='".$_POST["insumo"]."', id_unidad='".$_POST["id_unidad"]."', descripcion='".$_POST["descripcion"]."' WHERE id_insumo='".$_POST["id_insumo"]."'";
			$rs=mysql_query($sql) or die(mysql_error());

		}



	echo"<script>alert('Se Modifico el producto');window.location='productos1.php';</script>"


?>