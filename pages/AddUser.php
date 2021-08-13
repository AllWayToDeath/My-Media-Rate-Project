<?
require_once "../core/start.php";
require_once "../core/config.php";
require_once "../core/DBEngine.php";

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset=<?=ENCODING ?>>
</head>
<body>

	<table border="0" width="100%" cellpadding="5">
		<tr>
			<td>
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
			</td>
		</tr>
	</table>
<? require_once "parts/footer.html"; ?>
</body>
</html>