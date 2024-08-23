<?php

namespace Vizitka\Api;


require __DIR__ . "/vendor/autoload.php";

require "init.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

$strMethod = $_SERVER['REQUEST_METHOD'];
$arQueryParams = $_GET;
$arData = null;

if ($strMethod === 'POST' || $strMethod === 'PUT') {
    $arData = json_decode(file_get_contents('php://input'), true);
}

$obRouter = new Router($GLOBALS['PDO']);

try {
    echo $obRouter->handleRequest($arQueryParams, $strMethod, $arData);
} catch (Exception $e) {
    echo json_encode(['error' => 'Внутренняя ошибка сервера: ' . $e->getMessage()]);
}
