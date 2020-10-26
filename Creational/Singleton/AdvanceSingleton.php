<?php

/**
 * Class SimpleSingleton
 * Продвинутый способ создания Singleton
 */
class AdvanceSingleton
{
    /**
     * @var AdvanceSingleton
     */
    private static $instance;

    static public function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }

    /**
     * Запрещаем прямое создание
     */
    private function __construct()
    {
        //
    }

    /**
     * Запрещаем клонирование
     */
    private function __clone()
    {
        //
    }

    /**
     * Запрещаем десериализацию
     */
    private function __wakeup()
    {
        //
    }
}