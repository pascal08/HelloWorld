<?php

namespace Acme\HelloWorld;

class HelloWorld
{

    /**
     * @param string $name
     * @return string
     */
    public static function helloWorld($name = 'World') {
        return 'Hello, ' . $name . '!';
    }
}