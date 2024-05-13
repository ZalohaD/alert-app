<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(){
        $categories = Category::with('jobs')->get();
        return view("categories", ["categories"=> $categories]);
    }

    public function category_show(Category $category){
        $jobs = $category->jobs()->paginate(10);

        return view('category', compact('jobs'));
    }
}
