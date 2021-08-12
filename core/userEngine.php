<?

require_once "../core/start.php";
require_once "../core/DBEngine.php";

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

if(isset($_POST['backToMain']))
{

    header('Location: ../pages/Main.php');
}

if(isset($_POST['acceptFilm']))
{

    function wrapToSingleQuotes($string)
    {
        return null == $string ? 
        "null": 
        "'".$string."'";
    }
    function checkToNull($value)
    {
        return null == $value ?
        "null":
        $value;
    }

    $film_data = 
    [
        "name"      => wrapToSingleQuotes($_POST['nameFilm']),
        "episodes"  => checkToNull($_POST['episodesFilm']),
        "release"   => checkToNull($_POST['releaseFilm']),
        "rate"      => $_POST['rateFilm'],
        "comment"   => wrapToSingleQuotes($_POST['commentFilm']),
        "type"      => wrapToSingleQuotes($_POST['typeFilm']),
        "added_by"  => $_SESSION['userid']
    ];
    

    $query = "
        INSERT INTO films (
            episodes, 
            release_year, 
            name, 
            rate, 
            comment_text, 
            added_by, 
            type
        ) VALUES (
        ".$film_data["episodes"].",
        ".$film_data["release"].",
        ".$film_data["name"].",
        ".$film_data["rate"].",
        ".$film_data["comment"].",
        ".$film_data["added_by"].",
        ".$film_data["type"]."
        )
    ";

    $result = quickQuery($query);

    if(true == $result)
    {
        header('Location: ../pages/Main.php');
    }
    if(false == $result)
    {
        echo "Query is: ".$query;
        echo "<br>Error: Запрос некорректен!";
    }

    $originl = 
    "
     INSERT INTO films ( 
     episodes, release_year, name, rate, comment_text, added_by, type 
    ) VALUES (
     null, 1996, 'Бойцовский клуб', 7, null, 0, 'Фильм'
    )
    ";

    /*
    INSERT INTO `films` (`id`, `episodes`, `release`, `name`, `rate`, `comment`, `added_by`, `type`) VALUES (NULL, NULL, '', 'Сталинград', '4', NULL, '', '')
    */

}

?>