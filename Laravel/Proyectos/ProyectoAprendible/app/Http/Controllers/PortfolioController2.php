<?php

namespace App\Http\Controllers;

/* use DB; */
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $portfolio = [
            ['title' => 'Proyecto #1'],
            ['title' => 'Proyecto #2'],
            ['title' => 'Proyecto #3'],
            ['title' => 'Proyecto #4'],
        ];
        return view('portfolio', compact('portfolio')); */

        //Eloquent

       /*  $portfolio = DB::table('projects')->get(); */
        
        /* $portfolio = Project::get();*/

        //Orden descendente
        /* $portfolio = Project::orderBy('created_at','DESC')->get(); */
        // Paginar resultado
        /* $portfolio = Project::latest()->paginate(); */
        /* $portfolio = Project::latest('updated_at')->get(); */
        /* return view('portfolio', compact('portfolio')); */
        return view('projects.index', [
           'projects' => Project::latest()->paginate() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* return $id; */
        /* return Project::find($id); */
        return view('projects.show', [
            'project' => Project::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
