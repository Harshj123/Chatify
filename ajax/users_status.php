<?php 
include "../init.php";

$obj = new base_class;

$session_user_id = $_SESSION['user_id'];
if($obj->Normal_Query("SELECT * FROM users_activities")) {
	$rows = $obj->fetch_all();

	foreach ($rows as $results):

		$user_id = $results->user_id;
		$login_time = $results->login_time;
		$current_time = time();

		$time_diff = $current_time - $login_time;
		$status = 0;

		if($session_user_id == $user_id){

			if($time_diff > 1800){


			$obj->Normal_Query("UPDATE users SET status = ? WHERE id = ?",[$status,$user_id]);
			unset($_SESSION['user_id']);
			echo json_encode(array("status" => "href"));
		}

		} else {
			if($time_diff > 1800) {
				$status_again = 1;
				$obj->Normal_Query("UPDATE users SET status = ? WHERE id = ? AND status=?",[$status, $user_id, $status_again]);
			}
		}
}




 ?>