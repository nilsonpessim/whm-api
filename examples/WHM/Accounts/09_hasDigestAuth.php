<?php
/* hasDigestAuth (Digest auth is enabled or disabled) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->hasDigestAuth(CONF_ACCOUNT_USERNAME);

echo json_encode($account);