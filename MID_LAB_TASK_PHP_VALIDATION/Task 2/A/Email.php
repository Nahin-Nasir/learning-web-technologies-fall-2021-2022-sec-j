<?php 

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];
		if($name == ""){
			echo "Email Can't Be Empty";
		}else{
			echo $name;
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
						<input type="text" name="myname" value="">
					</td>
				</tr>
			</table>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>