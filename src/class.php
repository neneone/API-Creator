<?php

namespace neneone\apicreator;

use Exception;

class API
{
    public function __construct($base)
    {
        $this->base = $base;
    }

    public function set($parameters)
    {
        if (!$parameters) {
            throw new Exception('Invalid parameters');
        }
        foreach ($parameters as $key => $value) {
            if (is_numeric($key)) {
                $this->base[] = $value;
            } else {
                $this->base[$key] = $value;
            }
        }
    }

    public function run($pretty_print = false)
    {
        header('Content-Type: application/json');
        if ($pretty_print) {
            return json_encode($this->base, JSON_PRETTY_PRINT);
        } else {
            return json_encode($this->base);
        }
    }
}
