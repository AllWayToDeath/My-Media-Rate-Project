<?

if(isset($_POST['addUserButton']))
{
    header('Location: ../pages/AddUser.php');
}

if(isset($_POST['addFilmButton']))
{
    header('Location: ../pages/AddFilm.php');
}

if(isset($_POST['gotoMain']))
{
    header('Location: ../pages/Main.php');
}

if(isset($_POST['gotoRateList']))
{
    header('Location: ../pages/RateList.php');
}

if(isset($_POST['gotoExtandedRateList']))
{
    header('Location: ../pages/ExtendedRateList.php');
}

?>