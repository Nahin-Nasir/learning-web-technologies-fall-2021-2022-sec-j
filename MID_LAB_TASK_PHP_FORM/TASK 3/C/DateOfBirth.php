<html>

<head>
    <title>Date Of Birth</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <legend>DATEOFBIRTH</legend>
            <table>
                <tr>
                    <td align="center">dd</td>
                    <td align="center">mm</td>
                    <td align="center">yyyy</td>
                </tr>
                <tr>
                    <td>
                        <input size="2" type="text" name="d" value="<?php
                                                                        if (isset($_REQUEST['submit'])) {
                                                                            $d = $_REQUEST['d'];

                                                                            if ($d == " ") {
                                                                                echo"null value";
                                                                            }
                                                                            else{
                                                                                echo $d;
                                                                            }
                                                                            
                                                                        }
                                                                        ?>"> /
                    </td>
                    <td>
                        <input size="2" type="text" name="m" value="<?php
                                                                        if (isset($_REQUEST['submit'])) {
                                                                            $m= $_REQUEST['m'];

                                                                            if ($m == " ") {
                                                                                echo"null value";
                                                                            }
                                                                            else{
                                                                                echo $m;
                                                                            }
                                                                            
                                                                        }
                                                                        ?>"> /
                    </td>
                    <td>
                        <input size="4" type="text" name="y" value="<?php


                                                                        if (isset($_REQUEST['submit'])) {
                                                                            $y = $_REQUEST['y'];

                                                                            if ($y == "") {
                                                                                echo "null value";
                                                                                
                                                                            }
                                                                            else
                                                                            {
                                                                                echo $y;
                                                                            }
                                                                        }

                                                                        ?>">
                    </td>
                </tr>
            </table>
            <hr />
            <input name="submit" type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>