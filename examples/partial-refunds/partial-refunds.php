<?php 

require('../lib/mercadopago.php');

$mp = new MP("CLIENT_ID","CLIENT_SECRET");

echo "TEST - Partial Refunds";

$data = array(
    "amount" => "1.00",
    "reason" => "test partial refunds",
    "external_reference" => "12345"
  );
  
$partial = $mp->refund_payment_partial('PAYMENT_ID', $data);

echo "<pre>";
var_dump($partial);
echo "</pre>"

?>