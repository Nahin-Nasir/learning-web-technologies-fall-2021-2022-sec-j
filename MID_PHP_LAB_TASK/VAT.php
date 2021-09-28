<?php

$vat = 15;
$originalPrice =2000;
$vatToPay = ($originalPrice / 100) * $vat;
$totalPrice = $originalPrice + $vatToPay;
echo "Price including 15% VAT is =  " .number_format($totalPrice) ."<br />";

?>