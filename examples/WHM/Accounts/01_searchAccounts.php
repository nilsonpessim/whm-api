<?php
/* searchAccounts (List of all accounts) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->searchAccounts();

echo json_encode($account);