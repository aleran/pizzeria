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

	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Agregar Plato
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
       <form action="agg_platos.php" method="POST">
       <center>
			Plato: <input name="plato" type="text"><br><br>
			Categoria:<select name="id_categoria" id=""><br><br>
			<?php
				$sql="SELECT * FROM categorias";
				$rs=mysql_query($sql) or die (mysql_error());
				while ($row=mysql_fetch_array($rs)) {
					echo"<option value='".$row["id_categoria"]."'>".$row["categoria"]."</option>";
				}
			?>
			</select><br><br>
			Precio: <input name="precio" type="text">Bs
			
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
  	<th>Plato</th>
  	<th>Categoria</th>
  	<th>Precio</th>
  </thead>
  
  <tbody>
  <?php
	$sql="SELECT * FROM platos JOIN categorias ON platos.id_categoria=categorias.id_categoria";
	$rs=mysql_query($sql) or die (mysql_error());
	while ($row=mysql_fetch_array($rs)) {

		echo "<tr><td>"."<a href='modificar_platos.php?id_plato=".$row["id_plato"]."'>".$row["plato"]."</a>"."</td><td>".$row["categoria"]."</td><td>"."<a href='modificar_precios.php?id_plato=".$row["id_plato"]."'>".$row["precio"]."</td>"."</tr>";
	}
?>
  	
  </tbody>
</table>
</div>

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	 
</body>
</html>