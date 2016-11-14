$("#ingresar").click(function(){
	$.ajax({

		url: "insertar_productos.php",
		type: "POST",
		data: $("#productos").serialize(),
		success: function (resp) {
		    if(resp == "1"){
		         				
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
}