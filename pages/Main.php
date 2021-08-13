<? 
require_once "../core/start.php";
require_once "../core/config.php";
require_once "../core/navigate.php";

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset=<?=ENCODING ?>>
</head>
<body>
	<form method="post" action="../core/navigate.php" id="nav">
	</form>
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
				<input type="submit" name="gotoRateList" value="К списку оценок" form="nav">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="gotoExtandedRateList" value="К расширенному списку оценок" form="nav">
			</td>
		</tr>
		<tr>
			<td>
			</td>
		</tr>
	</table>


	<script>
		function randomLogin()
		{
			//Пока так
			return "logogin06";
		}
	</script>


	<? require_once "parts/footer.html"; ?>
</body>

</html>