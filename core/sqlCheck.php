<?

require_once "../core/DBEngine.php";

if(isset($_POST['sqlCheck']))
{
	$result = quickQuery("SELECT name FROM `users`");

	if(0 < mysqli_num_rows($result))
		$_SESSION['sqlbutton'] = "sql - ok";
	else
		$_SESSION['sqlbutton'] = "sql... R.I.P";
	header('Location: ../pages/Main.php');
	//header('Location: ../pages/RateList.php');
	/*
	echo "
	<script>
		//var login = document.getElementById('logLogin');

		location.replace('../pages/RateList.php');

		//document.getElementById('regLogin').innerHTML = login.value;
   	</script>
    ";
    */
}

?>