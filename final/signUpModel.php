<?php
    function signUpReg($userId, $name, $pass, $balance){
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "atm";
   
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection lost: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO userinfo (userId, name, pass, balance)
    VALUES ('$userId', '$name', '$pass', '$balance')";
    
    if ($conn->query($sql) === TRUE) {
      echo "created successfully";
    } else {
      echo "Failed: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    }
?>