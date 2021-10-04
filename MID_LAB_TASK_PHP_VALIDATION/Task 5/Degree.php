<?php 
	
	if (isset($_REQUEST['submit'])) 
{
    $checkedbox = 0;
    $values = $_REQUEST['degree'];
    $checkedbox = count($values);

    if ($checkedbox < 1)
     {
        echo 'You need to check at least two degree';
    } 
    else
    {
    	echo 'Submitted' ;
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
            <input type="checkbox" name="degree[1]" value="SSC"> SSC
            <input type="checkbox" name="degree[2]" value="HSC"> HSC
            <input type="checkbox" name="degree[3]" value="BSc"> BSc
            <input type="checkbox" name="degree[4]" value="MSc"> MSc
        </fieldset> <br/>
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

