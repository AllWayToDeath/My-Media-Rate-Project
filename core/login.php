<?
require_once "../core/start.php";
require_once "../core/DBEngine.php";

if(!isset($_SESSION['signined']))
    $_SESSION['signined'] = false;

function login($login, $password)
{
	$result = quickQuery("
         SELECT name, password
         FROM `users`
         WHERE activated = true and name = \"$login\"
   ");

    switch(mysqli_num_rows($result)){
        //Все норм
        case 1:
            $data = mysqli_fetch_array($result);
            if($data['password'] == md5($password)){
                //Мы вошли в аккаунт
                $_SESSION['signined'] = "true";
                $_SESSION['status'] = $data['role'];
                $_SESSION['username'] = $login;

                return 1;
            }else{
                //Wrong password!
                return -2;
            }

        //Такой пользователь не зарегистрирован!
        case 0:return 0;break;

        //Либо логин дублируется
        default:return -1;break;
    }
    return 2;
}

if(isset($_POST['signin'])){
	$login = $_POST['userlogin'];
	$password = $_POST['userpassword'];

	echo login($login, $password);
    header('Location: ../pages/Main.php');
}

if(isset($_POST['signup'])){
	$login = $_POST['userlogin'];
	$password = $_POST['userpassword'];

	$result = quickQuery("
         SELECT id
         FROM `users`
         WHERE activated = false and name = \"$login\"
   ");

    if(true == $result)
    {
        $data = mysqli_fetch_array($result);
        if(null == $data)
        {
            echo "А дата та NULL!";
            return 5;
        }

        $md5password = md5($password);
        $id = $data[0];

        $result = quickQuery("
            UPDATE users 
            SET password = \"$md5password\" ,
            activated = true
            WHERE id = \"$id\" and activated = false
        ");

        login($login, $password);
        header('Location: ../pages/Main.php');

        return 0;
    }
    return 2;
}


?>