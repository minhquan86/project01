<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\CategoryService;
use App\Services\ProductService;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $productService;
    protected $categoryService;

    public function __construct(
        ProductService $productService,
        CategoryService $categoryService,
    ) {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }
    public function index() {
        $products = $this->productService->findAll();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryService->findAll();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $input = $request->except('image');
        $product = $this->productService->store($input);
        if ($request->image) {
            $this->productService->updateImage($product->id, $request->image);
        }
        return redirect()->route('products.index')->with('status', 'Tạo Sản Phẩm Thành Công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->productService->find($id);
        $categories = $this->categoryService->findAll();
        return view('admin.products.edit', compact(
            'product',
            'categories',
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $input = $request->except('image');
        $this->productService->update($id, $request->validated());
        
        if ($request->image) {
            $this->productService->updateImage($id, $request->image);
        }
        return redirect()->route('products.index')->with('status', 'Cập Nhật Sản Phẩm Thành Công');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productService->delete($id);

        return redirect()->route('products.index')->with('status', 'Xóa Sản Phẩm Thành Công');
    }
}
