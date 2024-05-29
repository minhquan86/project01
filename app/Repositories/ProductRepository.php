<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
    * Initialize the repository model
    *
    * @return string
    */
    public function model()
    {
        return Product::class;
    }
}
