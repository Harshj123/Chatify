	<div class="form-section">
				<div class="form-grid">
					<form method="POST" action="" enctype="multipart/form-data">
					<div class="group">
						<h2 class="form-heading">Change Photo</h2>
					</div>
					<div class="group">
						<label for="change-image" id="change-image-label"></label>
						<input type="file" name="change_img" id="change-image" class="change-img">
						<div class="name-error error">
							<?php if(isset($img_error)): ?>
								<?php echo $img_error; ?>
							<?php endif; ?>	
						</div>
					</div>
					<div class="group">
						<input type="submit" name="change_img" class="btn account-btn" value="Save changes">
					</div>
				</form>
				</div>
			</div>