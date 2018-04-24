<?php

require_once __DIR__.'/vendor/autoload.php';

$API = new neneone\apicreator\API(['ok' => true]);
$API->set(['working' => true]);
$API->set(['result' => ['one' => true, 'second' => false]]);
echo $API->run();

/* Result: {"ok":true,"working":true,"result":{"one":true,"example2":"second example"}} */