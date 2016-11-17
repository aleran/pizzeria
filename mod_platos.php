<?php 
	include("connection/connection.php");
		$sql1="SELECT id_pedido FROM pedidos WHERE id_plato='".$_POST["id_plato"]."'";
		$rs1=mysql_query($sql1) or die(mysql_error());
		$num=mysql_num_rows($rs1);
		if ($num != 0) {
			echo"<script>alert('El plato no puede ser modificado ya que posee movimientos');window.location='productos1.php';</script>";
		}
		else {
			$row1=mysql_fetch_array($rs1);

			$sql="UPDATE platos SET plato='".$_POST["plato"]."', id_categoria='".$_POST["id_categoria"]."' WHERE id_plato='".$_POST["id_plato"]."'";
			$rs=mysql_query($sql) or die(mysql_error());

		}



	echo"<script>alert('Se Modifico el plato');window.location='platos.php';</script>"


?>