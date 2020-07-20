<?php

namespace App\Http\Controllers;

use File;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $project = new Project();

        $name = $req->name;
        $url = $req->url;

        if ($name) 
            $project->name = $name;

        if ($url)
            $project->url = $url;

        if (auth()->user()->id)
            $project->user_id = auth()->user()->id;

        //Add image
        if ($req->hasFile('image')) {
            # code...
            $image = Input::file('image');
            $filename = $image->getClientOriginalName();

            $filename = pathinfo($filename, PATHINFO_FILENAME);

            //in production check if url/image file name already exist
            //make the url friendly
            $fullname = Str::slug(Str::random(8).$filename) . '.' . $image->getClientOriginalExtension();

            //upload image to upload folder then make a thumbnail from the upload image
            $upload = $image->move(Config::get('image.project_folder'), $fullname);

            if ($upload) {

                if ($fullname) 
                    $project->image = $fullname;

            }
        }

        $project->save();

        return redirect('project.index')->with('message', $name . ' created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Project $project)
    {   
        //if this logged in user is not the user that created the project
        //then reject the data
        if (auth()->user()->id != $project->user_id)
            return back()->with('error','This is not your project so you cant Update it');

        $name = $req->name;
        $url = $req->url;

        if ($name) 
            $project->name = $name;

        if ($url)
            $project->url = $url;

        //Add image
        if ($req->hasFile('image')) {
            # code...
            $image = Input::file('image');
            $filename = $image->getClientOriginalName();

            $filename = pathinfo($filename, PATHINFO_FILENAME);

            //in production check if url/image file name already exist
            //make the url friendly
            $fullname = Str::slug(Str::random(8).$filename) . '.' . $image->getClientOriginalExtension();

            //upload image to upload folder then make a thumbnail from the upload image
            $upload = $image->move(Config::get('image.project_folder'), $fullname);

            if ($upload) {

                //if the new image was successfully uploaded delete the old image
                $oldImage = $project->image;

                $path = Config::get('image.project_folder') . '/' . $oldImage;

                if(File::exists($path)){
                    File::delete($path);
                }

                if ($fullname) 
                    $project->image = $fullname;

            }
        }

        $project->save();

        return redirect('project.index')->with('message', $name . ' created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
    }
}
