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
				<button onclick="redirectToRateList();">
					К списку оценок
				</button>
			</td>
		</tr>
		<tr>
			<td>
				<button onclick="redirectToExtandedRateList();">
					К расширенному списку оценок
				</button>
			</td>
		</tr>
		<tr>
			<td>
			</td>
		</tr>
	</table>


	<script>
		function redirectToRateList()
		{
			window.location = 'http://MyMediaRateProject/pages/RateList.php';
		}
		function redirectToExtandedRateList()
		{
			window.location = 'http://MyMediaRateProject/pages/ExtendedRateList.php';
		}
	</script>


	<? require_once "parts/footer.html"; ?>
</body>

</html>