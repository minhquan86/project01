<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    /**
    * Initialize the repository model
    *
    * @return string
    */
    public function model()
    {
        return Category::class;
    }
}
