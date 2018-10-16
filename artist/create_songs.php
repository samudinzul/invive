<?php include('../functions.php') ;include('../artist/toolbar.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Artist | Add track</title>
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
		Artist | add track
	</div>
	
	<form method="post" action="create_songs.php" enctype="multipart/form-data" autocomplete="on">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Song Title</label>
			<input type="text" name="title" value="<?php echo $title; ?>">
		</div>
		<div class="input-group">
			<label>Price($)</label>
			<input type="text" name="price" value="<?php echo $price; ?>">
		</div>
		<div class="input-group">
			<label>Genre</label>
			<input type="text" name="genre" value="<?php echo $genre; ?>">
		</div>
		
			<label>Add audio
			<input type="file" name="song" id="song" enctype="multipart/form-data">	.flac .aac , .mp3 and .wav extension only</label><br>
		<div class="input-group">
		    </div>
		
			<label>Add music art
			<input type="file" name="musicart" id="musicart" enctype="multipart/form-data">.jpg .jpeg and .png extension only</label><br>
		
		<div class="input-group">
			<button type="submit" class="btn" name="addsong_btn"> + Add song</button>
		</div>
	</form>
</body>
</html>