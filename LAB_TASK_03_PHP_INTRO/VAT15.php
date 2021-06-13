<?php
$vat = 15;

$priceIncludingVat = 100;


$vatToPay = ($priceIncludingVat / 100) * $vat;

$totalPrice = $priceExcludingVat + $vatToPay;

echo number_format($totalPrice, 2);

?>