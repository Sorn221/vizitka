<?php
namespace Vizitka\Api\v2\Repositories;

use Vizitka\Api\v2\Models\Item;

class ItemsRepository extends BaseRepository {
    protected function getTableName(): string {
        return 'items';
    }

    protected function getModelClass(): string {
        return Item::class;
    }
}