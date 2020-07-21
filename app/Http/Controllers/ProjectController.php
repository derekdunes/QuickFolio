<?php

namespace App\Http\Controllers;

use File;
use App\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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

        if ($request->hasFile('image')) {
                # code...

                $images = $req->image;
                $names = $req->name;
                $urls = $req->url;

                //make sure the images are same with s/n
                if (count($images) == count($names) && count($images) == count($urls) && count($names) == count($urls)) {
                    
                    //loop through both array and store the values in the db
                    for ($i = 0; $i < count($images); $i++) {
                        
                        //save the image
                        //if validation passes
                        $image = $images[$i];

                        $filename = $image->getClientOriginalName();

                        $filename = pathinfo($filename, PATHINFO_FILENAME);

                        //in production check if url/image file name already exist
                        //make the url friendly
                        $fullname = Str::slug(Str::random(8).$filename) . '.' . $image->getClientOriginalExtension();

                        //upload image to upload folder then make a thumbnail from the upload image
                        $upload = $image->move(Config('image.project_folder'), $fullname);

                        if ($upload) {
                            //create new model object to save the data
                            $project = new Project();

                            if ($name) 
                                $project->name = $name;

                            if ($url)
                                $project->url = $url;

                            if ($fullname) 
                                $project->image = $fullname;

                            if (auth()->user()->id)
                                $project->user_id = auth()->user()->id;

                            $project->save();
                                
                        }

                }

                return redirect('project')->with('success', 'Your Images were added Successfully! ');            
            
            }else{

                    return back()->with('error',"Images and Names don't Match");
            
            }

        } else{

            return back()->with('error',"Images and Serial No don't Match"); 
        
        }

        return redirect('project')->with('message', $name . ' created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('project.show', compact('project'));
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
    
        $name = $req->name;
        $url = $req->url;

        if ($name) 
            $project->name = $name;

        if ($url)
            $project->url = $url;

        //Add image
        if ($req->hasFile('image')) {
            # code...
            $image = $req->image;
            $filename = $image->getClientOriginalName();

            $filename = pathinfo($filename, PATHINFO_FILENAME);

            //in production check if url/image file name already exist
            //make the url friendly
            $fullname = Str::slug(Str::random(8).$filename) . '.' . $image->getClientOriginalExtension();

            //upload image to upload folder then make a thumbnail from the upload image
            $upload = $image->move(Config('image.project_folder'), $fullname);

            if ($upload) {

                //if the new image was successfully uploaded delete the old image
                $oldImage = $project->image;

                $path = Config('image.project_folder') . '/' . $oldImage;

                if(File::exists($path)){
                    File::delete($path);
                }

                if ($fullname) 
                    $project->image = $fullname;

            }
        }

        $project->save();

        return redirect('project')->with('message', $name . ' created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {			$name = $project->name;
        $project->delete();
        
        return redirect('project')->with('message', $name . ' deleted successfully');
        
    }
}
