<?php
namespace Vizitka\Api;

use Vizitka\Api\Controllers\ItemsController;
use Vizitka\Api\Repositories\ItemsRepository;

class Router {
    private \PDO $pdo;

    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function handleRequest(array $queryParams, string $method, ?array $data = null): string {
        $entity = $queryParams['entity'] ?? '';
        $id = $queryParams['id'] ?? null;

        switch ($entity) {
            case 'items':
                $repository = new ItemsRepository($this->pdo);
                $controller = new ItemsController($repository);
                return $controller->handleRequest($method, $id, $data);
            default:
                return json_encode(['error' => 'Неверный путь']);
        }
    }
}