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
				<form action="login.php">
				<table border="0" width="100%" cellpadding="1">
					<tr>
						<td width="5%">Login:</td>
						<td width="5%">
							<input type="text" name="userlogin" size="10" placeholder="logogin06">
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td>
							<input type="password" name="userpswd" size="10">
						</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td align="right">
							<input type="submit" value="Войти">
						</td>
						<td></td>
					</tr>
				</table>
				</form>
			<td>
		</tr>
		<tr>
			<td>
			</td>
		</tr>
		
		<tr>
			<td>
			</td>
		</tr>
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
		function unknown()
		{}
		function redirectToRateList()
		{
			window.location = 'http://MyMediaRateProject/pages/RateList.php';
		}
		function redirectToExtandedRateList()
		{
			window.location = 'http://MyMediaRateProject/pages/ExtendedRateList.php';
		}

		function randomLogin()
		{
			//Пока так
			return "logogin06";
		}
	</script>


	<? require_once "parts/footer.html"; ?>
</body>

</html>