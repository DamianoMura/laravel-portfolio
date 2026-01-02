<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Project;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        category::create([
            'name' => $data['name'],
            'description' => $data['description'],
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        $categories = category::all();
        return view('categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $data = $request->all();

        $category->update([
            'name' => $data['name'],
            'description' => $data['description'],
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $projects = Project::where('category_id', $category->id)->get();
        // dd('viewing projects supposedly with same category_id.' . $projects);
        foreach ($projects as $project) {
            $project->update(['category_id' => 1]);
            // dd('viewing updat projects :' . $project->category_id);
        }
        if ($category->id == 1) {
            $message = "Default category cannot be deleted.";
        } else {
            $message = "Category deleted successfully.";
            $category->delete();
        }

        return redirect()->route('categories.index')->with('success', $message);
    }
}
