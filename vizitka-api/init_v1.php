<?php

namespace Vizitka\Api;

$host = 'localhost';
$dbname = 'test-stend';
$username = 'root';
$password = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $GLOBALS['PDO'] = new \PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}