<?php
/* limitBandwidth (Modify bandwidth limit) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->limitBandwidth(CONF_ACCOUNT_USERNAME, "8192");

echo json_encode($account);