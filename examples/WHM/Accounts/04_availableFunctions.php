<?php
/* availableFunctions (List of API functions available for current authenticated user) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->availableFunctions();

echo json_encode($account);