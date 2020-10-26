<?php
require_once 'SimpleSingleton.php';
require_once 'AdvanceSingleton.php';

/**
 * SimpleSingleton
 */
$simpleSingleton1 = \SimpleSingleton::getInstance();
$simpleSingleton2 = \SimpleSingleton::getInstance();
var_dump($simpleSingleton1 === $simpleSingleton2);

/**
 * AdvanceSingleton
 */
$advanceSingleton1 = \AdvanceSingleton::getInstance();
$advanceSingleton2 = \AdvanceSingleton::getInstance();
var_dump($advanceSingleton1 === $advanceSingleton2);

/**
 * Laravel-way
 * AppServiceProvider -> $singletons[]; указываем наш класс
 */
$laravelSingleton1 = app(AnotherConnection::class);
$laravelSingleton2 = app(AnotherConnection::class);