<?php
	if(!empty($_POST)){
		require __DIR__ . '/auth.php';
		
		$login = $_POST['login'] ?? '';
		$password = $_POST['password'] ?? '';
	
		if(checkUserPassword($login, $password)){
			setcookie('login', $login, 0, '/');
			setcookie('password', $password, 0, '/');
			header("location: http://localhost.mysign/index.php?uid=$uid");
		}else{
			$error = 'wrong';
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<style>
	<?php echo file_get_contents("css/style-login.css"); ?>
	</style>

	<title>Document</title>
</head>
<body>
	<header>
		<div class="header">
			<div class="header__container container">
				<div class="header__logo">
					<a href="#">logo</a>
				</div>
				<div class="header__line"></div>
				<div class="header__text">
					<a href="index.php">home</a>

				</div>
			</div>
		</div>
	</header>
	<nav class="main">
		<div class="main__text">
			<a href="#" id="nnnnn">Login</a>
		</div>

		<div class="main__input">
			<form action="/login.php" method="post" class="main__form">

				<label for="login" class="main__label">
					<span>Login</span>
					<input autocomplete="off" type="text" name="login" data-error="Ошибка" placeholder="login" class="input">
				</label>

				<label for="password" class="main__label">
					<span>Password</span>
					<input autocomplete="off" type="password" name="password" data-error="Ошибка" placeholder="Password" class="input">
				</label>
				<?php if(isset($error)): ?>
					<span><?= $error ?></span style="color:red;">
				<?php endif; ?>
				<button type="submit" class="button">Отправить</button>

			</form>
		</div>
		


	</nav>
</body>
</html>