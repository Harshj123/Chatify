<?php include "init.php" ?>
<?php include "security.php"; ?>
<?php 

$obj = new base_class;
if(isset($_POST['change_img'])){
	$img_name  = $_FILES['change_img']['name'];
	$img_tmp   = $_FILES['change_img']['tmp_name'];
	$img_path  = "assets/img/";
	$extentions= array('jpg', 'jpeg', 'png');
	$img_ext   = explode(".", $img_name);
	$img_extention = end($img_ext);

	if(empty($img_name)) {
		$img_error = "Please choose the image";
	} else if(!in_array($img_extention, $extentions)){
		$img_error = "Please choose the valid extention.";
	} else {
		$user_id = $_SESSION['user_id'];
		move_uploaded_file($img_tmp, "$img_path/$img_name");
		if($obj->Normal_Query("UPDATE users SET image = ? WHERE id = ?",[$img_name, $user_id])){
			$obj->Create_Session("update_image", "Your photo is successfully updated");
			$obj->Create_Session("user_image", $img_name);
			header("location:index.php");
		}
	}
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Home</title>
	<?php include 'components/css.php'; ?>

</head>
<body>
	<?php include 'components/nav.php'; ?>
	<div class="chat-container">
		<?php include 'components/sidebar.php'; ?>
		<section id="right-area">
			<?php include 'components/change_image_form.php'; ?>
		</section>
	</div>
	<?php include 'components/js.php'; ?>
</body>
</html>	