<?php

require_once 'class.php';

$API = new API(['Hey', 'this' => 'is an example']);

$API->setPassword('Example');
$API->set(['ok' => true]);
$API->set(['result' => ['example' => 'first example', 'example2' => 'second example']]);
$API->run();
