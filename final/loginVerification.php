<?php
                    require('../Model/loginModel.php');
                    $id = $password = '';
                    $idF = $passwordF = false;
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["id"])) {
                        echo "Required Id";
                    }
                    else{
                        $id=$_POST["id"];
                        $idF=true;
                    }
                    if (empty($_POST["password"])) {
                        echo "Required password";
                    }
                    else{
                        $password=$_POST["password"];
                        $passwordF=true;
                    }
                    if($idF==true && $passwordF==true){   
                        $flag=loginCheck($id,$password);
                        if($flag){
                            session_start();
                            $_SESSION['userId']=$id;
                            header('Location: http://'.$_SERVER['HTTP_HOST'].'/practice/MVC/view/view.php',true,404);
                            exit;
                        }
                        else{
                            echo "Do not Match with User Id or Passsword";
                        }
                        
                    }
                    
                }
?>