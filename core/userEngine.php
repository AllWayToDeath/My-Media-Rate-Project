<?

require_once "../core/start.php";

if(isset($_POST['addUserButton']))
{

    header('Location: ../pages/AddUser.php');
}

if(isset($_POST['addFilmButton']))
{

    header('Location: ../pages/AddFilm.php');
}

if(isset($_POST['signout']))
{

    $_SESSION['userid'] = NULL;
	$_SESSION['signined'] = false;
    header('Location: ../pages/Main.php');
}

?>