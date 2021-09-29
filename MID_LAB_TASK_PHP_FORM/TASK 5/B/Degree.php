<?php 
	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['degree'];
		if($name == ""){
			echo "null value...";
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
            <legend>Degree</legend>
            <input type="checkbox" name="degree" value="SSC"> SSC
            <input type="checkbox" name="degree"value="HSC"> HSC
            <input type="checkbox" name="degree"value="BSc"> BSc
        </fieldset> <br/>
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>