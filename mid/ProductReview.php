<!DOCTYPE html>
<html>
<head>
	<div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>
	<title>Product Review</title>
</head>
<body>
<h2>Product Review</h2>
<form method="post">
		<label>Tell about Our Product</label>
		<input type="text" name="Search">
		<input type="submit" name="Search">
	</form>
	<br>
	<form action="BuyerHome.php" method="post">
			<input type="submit" name="BuyerLogin" value="Back" style="color:green; font-weigt:bold">
			</form>
	<form action="BuyerLogin.php" method="post">
			<input type="submit" name="BuyerLogin" value="Log Out" style="color:green; font-weigt:bold">
			</form>

	<div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>