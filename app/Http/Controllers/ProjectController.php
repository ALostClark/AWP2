<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller {

  public function index() {
    return view('pages.project.table', ['projects' => Project::all()]);
  }

  public function show(Project $project) {
    return view('pages.project.view', ['project' => $project]);
  }

  public function create() {
    return view('pages.project.create');
  }

  public function store(Request $request) {
    $filename = time() . '-' . $request->input('title') . '.png';
    $request->validate([ 'file' => 'required|mimes:png' ]);

    $project = Project::create([
      'title' => $request->input('title'),
      'description' => $request->input('description'),
      'link' => $request->input('link'),
      'date' => $request->input('date'),
      'image' => $filename,
    ]);

    $file = $request->file('file');
    $file->storePubliclyAs('public', $filename);
    return redirect()->route('view_project', ['project' => $project]);

  }

  public function edit(Project $project) {
    return view('pages.project.update', ['project' => $project]);
  }

  public function update(Request $request, Project $project) {
    $filename = time() . '-' . $request->input('title') . '.png';
    $request->validate([ 'file' => 'required|mimes:png' ]);

    $project->update([
      'title' => $request->input('title'),
      'description' => $request->input('description'),
      'link' => $request->input('link'),
      'date' => $request->input('date'),
      'image' => $filename,
    ]);

    $file = $request->file('file');
    $file->storePubliclyAs('public/project', $filename);

    return redirect()->route('view_project', ['project' => $project]);
  }

  public function destroy(Project $project) {
    $project->delete();
    return redirect()->route('all_projects');
  }

}
