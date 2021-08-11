<?php
    define ('HOST',	"127.0.0.1");
    define ('DB_USER', "root");
    define ('DB_PASSWORD', "");
    define ('DB_NAME', "MMRP");

    $connectToDB = null;

    function createConnectToDB(){
        $connect = mysqli_connect(HOST, DB_USER, DB_PASSWORD, DB_NAME);
        //$connect = new mysqli(HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if(!$connect){
          die("Error: ".mysqli_connect_error());
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
