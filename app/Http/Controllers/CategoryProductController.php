<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryProductController extends Controller
{
    public function index(Category $category)
    {
        return $category->products()->cursorPaginate(10);
    }
}
