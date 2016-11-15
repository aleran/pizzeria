<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'insumos';
 
// Table's primary key
$primaryKey = 'id_insumo';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
$columns = array(
    array( 'db' => 'id_insumo', 'dt' => 'id_insumo' ),
    array( 'db' => 'insumo',  'dt' => 'insumo' ),
    array( 'db' => 'id_unidad',   'dt' => 'id_unidad' ),
    array( 'db' => 'descripcion',     'dt' => 'descripcion' ),
    array(
        'db'        => 'start_date',
        'dt'        => 'start_date',
        'formatter' => function( $d, $row ) {
            return date( 'jS M y', strtotime($d));
        }
    )/*,
    array(
        'db'        => 'salary',
        'dt'        => 'salary',
        'formatter' => function( $d, $row ) {
            return '$'.number_format($d);
        }
    )*/
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => 'infor1234',
    'db'   => 'pizzeria',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'lib/datatables/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);