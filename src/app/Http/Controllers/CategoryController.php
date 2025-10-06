<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function store(Request $request)
     {
  $category = $request->only(['name']);
  Category::create($category);

  return redirect('/categories')->with('message', 'カテゴリを作成しました');
     }

}
