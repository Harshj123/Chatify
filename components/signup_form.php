	<div class="form-area">	
				<form method="POST" action="" enctype="multipart/form-data">
					<div class="group">
						<h2 class="form-heading">Create new account</h2>
					</div>
					<div class="group">
						<input type="text" name="full_name" class="control" placeholder="Enter your name here" value="<?php if(isset($full_name)): echo $full_name; endif; ?>">
						<div class="name-error error">
							<?php if(isset($name_error)): ?>
								<?php echo $name_error; ?>
							<?php endif; ?>	
						</div>
					</div>
					<div class="group">
						<input type="email" name="email" class="control" placeholder="Enter your email here" value="<?php if(isset($email)): echo $email; endif; ?>">
						<div class="name-error error">
							<?php if(isset($email_error)): ?>
								<?php echo $email_error; ?>
							<?php endif; ?>	
						</div>
					</div>
					<div class="group">
						<input type="password" name="password" class="control" placeholder="Create password" value="<?php if(isset($password)): echo $password; endif; ?>">
						<div class="name-error error">
							<?php if(isset($password_error)): ?>
								<?php echo $password_error; ?>
							<?php endif; ?>
						</div>	
					</div>
					<div class="group">
						<label for="file" id="file-label"><i class="fas fa-cloud-upload-alt upload-icon"></i>Choose Image</label>
						<input type="file" name="img" class="file" id="file">
						<div class="name-error error">
							<?php if(isset($image_error)): ?>
								<?php echo $image_error; ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="group">
						<input type="submit" name="signup" class="btn account-btn" value="Create account">
					</div>
					<div class="group">
						<a href="login.php" class="link">Already have an account?</a>
					</div>
				</form>
			</div>