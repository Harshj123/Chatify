<?php 
include "../init.php";

//ini_set('error_log','error.log');

$obj = new base_class;
if(isset($_POST['send_message'])){

	$message = $obj->security($_POST['send_message']);
	$user_id = $_SESSION['user_id'];
	$msg_type = "text";

	if($obj->Normal_Query("INSERT INTO messages(message,msg_type,user_id) VALUES(?,?,?)",array($message,$msg_type,$user_id))){
		echo json_encode(array('status1' => 'success'));
	}
}
























 ?>