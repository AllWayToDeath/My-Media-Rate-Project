<? require_once "../core/start.php"; ?>
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
				<?
					if(false == $_SESSION['signined'])
					{
						require_once "parts/SignMenu.html";
					}
					else
					{
						require_once "parts/UserMenu.html";
					}
				?>
			<td>
		</tr>
		<tr>
			<td>
			</td>
		</tr>
		
		<tr>
			<td>
				<?require_once "../core/sqlCheck.php";?>
				<form method="post" action="../core/sqlCheck.php">
				<input type="submit" name="sqlCheck" value= <?=$_SESSION['sqlbutton']?> >
				</form>
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