<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ApiProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['category', 'technologies'])->orderBy('updated_at', 'desc')->get();
        return response()->json($projects);
    }
    public function show(Project $project)
    {
        $project->load(['category', 'technologies']);
        return response()->json($project);
    }
}
