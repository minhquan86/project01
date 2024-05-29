<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * MasterService constructor.
     */
    public function __construct(
        ProductRepository $productRepository,
    ) {
        $this->productRepository = $productRepository;
    }

    /**
     * Get all masters from DB
     *
     * @param  array  $request
     */
    public function findAll()
    {
        return $this->productRepository->all();
    }

    /**
     * Get specified master from DB
     *
     * @param  number  $id
     */
    public function find($id)
    {
        return $this->productRepository->find($id);
    }

    /**
     * Store master data to DB
     *
     * @param  array  $request
     */
    public function store($request)
    {
        return $this->productRepository->create($request);
    }

    /**
     * Update specified master data to DB
     *
     * @param  int  $id
     * @param  array  $request
     */
    public function update($id, $request)
    {
        $result = $this->productRepository->update($id, $request);
        if (! $result) {
            abort(404);
        }

        return true;
    }

    /**
     * Delete specified master from DB
     *
     * @param  int  $id
     */
    public function delete($id)
    {
        $result = $this->productRepository->delete($id);
        if (! $result) {
            abort(404);
        }

        return true;
    }

    public function updateImage ($id, $file) {
        $path = "products/$id/" . $file->getClientOriginalName();

        Storage::disk('local')->deleteDirectory("products/$id");
        Storage::disk('local')->put($path, file_get_contents($file));

        return $this->update($id, ['image' => $path]);
    }
}
