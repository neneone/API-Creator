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
        $base = $this->base;
        if (!$parameters) {
            throw new Exception('Invalid parameters');
        }
        foreach ($parameters as $key => $value) {
            if (is_numeric($key)) {
                $base[] = $value;
            } else {
                $base[$key] = $value;
            }
        }
        $this->base = $base;
    }

    public function run()
    {
        header('content-type: application/json');

        return json_encode($this->base);
    }
}
