<?php

require_once __DIR__ . '/vendor/autoload.php';

$API = new neneone\apicreator\API(['ok' => true]);

//$API->setPassword('Example'); 🤔
$API->set(['working' => true]);
$API->set(['result' => ['one' => true, 'second' => false]]);
$API->run();

//{"ok":true,"working":true,"result":{"one":true,"example2":"second example"}}
