<?php 
	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['gender'];

		if($name == "")
		{
			echo "Please Select One Gender";
		}else{
			echo $name;
		}	
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="get" action="#">
	<fieldset>
<legend><b>Gender</b></legend>
			<input type="radio" name="gender" value="Male"> Male 
			<input type="radio" name="gender" value="Female"> Female
			<input type="radio" name="gender" value="Other"> Other
			<br>
	</fieldset> <br/>
	<input type="submit" name="submit" value="Submit">
</body>
</html>