<?php


    if(isset($_REQUEST['submit'])){
        $d = $_REQUEST['d'];
        $m = $_REQUEST['m'];
        $y = $_REQUEST['y'];

        $date = $d.'/'.$m.'/'.$y;

        if($d=="" && $m=="" && $y=="")
        {
            echo 'Date Of Birth Can not be Empty ';
        }
        else{
            echo $date;
        }
    }

?>

    <html>

    <head>
        <title>Date Of Birth</title>
    </head>

    <body>
        <form method="get" action="#">
            <fieldset>
                <legend><b>DATEOFBIRTH </b></legend>
                <table>
                    <tr>
                        <td align="center">dd</td>
                        <td align="center">mm</td>
                        <td align="center">yyyy</td>
                    </tr>
                    <tr>
                        <td>
                            <input size="2" type="text" name="d"> /
                        </td>
                        <td>
                            <input size="2" type="text" name="m"> /
                        </td>
                        <td>
                            <input size="4" type="text" name="y">
                        </td>
                    </tr>
                </table>
                <hr/>
                <input name="submit" type="submit" value="Submit">
            </fieldset>
        </form>
    </body>

    </html>