<?php
/* createUserSession() */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->changePlan(CONF_ACCOUNT_USERNAME, "plan");

echo json_encode($account);