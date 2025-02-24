<?php

namespace App;

class Container
{
    protected array $bindings = [];

    public function register(string $abstract, string $concrete)
    {
        $this->bindings[$abstract] = $concrete;
    }

    public function resolve(string $abstract)
    {
        if (!isset($this->bindings[$abstract])) {
            throw new \Exception("No binding found for {$abstract}");
        }

        $concrete = $this->bindings[$abstract];
        return new $concrete();
    }
}