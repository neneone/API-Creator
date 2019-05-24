<?php

namespace TRIGGEREDNICK\APICreator;

class API
{
    private $base;

    public function __construct($base)
    {
        $this->base = $base;
    }

    public function set($parameters)
    {
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
