<?php
	include("connection/connection.php");
	/*$numero=$_GET["numero"];
	$persona=$_GET["persona"];*/
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
		<div class="row">
			<div class="col-md-12">
				numero: tal , nombre: tal 
				<br>Direcion: dadadsadadasdsada 
				Telefono:04247242017
			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<br> Seleccione Platos
				<div>
				<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
				<?php
					$sql="SELECT * FROM categorias";
					$rs=mysql_query($sql) or die (mysql_error());
					while ($row=mysql_fetch_array($rs)) {

						echo " <li role='presentation' class='active'><a href='#home' aria-controls='home' role='tab' data-toggle='tab'>".$row["categoria"]."</a></li>";
					}
				?>
				

					
					    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
					    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
					    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
					    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="home">
					   	 ...
					    </div>
					    <div role="tabpanel" class="tab-pane" id="profile">
					    	...
					    </div>
					    <div role="tabpanel" class="tab-pane" id="messages">
					    	...
					    </div>
					    <div role="tabpanel" class="tab-pane" id="settings">
					    	...
					    </div>
				  	</div>

				</div>
			</div>

		</div>
	</div>

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	 
</body>
</html>