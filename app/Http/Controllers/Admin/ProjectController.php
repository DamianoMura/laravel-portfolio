<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\technology;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = technology::all();
        $projects = Project::all();
        $projects = Project::orderBy('updated_at', 'desc')->get();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technologies = technology::all();
        $categories = Category::all();

        return view('projects.create', compact('categories', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data =  $request->all();
        $user = Auth::user()->id;
        $newProject = new Project();
        $newProject->title = $data['title'];
        $newProject->author = $user;
        $newProject->category_id = $data['category'];
        $newProject->content = $data['content'];
        $newProject->save();
        $newProject->technologies()->attach($data['technologies']);
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $technologies = technology::all();
        $categories = Category::all();
        return view('projects.edit', compact('project', 'categories', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->title = $data['title'];
        $project->category_id = $data['category'];
        $project->content = $data['content'];
        $project->technologies()->sync($data['technologies']);
        $project->update();
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
