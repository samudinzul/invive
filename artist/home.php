<?php 
	include('../functions.php');

	if (!isArtist()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}
include('../artist/toolbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title> Artist | Home</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style>source {
    max-width: 10px;
}
	table { word-wrap: break-word; }
	.header {
		background: #027366;
	}
	button[name=register_btn] {
		background: #027366;
	}
    
table { word-wrap: break-word; }

	</style>
</head>
<body>
<div>
<div class="header">
		Artist | Home 
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
					
					</small>
<?php
include('../artist/list_songs.php');
include('../artist/list_merch.php');
?>

				<?php endif ?>
			</div>
		</div>



	</div>
	
</body>
</html>

