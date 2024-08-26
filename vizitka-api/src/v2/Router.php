<?php
namespace Vizitka\Api\v2;

use Doctrine\ORM\EntityManager;
use Vizitka\Api\v2\Controllers\ControllerInterface;

class Router {
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function handleRequest(array $queryParams, string $method, ?array $data = null): string {
        $entity = $queryParams['entity'] ?? '';
        $id = $queryParams['id'] ?? null;

        $controller = $this->createController($entity);
        if ($controller) {
            return $controller->handleRequest($method, $id, $data);
        } else {
            return json_encode(['error' => 'Неверный путь']);
        }
    }

    private function createController(string $entity): ?ControllerInterface {
        $controllerClass = 'Vizitka\Api\v2\Controllers\\' . ucfirst($entity) . 'Controller';
        if (class_exists($controllerClass)) {
            return new $controllerClass($this->entityManager);
        }
        return null;
    }
}