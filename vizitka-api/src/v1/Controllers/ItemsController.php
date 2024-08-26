<?php
namespace Vizitka\Api\Controllers;

use Vizitka\Api\Repositories\ItemsRepository;

class ItemsController {
    private ItemsRepository $repository;

    public function __construct(ItemsRepository $repository) {
        $this->repository = $repository;
    }

    public function handleRequest(string $method, ?int $id = null, ?array $data = null): string {
        switch ($method) {
            case 'GET':
                return $id ? $this->getById($id) : $this->getAll();
            case 'POST':
                return $this->create($data);
            case 'PUT':
                return $this->update($id, $data);
            case 'DELETE':
                return $this->delete($id);
            default:
                return json_encode(['error' => 'Неверный метод']);
        }
    }

    private function getAll(): string {
        $arItems = $this->repository->getAll();
        return json_encode($arItems);
    }

    private function getById(int $id): string {
        $item = $this->repository->getById($id);
        return $item ? json_encode($item) : json_encode(['error' => 'Элемент не найден']);
    }

    private function create(array $data): string {
        $result = $this->repository->create($data);
        return $result ? json_encode(['success' => 'Элемент создан']) : json_encode(['error' => 'Неверные данные']);
    }

    private function update(int $id, array $data): string {
        $result = $this->repository->update($id, $data);
        return $result ? json_encode(['success' => 'Элемент обновлен']) : json_encode(['error' => 'Неверные данные']);
    }

    private function delete(int $id): string {
        $result = $this->repository->delete($id);
        return $result ? json_encode(['success' => 'Элемент удален']) : json_encode(['error' => 'Неверный запрос']);
    }
}