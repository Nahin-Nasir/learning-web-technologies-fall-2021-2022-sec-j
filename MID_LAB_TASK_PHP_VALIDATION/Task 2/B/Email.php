<?php 

	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['User_email'];
		if (filter_var($email, FILTER_VALIDATE_EMAIL)==true) {
            echo 'Valid email Submitted';
		}
	  else
    {
    	echo 'error email Check Your email again';
    }
}
    
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Email Field </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend><b>EMAIL</b></legend>
			<table>
				<tr>
					<td>
						<input type="text" name="User_email" value="">
					</td>
				</tr>
			</table>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
