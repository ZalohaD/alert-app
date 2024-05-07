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

    public function category_show($id){
        $category = Category::find($id);

        return view('category', compact('category'));
    }
}
