<?php 

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];
		if($name == ""){
			echo "Name Can not be Empty";
		}else{
			echo $name;
		}	
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name Field </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>NAME</legend>
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