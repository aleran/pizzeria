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
	    <div class="brand">Brand Logo</div>
	    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
	  
	        <div class="menu-list">
	  
	            <ul id="menu-content" class="menu-content collapse out">
	                <li>
	                  <a href="#">
	                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
	                  </a>
	                </li>

	                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
	                  <a href="#"><i class="fa fa-gift fa-lg"></i> Caja <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="products">
	                    <li class="active"><a href="#">CSS3 Animation</a></li>
	                    <li><a href="#">Registrar Pedido</a></li>
	                    <li><a href="#">Ver Pedidos</a></li>
	                    <li><a href="#">Tabs & Accordions</a></li>
	                    <li><a href="#">Typography</a></li>
	                    <li><a href="#">FontAwesome</a></li>
	                    <li><a href="#">Slider</a></li>
	                    <li><a href="#">Panels</a></li>
	                    <li><a href="#">Widgets</a></li>
	                    <li><a href="#">Bootstrap Model</a></li>
	                </ul>


	                <li data-toggle="collapse" data-target="#new" class="collapsed">
	                  <a href="#"><i class="fa fa-car fa-lg"></i> Productos <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="new">
	                  <li>Registrar Producto</li>
	                  <li>Ver Productos</li>
	                  <li>New New 3</li>
	                </ul>

					
					 <li data-toggle="collapse" data-target="#new" class="collapsed">
	                  <a href="#"><i class="fa fa-car fa-lg"></i> Categorias <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="new">
	                  <li>Registrar Categoria</li>
	                  <li>Ver Categorias</li>
	                  <li>New New 3</li>
	                </ul>

	                 <li data-toggle="collapse" data-target="#new" class="collapsed">
	                  <a href="#"><i class="fa fa-car fa-lg"></i> Platos <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="new">
	                  <li>Registrar Plato</li>
	                  <li>Ver Platos</li>
	                </ul>
					
					<li data-toggle="collapse" data-target="#service" class="collapsed">
	                  <a href="#"><i class="fa fa-globe fa-lg"></i> Deposito <span class="arrow"></span></a>
	                </li>  
	                <ul class="sub-menu collapse" id="service">
	                  <li>Entrada de Inventario</li>
	                  <li>Salida de Inventario</li>
	                  <li>Consultas</li>
	                </ul>

	                 <li>
	                  <a href="#">
	                  <i class="fa fa-user fa-lg"></i> Consulta de Ventas
	                  </a>
	                  </li>

	                 <li>
	                  <a href="#">
	                  <i class="fa fa-users fa-lg"></i> Users
	                  </a>
	                </li>
	            </ul>
	     </div>
	</div>
	<div class="contenido">
	<?php
		$sql1="SELECT * FROM platos JOIN categorias ON platos.id_categoria=categorias.id_categoria WHERE platos.id_plato='".$_GET["id_plato"]."'";
		$rs1=mysql_query($sql1) or die (mysql_error());
		$row1=mysql_fetch_array($rs1);
	?>
	<form action="mod_platos.php" method="POST">
		Plato<input name="plato" type="text" value="<?php echo $row1["plato"]; ?>">
		Categoria<select name="id_categoria" id="">
		<?php
			$sql="SELECT * FROM categorias";
			$rs=mysql_query($sql) or die (mysql_error());
			while ($row=mysql_fetch_array($rs)) {
				echo"<option value='".$row["id_categoria"]."'>".$row["categoria"]."</option>";
			}
			?>
		</select>
		<input type="hidden" name="id_plato" value="<?php echo $row1["id_plato"]; ?>">
		<button  class='btn btn-primary' id='ingresar'>Agregar</button>
		
	</form>
</div>

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	 
</body>
</html>