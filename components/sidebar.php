	<section id="sidebar">
			<ul class="left-ul">
				<li>
					<a href="#">
						<span class="profile-img-span">
							<img src="assets/img/<?php echo $_SESSION['user_image']; ?>" alt="Profile image" class="profile-img">
						</span>
					</a>
				</li>
				<li>
					<a href="index.php">
						<?php echo ucfirst($_SESSION['user_name']); ?> <span class="cool-hover"></span>
					</a>
				</li>
				<li>
					<a href="change_name.php">
						Change Name<span class="cool-hover"></span>
					</a>
				</li>
				<li>
					<a href="change_password.php">
						Change Password<span class="cool-hover"></span>
					</a>
				</li>
				<li>
					<a href="change_image.php">
						Change Photo<span class="cool-hover"></span>
					</a>
				</li>
				<li>
					<a href="#"><span class="online_users"></span><span class="cool-hover"></span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" class="clean">
						Clean Chats<span class="cool-hover"></span>
					</a>
				</li>
				<li>
					<a href="logout.php">
						Logout<span class="cool-hover"></span>
					</a>
				</li>
			</ul>
		</section>