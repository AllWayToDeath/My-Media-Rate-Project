<? require_once "../core/config.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset=<?=ENCODING ?>>
</head>
<body>

	<table border="0" width="100%" cellpadding="5">
		<tr>
			<td>
				<button onclick="unknown();">
					Фильмы
				</button>
			</td>
			<td>
				<button onclick="unknown();">
					Сериалы
				</button>
			</td>
			<td>
				<button onclick="unknown();">
					Аниме
				</button>
			</td>
			<td>
				<button onclick="redirectToExtandedRateList();">
					К расширенному списку
				</button>
			</td>
		</tr>
		<tr>
			<td>
				<!-- Тут будут различные фильтры для таблицы -->
			</td>
		</tr>
		<tr>
			<td>
				<!-- А здесь собственно сама таблица -->
			</td>
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