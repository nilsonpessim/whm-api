<?php
/* getDomains (List of domains exists in the server) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->getDomains();

echo json_encode($account);