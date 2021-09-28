<?php
      $x=20;
      $y=15;
      $z=22;
      if($x>$y && $x>$z)
      {
        echo "The lergest number is $x";
      }
      else
      {

        if($y>$x && $y>$z)
        {
          echo "The lergest number is $y" ;
        }
        else
          echo "The lergest number is $z";
      }
?>