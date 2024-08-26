<?php
namespace Vizitka\Api\v2\Controllers;

use Doctrine\ORM\EntityManager;
use Vizitka\Api\v2\Entities\Item;

class ItemsController implements ControllerInterface {
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function handleRequest(string $method, ?int $id, ?array $data): string {
        switch ($method) {
            case 'GET':
                return $this->getItem($id);
            case 'POST':
                return $this->createItem($data);
            // Другие методы
            default:
                return json_encode(['error' => 'Неверный метод']);
        }
    }

    private function getItem(?int $id): string {
        if ($id) {
            $item = $this->entityManager->find(Item::class, $id);
            return json_encode($item);
        } else {
            $items = $this->entityManager->getRepository(Item::class)->findAll();
            return json_encode($items);
        }
    }

    private function createItem(array $data): string {
        $item = new Item();
        $item->setName($data['name']);
        $this->entityManager->persist($item);
        $this->entityManager->flush();
        return json_encode($item);
    }
}