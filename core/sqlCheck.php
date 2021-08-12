<?
require_once "../core/start.php";
require_once "../core/DBEngine.php";

if(isset($_POST['sqlCheck']))
{
	$result = quickQuery("SELECT name FROM `users`");
	
	if(0 < mysqli_num_rows($result))
	{
		$_SESSION['sqlbutton'] = "sql - ok";
		var_dump("F 0 <");
	}
	else
	{
		$_SESSION['sqlbutton'] = "sql... R.I.P";
		var_dump("F 0");
	}
	
	//header('Location: ../pages/Main.php');
}

?>