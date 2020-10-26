<?php


/**
 * Class LaravelSingleton
 */
class LaravelSingleton implements AnotherConnection
{
    private $test;

    public function setTest($val)
    {
        $this->test = $val;
    }
}