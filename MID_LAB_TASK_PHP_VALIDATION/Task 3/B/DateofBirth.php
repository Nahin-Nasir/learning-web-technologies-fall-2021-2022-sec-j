<?php


    if(isset($_REQUEST['submit'])){
        $d = $_REQUEST['d'];
        $m = $_REQUEST['m'];
        $y = $_REQUEST['y'];

        $date = $d.'/'.$m.'/'.$y;

        if ($d == "" || $m == "" || $y == "" || $d < 1 || $d > 31 || $m < 1 || $m > 12 || $y < 1953 || $y> 1998) 
        {
                 echo $date . ' This is not a valid date Try again ';
                 return;
        }

                    echo $date . ' Valid Date of Birth ';
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