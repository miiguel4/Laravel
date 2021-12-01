<?php

namespace App\Http\Controllers;

/* use DB; */
use App\Models\Project;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\RedisCaster;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        /* $this->middleware('auth')->only('create', 'edit'); */
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('projects.index', [
           'projects' => Project::latest()->paginate() 
        ]);
    }

    public function show(Project $project)
    {
        /* return view('projects.show', [
            'project' => Project::findOrFail($id)
        ]); */

        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project
    ]);

    }

    public function store(SaveProjectRequest $request)
    {
        $title = request('title');
        $description = request('Description');

        // Pasar todos los campos
        /* Project::create(request()->all()); */
        //Pasar algunos

        /* $fields = request()->validate([
            'title' => 'required',
            'Description' => 'required'
        ]);
 */
        /* return request()->only('title', 'Description');
        Project::create( request()->only('title' , 'Description' )); */
       /*  Project::create($fields); */
        /* Project::create([
            'title' => $title,
            'Description' => $description,
        ]); */

        /* return request()->all(); */
        //Project::create(request()->all());
        
        Project::create($request->validated());
        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con existo');
    }

    public function edit(Project $project,)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project,  SaveProjectRequest $request)
    {
      /*  $project->update([
        'title' => request('title'),
        'Description' => request('Description'),
        ]); */
        $project->update( $request->validated() );
        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con existo');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con existo');
    }

}
