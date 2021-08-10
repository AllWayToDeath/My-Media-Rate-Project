<?php
    define ('HOST',	"localhost:5432");
    define ('DB_USER', "postgres");
    define ('DB_PASSWORD', "");
    define ('DB_NAME', "MyMediaRateProject");

    $connectToDB = null;

    function createConnectToDB(){
        //$connect = mysqli_connect(HOST, DB_USER, DB_PASSWORD, DB_NAME);
        //$connect = new mysqli(HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if(!$connect){
          die("Error");
        }
        return $connect;
    }
    function checkConnectToDB($connect){
        return $connect ? true : false;
    }
    function reconnectToDB($connect){
        return checkConnectToDB($connect) ?
        $connect : createConnectToDB();
    }
    function quickQuery($query){
        return mysqli_query(
            reconnectToDB($connectToDB),
            $query);
    }
?>
