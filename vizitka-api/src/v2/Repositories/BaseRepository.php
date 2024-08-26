<?php
namespace Vizitka\Api\v2\Repositories;

abstract class BaseRepository {
    protected \PDO $pdo;

    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    abstract protected function getTableName(): string;
    abstract protected function getModelClass(): string;

    public function getAll(): array {
        $stmt = $this->pdo->query('SELECT * FROM ' . $this->getTableName());
        return $stmt->fetchAll(\PDO::FETCH_CLASS, $this->getModelClass());
    }

    public function getById(int $id): ?object {
        $stmt = $this->pdo->prepare('SELECT * FROM ' . $this->getTableName() . ' WHERE id = ?');
        $stmt->execute([$id]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $this->getModelClass());
        return $stmt->fetch() ?: null;
    }

    public function create(array $data): bool {
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));
        $stmt = $this->pdo->prepare('INSERT INTO ' . $this->getTableName() . ' (' . $columns . ') VALUES (' . $values . ')');
        return $stmt->execute(array_values($data));
    }

    public function update(int $id, array $data): bool {
        $set = implode(' = ?, ', array_keys($data)) . ' = ?';
        $data['id'] = $id;
        $stmt = $this->pdo->prepare('UPDATE ' . $this->getTableName() . ' SET ' . $set . ' WHERE id = ?');
        return $stmt->execute(array_values($data));
    }

    public function delete(int $id): bool {
        $stmt = $this->pdo->prepare('DELETE FROM ' . $this->getTableName() . ' WHERE id = ?');
        return $stmt->execute([$id]);
    }
}