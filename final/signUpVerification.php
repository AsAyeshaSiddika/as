<?php
    require('../Model/signUpModel.php');
    $userId = $name = $pass = $balance = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["userId"]) ){
            echo "Required userId";
        }
        else if(empty($_POST["name"])){
            echo "Required name";
        }
        else if(empty($_POST["pass"]) ){
            echo "Required password";
        }
        else if(empty($_POST["balance"])){
            echo "Required balance";
        }
        else{
            $userId=$_POST["userId"];
            $name=$_POST["name"];
            $pass=$_POST["pass"];
            $balance=$_POST["balance"];
            signUpReg($userId, $name, $pass, $balance);
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/practice/MVC/view/login.php',true,404);
            exit;
        }
    }

?>