<?php 
include "../init.php";

$obj = new base_class;
$status = 1;
if($obj->Normal_Query("SELECT id FROM users WHERE status = ?", [$status])){

	$online_users = $obj->Count_Rows();
	echo json_encode(array("users" => $online_users));
}




 ?>