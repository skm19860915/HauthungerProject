<?php
require ( '../includes/config.php' );
require ( '../'.PATH_LIBRARIES.'libraries.php' );

$table_name = '';
$field_name = '';
$val = '';
$current_val = '';
$mode = '';
$valid = 'true';

$table_name = trim($_GET['tn'])!='' ? trim($_GET['tn']) : '';
$table_name = $crypt->decrypt($table_name);
$table_name = DB_TABLE_PREFIX.$table_name;

$field_name = trim($_GET['fn'])!='' ? trim($_GET['fn']) : '';
$field_name = $crypt->decrypt($field_name);

$val = trim($_GET[$field_name]);
$current_val = trim($_GET['current'])!='' ? trim($_GET['current']) : '';
$mode = trim($_GET['m'])!='' ? strtoupper(trim($_GET['m'])) : '';

$count_exist = $db->get_var("SELECT count(*) FROM $table_name WHERE $field_name = '$val'");

if ( $count_exist > 0 ) {
	$valid = 'false';
	if ( ($val==$current_val) && ($mode=="EDIT") ) {
		$valid = "true";
	}	
}

echo $valid;
?>