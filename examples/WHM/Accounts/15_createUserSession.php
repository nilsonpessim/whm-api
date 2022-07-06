<?php
/* createUserSession() */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->createUserSession(CONF_ACCOUNT_USERNAME, "cpaneld", "home");

echo json_encode($account);