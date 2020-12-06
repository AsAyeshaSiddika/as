<?php
        function loginCheck($id, $pass){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "atm";
     
            $conn = new mysqli($servername, $username, $password, $dbname);
       if ($conn->connect_error) {
             die("Connection lost: " . $conn->connect_error);
            }
        
        
            $sql = "SELECT userId FROM userinfo WHERE userId='".$id."'AND pass= '".$pass."' ";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                $conn->close();
                return successful;
            } 
            else {
                $conn->close();
                echo "0 results";
                return unsuccessful; 
            }
        }


?>