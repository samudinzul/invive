<?php include('functions.php') ?>
<?php include('toolbar.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login || INVIVE Music Store</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

	<div class="header">
		Login
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
		<p>
		Need help? Enquiry can be made at <a href="mailto:samudinzul@gmail.com">samudinzul@gmail.com</a> or <a href="mailto:firdza92@gmail.com">firdza92@gmail.com</a> or ask directly to our online Customer Support (We are here!). Please check out our <a href="termsofuse.php">terms of use.</a>
		</p>
		
		<footer><!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a24c76ad0795768aaf8d278/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script--></footer>
	</form>


</body>
</html>