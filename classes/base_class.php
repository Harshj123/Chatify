<?php 

class base_class extends db {

	private $Query;

	public function Normal_Query($query, $param = null){
		if(is_null($param)){
			$this->Query = $this->con->prepare($query);
			return $this->Query->execute();
		}
		else {
			$this->Query = $this->con->prepare($query);
			return $this->Query->execute($param);
		}
	}

	public function Count_Rows(){
		return $this->Query->rowCount();
	}

	public function fetch_all(){
		return $this->Query->fetchAll(PDO::FETCH_OBJ);
	}

	public function security($data) {
		return trim(strip_tags($data));
	}

	public function Create_Session($session_name, $session_value){
		$_SESSION[$session_name] = $session_value;
	}

	public function Single_Result() {
		return $this->Query->fetch(PDO::FETCH_OBJ);
	}

	public function time_ago($db_msg_time){
		date_default_timezone_set("Asia/Kolkata");

		$db_time = strtotime($db_msg_time);

		$current_time = time();

		$seconds = $current_time - $db_time;
		$minutes = floor($seconds/60);
		$hours = floor($seconds/3600);
		$days = floor($seconds/86400);
		$weeks = floor($seconds/604800);
		$months = floor($seconds/2592000);
		$years = floor($seconds/31536000);

		if($seconds <= 60){
			return "Just Now";
		}
		else if($minutes <= 60){
			return $minutes." minutes ago";
		}
		else if($hours <= 24){
			return $hours." hours ago";
		}
		else if($days <= 7){
			return $days." days ago";
		}
		else if($weeks <= 4.3){
			return $weeks." weeks ago";
		}
		else if ($months <= 12) {
			return $months." months ago";
		}
		else {
			return $years." years ago";
		}
	}
}





 ?>