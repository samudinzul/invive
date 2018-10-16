<?php include('../functions.php');include('../artist/toolbar.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Artist | Add merch</title>
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
	Artist | Add merch
	</div>
	
	<form method="post" action="create_merch.php" enctype="multipart/form-data" autocomplete="on">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Merch Title</label>
			<input type="text" name="title" value="<?php echo $title; ?>">
		</div>
		<div class="input-group">
			<label>Price($)</label>
			<input type="text" name="price" value="<?php echo $price; ?>">
		</div>
		
			<label>Merch image</label>
			<input type="file" name="image" id="image" enctype="multipart/form-data">
		
		
		<div class="input-group">
			<button type="submit" class="btn" name="addmerch_btn"> + Create merch</button>
		</div>
	</form>
</body>
</html>