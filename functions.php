<?php 
  
	session_start();

	// connect to database
		$db = mysqli_connect('localhost', 'u108081473_inviv', 'invive', 'u108081473_inviv');

	// variable declaration
	$username = "";
	$email    = "";
	$errors   = array(); 

    $title    = "";
    $price    = "";
      $genre    = "";
	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}
    if (isset($_POST['register_btn2'])) {
		register2();
	}
	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

    if (isset($_POST['addmerch_btn'])) {
		addmerch();
	}
	
	 if (isset($_POST['addsong_btn'])) {
		addsong();
	}
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../login.php");
		
	}

	// REGISTER USER FOR ADMIN
	function register(){
		global $db, $errors;

		// receive all input values from the form
		$username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);
        $user_type =    e($_POST['user_type']);
       
       //preventing duplicate username b at admin section
       if(isset($username)){
       mysqli_query($db,"SELECT * FROM users WHERE username='$username'");
       $get_rows = mysqli_affected_rows($db);
    if($get_rows >=1){
    array_push($errors, "Username have been taken.Please find other username"); 

}
       }
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		if (empty($user_type)) { 
			array_push($errors, "User type is required"); 
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = $password_1;//add md5 to encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				
				$query = "INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: home.php');
			}else{
				$query = "INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', 'user', '$password')";
				mysqli_query($db, $query);

				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				header('location: login.php');				
			}

		}

	}
	// USER REGISTER THEIR ACCOUNT 
	function register2(){
		global $db, $errors;

		// receive all input values from the form
		$username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);
		$user_type = e($_POST['user_type']);
		
		//preventing duplicate username
		  if(isset($username)){
       mysqli_query($db,"SELECT * FROM users WHERE username='$username'");
       $get_rows = mysqli_affected_rows($db);
    if($get_rows >=1){
    array_push($errors, "Username have been taken. Please find other username"); 

}
       }

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if (empty($user_type)) { 
			array_push($errors, "Please identify yourself"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = $password_1;//add md5 to encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				
				$query = "INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: notifyreg.php');
			}else{
				$query = "INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', 'user', '$password')";
				mysqli_query($db, $query);

				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				header('location: login.php');				
			}

		}

	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = $password;

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: admin/home.php');		  
				}else if ($logged_in_user['user_type'] == 'artist') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: artist/home.php');		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: user/home.php');
				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}
	
	function isArtist()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'artist' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}
	
	function addmerch(){
		global $db, $errors;

		// receive all input values from the form
		$title    =  e($_POST['title']);
		$price    =  e($_POST['price']);
		$msg = "";
	
	if(isset($_POST["addmerch_btn"])){	
    $file_type = $_FILES['image']['type']; //returns the type extension
    $allowed = array("image/jpeg", "image/png", "image/pjpeg");}
	
		
		// form validation: ensure that the form is correctly filled
		

		
		if (empty($title)) { 
			array_push($errors, "Title is required"); 
		}
		if (empty($price)) { 
			array_push($errors, "Price is required"); 
		}
		if (!is_numeric($price)) { 
			array_push($errors, "Price is invalid"); 
		}
		if($_FILES["image"]["error"] == 4) { //means there is no file uploaded
            array_push($errors, "No file being uploaded"); 
        }
        if(!in_array($file_type, $allowed)) {
     array_push($errors, "Only .png, .jpeg and .jpg extension accepted");
        }
	    

		
		// add merch if there are no errors in the form
		if (count($errors) == 0) {
		    	if(isset($_POST["addmerch_btn"])){
        $image = $_FILES['image']['name'];
        $target = "/home/u108081473/public_html/upload/image/".basename($image);
        
		$imageLink = "http://invive.esy.es/upload/image/".basename($image);}
			    $query = "INSERT INTO merch (username, title, price, upload , storage) 
						  VALUES('{$_SESSION['user']['username']}', '$title', '$price', '$imageLink','$target')";
				mysqli_query($db, $query);
        
        //upload the file
        $imageContent = move_uploaded_file($_FILES['image']['tmp_name'], $target);
			
			$_SESSION['success']  = "You added a merch";
				header('location: home.php');				
			

		}

	}
	
	function addsong(){
		global $db, $errors;

		// receive all input values from the form
		$title    =  e($_POST['title']);
		$price    =  e($_POST['price']);
		$genre    =  e($_POST['genre']);
		$msg = "";
	
	if(isset($_POST["addsong_btn"])){	
    $file_type = $_FILES['song']['type']; //returns the type extension
    $allowed = array("audio/wav","audio/wave", "audio/x-wav","audio/vnd.wave" , "audio/flac","audio/aac","audio/aacp", "audio/3gpp", "audio/3gpp2", "audio/mp4", "audio/mp4a-latm", "audio/mpeg4-generic","audio/mp3");
    $file_type2 = $_FILES['musicart']['type']; //returns the type extension
    $allowed2 = array("image/jpeg", "image/png", "image/pjpeg");
	    
	}
	
		
		// form validation: ensure that the form is correctly filled
		

		
		if (empty($title)) { 
			array_push($errors, "Title is required"); 
		}
		if (empty($price)) { 
			array_push($errors, "Price is required"); 
		}
		if (empty($genre)) { 
			array_push($errors, "Genre is required"); 
		}
		if (!is_numeric($price)) { 
			array_push($errors, "Price is invalid"); 
		}
		if($_FILES["song"]["error"] == 4) { //means there is no file uploaded
            array_push($errors, "No audio being uploaded"); 
        }
        if($_FILES["musicart"]["error"] == 4) { //means there is no file uploaded
            array_push($errors, "No music art being uploaded"); 
        }
        if(!in_array($file_type, $allowed)) {
     array_push($errors, "Only .wav, .aac , .mp3 and .flac extension accepted");
        } 
        if(!in_array($file_type2, $allowed2)) {
     array_push($errors, "Only .png, .jpeg and .jpg extension accepted");
        }
	    

		
		// add merch if there are no errors in the form
		if (count($errors) == 0) {
		    	if(isset($_POST["addsong_btn"])){
        $audio = $_FILES['song']['name'];
        $target = "/home/u108081473/public_html/upload/audio/".basename($audio);
        $image = $_FILES['musicart']['name'];
        $target2 = "/home/u108081473/public_html/upload/image/".basename($image);
        
        $audioLink = "http://invive.esy.es/upload/audio/".basename($audio);
		$imageLink = "http://invive.esy.es/upload/image/".basename($image);}
			    $query = "INSERT INTO songs (username, title, price,genre , upload , storage, upload2, storage2) 
						  VALUES('{$_SESSION['user']['username']}', '$title', '$price','$genre','$audioLink' ,'$target' , '$imageLink','$target2')";
				mysqli_query($db, $query);
        
        //upload the file
        $audioContent = move_uploaded_file($_FILES['song']['tmp_name'], $target);
		$imageContent = move_uploaded_file($_FILES['musicart']['tmp_name'], $target2);
			$_SESSION['success']  = "You added a track";
				header('location: home.php');				
			

		}

	}
	
	

	


?>