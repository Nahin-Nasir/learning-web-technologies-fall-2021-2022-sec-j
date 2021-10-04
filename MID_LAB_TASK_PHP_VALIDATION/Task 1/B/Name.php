<?php 
     $name_validation="";
    if (isset($_REQUEST['submit'])) 
    {
                    $name = $_REQUEST['myname'];
                    if ($name == "") {
                        $name_validation="Name can not be empty";
                    }

                    else if (strpos($name," ")==false) {
                        $name_validation="Name must have at least 2 words";
                    }
                    else 
                    {
                        $name_validation="name Submitted Successfully";
                    }


                }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><b> Name Field </b> </title>
</head>
<body>
    <form method="get" action="">
        <fieldset>
            <legend>NAME</legend>
            <table>
                <tr>
                    <td>
                        <input type="text" name="myname" value="" required> <?php echo $name_validation; ?>
                    </td>
                </tr>
            </table>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>