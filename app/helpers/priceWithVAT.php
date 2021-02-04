<?php
function priceWithVAT($price_ht, $vat) {
    $finalPrice = $price_ht + ($price_ht * $vat) / 100;
    return $finalPrice;
}