<?php
$amount =(float)readline("Enter The Amount :");
$vat_rate = (float)readline("Enter The vate rate :");

$vat_amount = $amount * $vat_rate;
$total_amount = $amount + $vat_amount;

echo "Amount: $" . $amount . "\n";
echo "VAT (" . ($vat_rate * 100) . "%): $" . $vat_amount . "\n";
echo "Total Amount: $" . $total_amount . "\n";
?>