<?php

namespace DucklingDesigns\WebtAdvBasicUnitTestsInPhp;

require_once 'vendor/autoload.php';
require 'src/Seeder.php';

header('Content-Type: application/json');


$osts = Seeder::getOSTs();

if (isset($_GET['ost'])) {
    foreach ($osts as $ost) {
        if ($ost->getID() == $_GET['ost']) {
            echo json_encode($ost);
        }
    }

    if ($_GET['ost'] == 'all') {
        echo json_encode($osts);
    }

} else {
    echo json_encode($osts);
}
