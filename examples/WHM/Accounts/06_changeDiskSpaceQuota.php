<?php
/* changeDiskSpaceQuota (Modify an user's disk space quota) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->changeDiskSpaceQuota(CONF_ACCOUNT_USERNAME, "8192");

echo json_encode($account);