<?php

error_reporting(0);
require_once __DIR__.'/vendor/autoload.php';

try {
    $API = new neneone\apicreator\API(['ok' => true]);

    $API->set(['working' => true]);
    $API->set(['result' => ['one' => true, 'second' => false]]);
    print_r($API->run()); /* {"ok":true,"working":true,"result":{"one":true,"example2":"second example"}} */
    
} catch (Exception $e) {
    echo $e->getMessage();
}
