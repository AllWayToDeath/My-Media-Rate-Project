<?

require_once "../core/DBEngine.php";

function login($login, $password)
{
	$result = quickQuery("
         SELECT name, password
         FROM `users`
         WHERE activated = true and login = \"$login\"
   ");//where login = $login and password = $password

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

	login($login, $password);
}

if(isset($_POST['signup'])){
	$login = $_POST['userlogin'];
	$password = $_POST['userpassword'];

	$result = quickQuery("
         SELECT name
         FROM `users`
         WHERE activated = false and login = \"$login\"
   ");//where login = $login and password = $password

    if(true == mysqli_num_rows($result))
    {
        $data = mysqli_fetch_array($result);

            $result = quickQuery("
                UPDATE users 
                SET password = \"md5($password)\" ,
                activated = true
                WHERE activated = false and login = \"$login\" 
            ");

            //if(2 == login($login, $password))
            login($login, $password);
            header('Location: ../pages/Main.php');

            return 0;
    }

    /*switch(mysqli_num_rows($result)){
        //Все норм
        case 1:
            $data = mysqli_fetch_array($result);

            $result = quickQuery("
		        UPDATE users 
			    SET password = \"md5($password)\" ,
                activated = true
			    WHERE activated = false and login = \"$login\" 
		   	");

            return login($login, $password);

        //Такой пользователь не зарегистрирован!
        case 0:return 0;

        //Либо логин дублируется
        default:return -1;
    }*/
    return 2;
}


?>