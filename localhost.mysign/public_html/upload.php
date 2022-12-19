<?php
require __DIR__ . '/auth.php';
$login = checkCookies();

if($login !== null && !empty($_FILES['attachment'])){
	$file = $_FILES['attachment'];

	$scrFileName = $file['name'];
	$fullFilePath = __DIR__ . '/uploads/' . $scrFileName;

	$allowedExtension = ['jpg', 'png', 'gif'];
	$extension = pathinfo($scrFileName, PATHINFO_EXTENSION);

	if(!in_array($extension, $allowedExtension)){
		$error = 'неправильнe розширення файлу';
	}elseif($file['error'] !== UPLOAD_ERR_OK){
		$error = 'помилка загрузки';
	}elseif(file_exists($fullFilePath)){
		$error = 'фаіл вже існує';
	}elseif(!move_uploaded_file($file['tmp_name'], $fullFilePath)){
		$error = 'помилка при загрусціі файлу';
	}else{
		$result = 'http://localhost.mysign/upload/' . $scrFileName;
	}
}else{
	$error = 'wrong';
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
	<?php echo file_get_contents("css/style-upload.css"); ?>
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
			<a href="#" id="nnnnn">Files</a>
		</div>


		<div class="main__input">

			<?php if($login == null): ?>
				<a href="login.php">Авторизація</a>
			<?php else: ?>
			

				<?php if(!empty($error)): ?>
					<?= $error ?>
				<?php else: ?>
					<?= $result ?>	
				<?php endif; ?>
			<form action="/upload.php" method="post" class="main__form" enctype="multipart/form-data">
				<label class="main__label">
					<input type="file" name="attachment" class="input">
					file
				</label>
				<button type="submit" class="button">Отправить</button>
			</form>
			

			<?php endif; ?>
		</div>



	</nav>
</body>
</html>