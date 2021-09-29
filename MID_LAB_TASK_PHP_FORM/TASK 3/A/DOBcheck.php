<?php


    if(isset($_REQUEST['submit'])){
        $d = $_REQUEST['d'];
        $m = $_REQUEST['m'];
        $y = $_REQUEST['y'];

        $date = $d.'/'.$m.'/'.$y;

        if($d=="" && $m=="" && $y=="")
        {
            echo 'null value';
        }
        else{
            echo $date;
        }
    }