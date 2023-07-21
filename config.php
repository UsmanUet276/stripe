<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51NDNvaEb4lKP7z03OdrG2UZCRRNUXLFG0GWqETPzrcimayzX6fzsZp4EBxTsOqKSaenaXP15NXHDAbRyaygNkb0Y00VitiWxnO",
        "publishableKey" => "pk_test_51NDNvaEb4lKP7z03z3aWeCHIgOcTy5WUeUNImYmzvZkdoMo1iakt7oCywpNlnbDaf2PRBCZZDQJlGSWOF442JKsl00Yv3y0j0U"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>