<?php
/* getSuspendedAccounts (List of all suspended accounts) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->getSuspendedAccounts();

echo json_encode($account);