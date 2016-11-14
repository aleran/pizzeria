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
	        		<h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      		</div>
	      		<div class="modal-body">
	        		<form id="productos" method="POST">
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
						<button type="button" class="btn btn-primary" id="ingresar">Agregar</button>
						<div id="loader" class="hidden"><img src="img/ajax-loader.gif" alt="" height="25px"></div>
					</form>
	      		</div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
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
		echo "<tr><td>".$row["insumo"]."</td><td>".$row["unidad"]."</td><td>$row[3]</td></tr>";
	}
?>
  	
  </tbody>
</table>
<script>

	$("#ingresar").click(function(){
		$.ajax({

			url: "insertar_productos.php",
			type: "POST",
			data: $("#productos").serialize(),
			  beforeSend: function( xhr ) {
			  	$("#loader").removeClass("hidden");
    			$("#loader").addClass("show");
  			},
			success: function (resp) {
			    if(resp == "1"){
			        $("#loader").removeClass("show");
    			$("#loader").addClass("hidden"); 				
			        console.log("registrado");
			         				
			        }
			         	
			    console.log(resp);
			},
			error: function (jqXHR,estado,error){
				alert("error");
			    console.log(estado);
			    console.log(error);
			},
			complete: function (jqXHR,estado){
			    console.log(estado);
			}

			         		
		})
})


</script>
</body>
</html>
