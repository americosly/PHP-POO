<?php

include __DIR__ . '/vendor/autoload.php';

$pagarme = new PagarMe\client('ak_test_2zeckimklGmzUKijRdULtEsID87GHv');

$pagarme->transactions()-get([
    'id' => '6337423'
]);
?>