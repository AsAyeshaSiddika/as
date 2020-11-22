<?php
	    
		$email1 = $_POST["email"];     
		echo $email1;
		
		$pass1 = $_POST["password"];   
		 
		echo $pass1;
		
		
		 
		$email=$password=$Fp= $HP1="";  
		 
        $emailError = "";
		
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["email"])) {
				  $emailError = "Email is required";
				  
			}
			else{
			}
		   
		}

        
        echo "<br>";
        $passwordError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["password"])) {
				  $passwordError = "Password is required";
			}
			else {
		
			}
		}
		
		
		
		$fpError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Fp"])) {
				  $fpError = " Wrong password";
			}
			else {
			
				echo "<a href='FP.php'>FP</a>";
			}
		}
		
		
		$hp1Error = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			$counter=0;
			if(empty($_REQUEST["HP1"])) {
				  $hp1Error = " Couldn't go to HP1";
			}
			else {
				
				  if($email==$email1 & $password==$pass1) {
				  $counter=1;
				
			}
			else {
				$counter=0;
			}
			
			if($counter==1)
			{
			}
			else{
				echo "Null";
			}
			}

		}
		
		

	
       
		
		
        
	?>