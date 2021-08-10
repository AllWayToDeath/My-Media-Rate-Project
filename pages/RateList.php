<? require_once "../core/config.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset=<?=ENCODING ?>>
</head>
<body>

	<table border="1" width="100%" cellpadding="5">
		<tr>
			<td>
				<button onclick="unknown();">
					Фильмы
				</button>
			</td>
		</tr>
		<tr>
			<td>
				<button onclick="unknown();">
					Сериалы
				</button>
			</td>
		</tr>
		<tr>
			<td>
				<button onclick="unknown();">
					Аниме
				</button>
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<button onclick="redirectToExtandedRateList();">
					К расширенному списку
				</button>
			</td>
		</tr>
		<tr>
			<td>
				<button onclick="unknown();">
					Сортировать
				</button>
			</td>
			<td>
				<button onclick="unknown();">
					Сортировать
				</button>
			</td>
			<td>
				<form>
					<input type="search">
					<input type="button" value="Q">
				</form>
			</td>
		</tr>
		<tr>
			<td>Название</td>
			<td>Оценка</td>
			<td>Комментарий</td>
		</tr>
		<tr>
			<td colspan="3" align="center">Таблица</td>
		</tr>
	</table>

		
	<script>
		function redirectToExtandedRateList()
		{
			window.location = 'http://MyMediaRateProject/pages/ExtendedRateList.php';
		}
	</script>
</body>

</html>