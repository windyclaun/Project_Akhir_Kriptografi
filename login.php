
<?php  
	if(isset($_POST['login']) && isset($_POST['password'])){
		$login = $_POST['login'];
		$password = $_POST['password'];
		echo "Login: $login, Password: $password";
		echo "<br>";
		$encrypted_password = password_hash($password, PASSWORD_DEFAULT);

		//algoritma login
		$decrypt_password = password_verify($password, $encrypted_password);
		if($decrypt_password){
			echo "Login Berhasil";
		}else{
			echo "Login Gagal";
		}

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
            <h2>Login</h2>
			<form class="login">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Username" name="login">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" name="password">
				</div>
				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
                  dont have an account? <a href="register.php">Register</a>
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