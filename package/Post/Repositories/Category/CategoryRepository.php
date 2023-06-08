<?php

namespace Corebase\Post\Repositories\Category;

use Corebase\Post\Models\Category;
use Corebase\Post\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return Category::class;
    }
}
