<?php include "init.php" ?>
<?php include "security.php"; ?>
<?php 

$obj = new base_class;
if(isset($_POST['change_name'])){
	$user_name = $obj->security($_POST['user_name']);
	$user_id = $_SESSION['user_id'];
	if(empty($user_name)) {
		$user_name_error = "Sorry name is required";
	} else {
		if($obj->Normal_Query("UPDATE users SET name = ? WHERE id = ?", [$user_name, $user_id])){
			$obj->Create_Session("user_name", $user_name);
			$obj->Create_Session("name_updated", "Your name is successfully updated");
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
			<?php include 'components/change_name_form.php'; ?>
		</section>
	</div>
	<?php include 'components/js.php'; ?>
</body>
</html>	