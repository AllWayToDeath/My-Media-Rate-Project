<? require_once "../core/start.php"; ?>
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
				<?
				require_once "../core/login.php";

				if(false == $_SESSION['signined'])
				{
					require_once "parts/SignMenu.html";
				}
				else
				{
					require_once "../core/userEngine.php";
					require_once "parts/UserMenu.html";
				}
				//var_dump($_SESSION['signined']);
				?>
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