<?php
include __DIR__ . '/auth.php';
$login = checkCookies();
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
	<?php echo file_get_contents("css/style.css"); ?>
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
					<?php if($login === null): ?>
						<a href="login.php">Авторизація</a>
						<a href="#">Реєстрація</a>
						<?php else: ?>

							<a href="feedback.php">feedback</a>
							<a href="photo.php">галерея</a>
							<a href="logout.php">вихід</a>
							<a href="upload.php">фото</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

	<nav class="main">
		<div class="main__text">
			<a href="#" id="nnnnn">Hello</a>
		</div>
		<div class="main__text">
		<?php if($login === null): ?>
			<a href="#">User</a>
		<?php else: ?>
			<a href="#"><?= $login ?></a>
		<?php endif; ?>

		</div>
	</nav>

</body>
</html>