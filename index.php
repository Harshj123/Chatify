<?php include "init.php"; ?>
<?php if(!isset($_SESSION['user_id'])): ?>

	<?php header ("location:login.php") ?>

<?php endif; ?>	
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Home</title>
	<?php include 'components/css.php'; ?>

</head>
<body>

	<?php if(isset($_SESSION['loader'])): ?>

		<div class="loader-area">
		<div class="loader">
			<div class="loader-item">
				
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php unset($_SESSION['loader']); ?>

	<?php if(isset($_SESSION['password_updated'])): ?>
	<div class="flash success-flash">
		<span class="remove">&times;</span>
		<div class="flash-heading">
			<h3><span class="checked">&#10004;</span>Success!</h3>
		</div>
		<div class="flash-body">
			<p><?php echo $_SESSION['password_updated']; ?></p>
		</div>
	</div>


	<?php endif; ?>	
	<?php unset($_SESSION['password_updated']); ?>


	<?php if(isset($_SESSION['name_updated'])): ?>
	<div class="flash success-flash">
		<span class="remove">&times;</span>
		<div class="flash-heading">
			<h3><span class="checked">&#10004;</span>Success!</h3>
		</div>
		<div class="flash-body">
			<p><?php echo $_SESSION['name_updated']; ?></p>
		</div>
	</div>


	<?php endif; ?>	
	<?php unset($_SESSION['name_updated']); ?>






	<?php if(isset($_SESSION['update_image'])): ?>
	<div class="flash success-flash">
		<span class="remove">&times;</span>
		<div class="flash-heading">
			<h3><span class="checked">&#10004;</span>Success!</h3>
		</div>
		<div class="flash-body">
			<p><?php echo $_SESSION['update_image']; ?></p>
		</div>
	</div>


	<?php endif; ?>	
	<?php unset($_SESSION['update_image']); ?>

	

	<!-- <div class="flash error-flash">
		<span class="remove">&times;</span>
		<div class="flash-heading">
			<h3><span class="cross">&#x2715;</span>You have an error!</h3>
		</div>
		<div class="flash-body">
			<p>xyz!</p>
		</div>
	</div> -->





	<?php include 'components/nav.php'; ?>
	<div class="chat-container">
		<?php include 'components/sidebar.php'; ?>
		<section id="right-area">
			<?php include 'components/messages.php'; ?>
			<?php include 'components/chat_form.php'; ?>
			<?php include 'components/emoji.php'; ?>
		</section>
	</div>
	<?php include 'components/js.php'; ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".loader-area").show();
			setTimeout(function(){
			$(".loader-area").hide();
			},3000)
		})
	</script>	
</body>
</html>	