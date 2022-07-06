<?php
/* getDetails (Details of a specific account) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->getDetails(CONF_ACCOUNT_USERNAME);

echo json_encode($account);