<?php
$result = null;
$text = $_POST['arena'] ?? '';

if(!empty($text)){
	$dateTime = date(DATE_ATOM);
	$isWrote = file_put_contents(
		__DIR__ . '/../priwate/feedback.txt',
		$dateTime . PHP_EOL . $text . PHP_EOL . PHP_EOL,
		FILE_APPEND 
	) !== false;
	if($isWrote === false){
		$result = 'неможливо відправити повідомлення';
	}else{
		$result = 'ваше повідомлення успішно відправленно';
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>feedback</title>
</head>
<body>
	<h1>feedback</h1>
	<form action="feedback.php" method="POST">
		<label for="arena">
			enter your text:<br>
			<textarea name="arena" cols="55" rows="5"></textarea><br>
			<button type="submit" class="button">Отправить</button>
		</label>
		<?php if($result !== null): ?>
			<?= $result ?>
		<?php endif; ?>
	</form>
</body>
</html>