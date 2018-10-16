<?php include('functions.php');include('toolbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register || INVIVE Music Store</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		Register
	</div>
	
	<form method="post" action="register.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Who are you?</label>
			<select name="user_type" id="user_type" >
				
				
				<option value="artist">I am an artist.</option>
				<option value="user">I am a fan.</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn2">  Register</button>
		</div>
	</form>
</body>
</html>