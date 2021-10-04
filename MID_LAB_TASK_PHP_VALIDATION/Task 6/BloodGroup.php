
<?php 
    
    if(isset($_REQUEST['submit']))
    {
        $name = $_REQUEST['bloodGroup'];
        if($name == ""){
            echo "Please Select a Value ...";
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
        Blood Group <select name="bloodGroup">
             <option value=""></option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+ </option>
            <option value="B-">B- </option>
            <option value="O+">O+ </option>
            <option value="O-">O- </option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>


