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

	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Agregar Producto
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Producto</h4>
      </div>
      <div class="modal-body">
       <form action="insertar_productos.php" method="POST">
       <center>
			Producto: <input name="insumo" type="text"><br><br>
			Unidades: <select name="id_unidad" id=""><br><br>
			<?php
				$sql="SELECT * FROM unidades";
				$rs=mysql_query($sql) or die (mysql_error());
				while ($row=mysql_fetch_array($rs)) {
					echo"<option value='".$row["id_unidad"]."'>".$row["unidad"]."</option>";
				}
			?>
			</select><br><br>
			Descripcion: <input name="descripcion" type="text">
			
		</center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="ingresar">Agregar</button>
      </form>
      </div>
    </div>
  </div>
</div>

	<table class="table table-striped">
  <thead>
  	<th>Producto</th>
  	<th>Unidad</th>
  	<th>Descripcion</th>
  	<th>Existencias</th>
  </thead>
  
  <tbody>
  <?php
	$sql="SELECT * FROM insumos JOIN unidades ON insumos.id_unidad=unidades.id_unidad";
	$rs=mysql_query($sql) or die (mysql_error());
	while ($row=mysql_fetch_array($rs)) {
		$sql1="SELECT existencia FROM existencias WHERE id_insumo='".$row["id_insumo"]."'";
		$rs1=mysql_query($sql1) or die (mysql_error());
		$row1=mysql_fetch_array($rs1);
		echo "<tr><td>"."<a href='modificar_productos.php?id_insumo=".$row["id_insumo"]."'>".$row["insumo"]."</a>"."</td><td>".$row["unidad"]."</td><td>$row[3]</td>"."<td>$row1[0]</td><td><a href='agregar_existencias.php?id_insumo=".$row["id_insumo"]."'><span class='glyphicon glyphicon-plus-sign'></span></a></td><td><a href='retirar_existencias.php?id_insumo=".$row["id_insumo"]."'><span class='glyphicon glyphicon-minus-sign'></span></a></td></tr>";
	}
?>
  	
  </tbody>
</table>
</div>

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	 
</body>
</html>