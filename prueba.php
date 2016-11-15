<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="lib/datatables/datatables.min.css">
	<title>datatable</title>
</head>
<body>
	<table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                
                <th>insumo</th>
                
                <th>descripcion</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>id_insumo</th>
                <th>insumo</th>
                <th>id_unidad</th>
                <th>descripcion</th>
            </tr>
        </tfoot>
    </table>
    <script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="lib/datatables/datatables.min.js"></script>
	<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "prueba1.php",
            "type": "POST"
        },
        "columns": [
            { "data": "id_insumo" },
            { "data": "insumo" },
            { "data": "id_unidad" },
            { "data": "descripcion" }
        ]
    } );
} );
	</script>
</body>
</body>
</html>