<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $categoryService;

    public function __construct(
        CategoryService $categoryService,
    ) {
        $this->categoryService = $categoryService;
    }

    public function index() {
        $categories = $this->categoryService->findAll();
        return view('dashboard.index', compact('categories'));
    }
}
