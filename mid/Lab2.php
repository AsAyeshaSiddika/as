<html>
<head>
	<title>Form Validation</title>
</head>
<body bgcolor="pink">

	<?php
	  	$idError = "";
	  	
		if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(empty($_REQUEST["id"])) 
			{
				  $idError = "ID is required";
			}
			else {
				echo "ID : " . $_REQUEST["id"];
			     }
		}
        
		echo "<br>";
        $nameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(empty($_REQUEST["name"])) 
			{
				  $nameError = "Name is required";
			}
			else {
				echo "Name : " . $_REQUEST["name"];
			     }
		}
       
	   echo "<br>";
        $genderError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(empty($_REQUEST["gender"])) 
			{
				  $gernderError = "Gender is required";
			}
			else {
				echo "Gender : " . $_REQUEST["gender"];
			     }
		}
        
        
		echo "<br>";
        $emailError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(empty($_REQUEST["email"])) 
			
			{
				  $emailError = "Email is required";
			}
			else {
				echo "Email : " . $_REQUEST["email"];
			     }
		}
        
        
		echo "<br>";
        $addressError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(empty($_REQUEST["address"]))
				{
				  $addressError = "Address is required";
			    }
			else {
				echo "Address : " . $_REQUEST["address"];
			     }
		}
    
        
		echo "<br>";
        $cityError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(empty($_REQUEST["city"])) 
			{
				  $cityError = "City is required";
			}
			else {
				echo "City : " . $_REQUEST["city"];
			     }
		}
    
       
	   echo "<br>";
        $stateError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(empty($_REQUEST["state"]))
				{
				  $stateError = "State is required";
			    }
			else {
				echo "State : " . $_REQUEST["state"];
			     }
		}
    
        
		echo "<br>";
        $countryError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(empty($_REQUEST["country"])) 
			{
				  $countryError = "country is required";
			}
			else {
				echo "Country : " . $_REQUEST["country"];
			     }
		}
        echo "<hr>";
        
	?>
	
	
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Student Id <br/> 
    <input type="text" name="id" style="width:200px; background-color:orange" required="required">
	<br />
	<span><?php echo $idError; ?></span><br />
        
	Student Name <br/>
    <input type="text" name="name" style="width:200px; background-color:orange" required="required">
	<br /><br />
    <span><?php echo $nameError; ?></span><br />

	Gender <br/>
    <input type="radio" name="gender" value="female" required="required">Female
    <br/>
	<input type="radio" name="gender" value="male" required>Male
    <br/><br/>
    <span><?php echo $genderError; ?></span><br />
    
        
    Student Email <br/>
    <input type="text" name="email" value="@" style="background-color:orange" required="required">
	<br /><br />
    <span><?php echo $emailError; ?></span><br />
    
    Address  <br/>
    <input type="text" name="address" required style=" width:500px; background-color:orange">
	<br />       
    Street Address
    <br />
    <input type="text" name="address2"  style=" width:500px; background-color:orange">
	<br />
    Address line 2 
    <br/>
    <span><?php echo $addressError; ?></span><br />
        
    <input type="text" name="city" style="width:250px; background-color:orange" required="required">
    <span><?php echo $cityError; ?></span>
    <input type="text" name="state" style=" width:250px; background-color:orange" required="required">
    <span><?php echo $stateError; ?></span>
    <br/>
    <span style="margin-right:220px">City</span>
    <span>State/Province/Region</span>
    <br/>
        
    
	<input type="text" name="zip" style="width:250px; background-color:orange" >
    <select name="country" style=" width:250px;  background-color:orange ">
    <option value="Bangladesh">Bangladesh</option>
    <option value="Japan">Japan</option>
    <option value="Australia">Australia</option>
    <option value="New Zealand">New Zealand</option>
	<option value="America">America</option>
	<option value="Bhutan">Bhutan</option>
    </select>
    <span><?php echo $countryError; ?></span>
    <br/>
    <span style="width:250px; margin-right:150px">Zip/Postal Code</span>
    <span>Country</span>
	
	<br /><br />
	<input type="submit" value="Save Form" style="color:green; background-color:skyblue; font-weigt:bold">
	</form>
</body>
</html>