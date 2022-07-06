<?php
/* hasMyCnfInHomeDirectory (.my.cnf file exists in user's home directory or not) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->hasMyCnfInHomeDirectory(CONF_ACCOUNT_USERNAME);

echo json_encode($account);