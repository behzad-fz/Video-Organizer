<?php

require 'Input.php';

class CommandLineInput extends Input
{
    public static function read()
    {
        return readline('Enter your path: ');
    }
}