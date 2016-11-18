<?php
	include("connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/side.css">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Document</title>
</head>
<body>
	<header>
		<img src="img/pizzeria1.jpg" alt="">
	</header>
		<div class="nav-side-menu">
	    <div class="brand">Pizzeria</div>
	    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
	  
	        <div class="menu-list">
	  
	            <ul id="menu-content" class="menu-content collapse out">
	                

	                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
	                  <a href="#"><i class="fa fa-gift fa-lg"></i> Caja <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="products">
	                    <li class="active"><a href="#">CSS3 Animation</a></li>
	                    <li><a href="#">Registrar Pedido</a></li>
	                    <li><a href="#">Ver Pedidos</a></li>
	                </ul>


	                <li data-toggle="collapse" data-target="#new" class="collapsed">
	                  <a href="#"><i class="fa fa-car fa-lg"></i> Productos <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="new">
	                  <li><a href="productos1.php">Listado de Productos</a></li>
	                </ul>

					
					 <li data-toggle="collapse" data-target="#categorias" class="collapsed">
	                  <a href="#"><i class="fa fa-car fa-lg"></i> Categorias <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="categorias">
	                  <li><a href="categorias.php">Crear Categoria</a></li>
	                </ul>
					
					<li data-toggle="collapse" data-target="#service" class="collapsed">
	                  <a href="#"><i class="fa fa-globe fa-lg"></i> Platos <span class="arrow"></span></a>
	                </li>  
	                <ul class="sub-menu collapse" id="service">
	                  <li><a href="platos.php">Listado de platos</a></li>
	                </ul>
					
					<li>
	                  <a href="mesas.php">
	                  <i class="fa fa-user fa-lg"></i> Mesas
	                  </a>
	                  </li>
	                 <li>
	                  <a href="#">
	                  <i class="fa fa-user fa-lg"></i> Consulta de Ventas
	                  </a>
	                  </li>

	                 <li>
	                  <a href="#">
	                  <i class="fa fa-users fa-lg"></i> Consulta de Inventario
	                  </a>
	                </li>
	            </ul>
	     </div>
	</div>
	<div class="contenido">
	<?php
		$sql1="SELECT * FROM insumos JOIN unidades ON insumos.id_unidad=unidades.id_unidad WHERE insumos.id_insumo='".$_GET["id_insumo"]."'";
		$rs1=mysql_query($sql1) or die (mysql_error());
		$row1=mysql_fetch_array($rs1);

		$sql2="SELECT existencia FROM existencias WHERE id_insumo='".$row1["id_insumo"]."'";
		$rs2=mysql_query($sql2) or die (mysql_error());
		$row2=mysql_fetch_array($rs2);
		$sql="SELECT * FROM unidades";

	?>
	
		Producto: <?php echo $row1["insumo"]; ?><br>
		Unidades: <?php echo $row1["unidad"]; ?><br>
		Descripcion:<?php echo $row1["descripcion"]; ?><br>
		Existencias: <?php echo $row2["existencia"]; ?>
		<form action="agg_existencias.php" method="POST">
			Cantidad<input name="cantidad" type="text">
			<input type="hidden" name="id_insumo" value="<?php echo $row1["id_insumo"]; ?>">
			<button class='btn btn-primary'>Agregar</button>
		</form>
</div>

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	 
</body>
</html>