<?php
        function balanceRetrive($userId,&$name,&$balance){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "atm";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
             die("Connection error: " . $conn->connect_error);
            }
        
        
            $sql = "SELECT name,balance FROM userinfo WHERE userId='".$userId."'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    $name = $row["name"];
                    $balance = $row["balance"] ; 
                }
                $conn->close();
            } 
            else {
                echo "0 results";
                $conn->close();
            }
        }

        function updateBalance($amount,$id){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "atm";
        
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
             die("Connection error: " . $conn->connect_error);
            }
        
            $sql = "UPDATE userinfo SET balance='".$amount."' WHERE userId='".$id."'";
        
            if ($conn->query($sql) === TRUE) {
            echo "updated information successfully";
            } else {
            echo "Error occurs: " . $conn->error;
            }
        
            $conn->close();
        }

        function deleteUserId($userId){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "atm";
         
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
              die("Failed: " . $conn->connect_error);
            }
          
            $sql = "DELETE FROM userinfo WHERE userId='".$userId."'";
            
            if ($conn->query($sql) === TRUE) {
              echo "Deleted";
            } else {
              echo "Error occur: " . $conn->error;
            }
            
            $conn->close();
        }


?>