<?php  
	include 'connection.php';
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repassword'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		if($password == $repassword){
			$encrypted_password = password_hash($password, PASSWORD_DEFAULT);

			$sql = "SELECT * FROM users WHERE username='$username'";
			$result = mysqli_query($connect, $sql);

			if ($result->num_rows > 0) {
				echo "<script>alert('Username has been registered');</script>";
			} else {
				$query = "INSERT INTO users (username, password) VALUES ('$username', '$encrypted_password')";
				if ($connect->query($query) === TRUE) {
					echo "<script>alert('Registration successful');</script>";
				} else {
					echo "<script>alert('Error registration');</script>";
				}
			}

			$connect->close();
		}else{
			echo "<script>alert('Passwords do not match');</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
            <h2>Register</h2>
			<form class="login" method="post" action="">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Username" name="username">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" name="password">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Re-Password" name="repassword">
				</div>
				<button class="button login__submit">
					<span class="button__text">REGISTER</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
                Have an account? <a href="login.php">Login</a>
			</form>
            
		</div>
        
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</body>
</html>