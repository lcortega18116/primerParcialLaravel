<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoriesRequest;
use App\Http\Requests\CategoriesRequest2;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return $categories;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriesRequest $request)
    {
        $newCategory = new Category();
        $newCategory->name = $request->name;
        $newCategory->description = $request->description;
        $newCategory->is_active = $request->is_active;
        $newCategory->averageSalary = $request->averageSalary;
        $newCategory->save();
        return $newCategory;

    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriesRequest2 $request, string $id)
    {
        $category = Category::find($id);
        $category->name = $request->name ?? $category->name;
        $category->description = $request->description ?? $category->description;
        $category->is_active = $request->is_active ?? $category->is_active;
        $category->averageSalary = $request->averageSalary ?? $category->averageSalary;
        $category->save();
        return $category;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();
        return response()->json([
            'message' => 'category deleted',
            'category' => $category
        ],200);
    }
}
