<?php
	session_start();

	$dbServername= "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbName = "electroshop";
	$email="";
	$errors = array();

	//connect to database
	$db = mysqli_connect('localhost', 'root', '' , 'electroshop');

	//if regisration button is clicked
	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string ($db, $_POST['username']);
		$email = mysqli_real_escape_string ($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string ($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string ($db, $_POST['password_2']);
		
		//esure no blanks left
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");

		if (empty($password_2)) {
			array_push($errors, "The confirm password is required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
	
	}

	//if there are no errors, add new user to database
	if (count($errors) == 0) {
		$password = md5($password_1); //encrypt password b4 storing in database
		$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
		mysqli_query($db, $sql);

		$_SESSION['username']= $username;
		$_SESSION['success']= "you are logged in";
		header("location:index.php");//redericts to the homepage
	}

}
//login users from login page

if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string ($db, $_POST['username']);
		$password = mysqli_real_escape_string ($db, $_POST['password']);
		
		//esure no blanks left
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors)==0) {
			$password = md5($password); //encryption before comparison
			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($db,$query);
			if (mysqli_num_row($result)==1) {
				//log user in
				$_SESSION['username']= $username;
				$_SESSION['success']= "you are logged in";
				header("location:index.php");
			}else{
				array_push($errors, "username and password don't match");
				header("location:login.php");
			}
		}
}

//logout
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location:login.php");
}

?>