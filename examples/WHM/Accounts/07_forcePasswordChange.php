<?php
/* forcePasswordChange (Force user to change their password at their next login) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$usernames = [
    CONF_ACCOUNT_USERNAME
];

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->forcePasswordChange($usernames);

echo json_encode($account);