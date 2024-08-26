<?php
namespace Vizitka\Api\Repositories;

use Vizitka\Api\Models\Item;

class ItemsRepository extends BaseRepository {
    protected function getTableName(): string {
        return 'items';
    }

    protected function getModelClass(): string {
        return Item::class;
    }
}