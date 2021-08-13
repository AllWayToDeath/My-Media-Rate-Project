<? require_once "../core/config.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset=<?=ENCODING ?>>
</head>
<body>
	Этот раздел находится в разработке:)

	<button onclick="redirectToMain();">
		Вернуться на главную
	</button>
	<script>
		function redirectToMain()
		{
			window.location = 'http://MyMediaRateProject/pages/Main.php';
		}
	</script>
	<? require_once "parts/footer.html"; ?>
</body>

</html>