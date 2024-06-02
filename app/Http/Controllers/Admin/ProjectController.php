<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Requests\StoreProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        return view('admin.projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $form_data = $request->validated();
        $new_project = Project::create($form_data);
        return redirect()->route('admin.dashboard', $new_project->slug)->with('success', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // Possibile soluzione passando lo $slug alla funzione show
        $project = Project::where('slug', $slug)->first();
        // dd($project);

        return view('admin.projects.show', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $form_data = $request->validated();
        $project->update($form_data);

        return redirect()->route('admin.projects.show', $project->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.dashboard')->with('deleted', 'Project deleted successfully');
    }

    // public function validation($data) {
    //     // costruiamo il nostro validator
    //     $validator = Validator::make($data, [
    //         'title' => 'required|max:255',
    //         'description' => 'nullable|min:5|max:255',
    //         'technologies_used' => 'nullable|max:255',
    //         'start_date' => 'nullable|date',
    //         'end_date' => 'nullable|date|after:start_date',
    //         'url' => 'nullable|url',
    //         'repository_url' => 'nullable|url',
    //         'image_path' => 'nullable|url',
    //         'status' => 'required|max:255',
    //     ], [
    //         'title.required' => 'This title is required bro!',
    //         'title.max' => 'Mate.. The title can not be longer than 255 characters',
    //         'description.min' => 'Can you write more than 4 characters?',
    //         'description.max' => 'Are you kidding me? The description can not be longer than 255 characters',
    //         'technologies_used.max' => 'The technologies used can not be longer than 255 characters',
    //         'end_date.after' => 'This project is too old, mate. It can not be finished before its start date.',
    //         'status.required' => 'This status is required bro!'
    //     ],
    //     )->validate();

    //     return $validator;
    // }
}
