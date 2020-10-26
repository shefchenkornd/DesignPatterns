<?php

/**
 * Class SimpleSingleton
 * Простой способ создания Singleton
 */
class SimpleSingleton
{
    /**
     * @var SimpleSingleton
     */
    private static $instance;

    static public function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }
}