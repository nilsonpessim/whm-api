<?php
/* domainDetails (Get a hosted domain details) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->domainDetails(CONF_ACCOUNT_DOMAIN);

echo json_encode($account);