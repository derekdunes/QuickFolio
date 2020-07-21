<?php

namespace App\Http\Controllers;

use File;
use App\Template;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('template.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $template = new Template();

        $name = $req->name;

        $path = $req->path;

        //check whether path exist already
        $temp = Template::where('path','=', $path)->get();

        if (isset($temp) && count($temp) > 0) {
            return back()->with('message', 'The template path already exist choose new path');
        }

        if ($req->hasFile('image')) {

            $image = $req->image;
            $filename = $image->getClientOriginalName();

            $filename = pathinfo($filename, PATHINFO_FILENAME);

            //in production check if url/image file name already exist
            //make the url friendly
            $fullname = Str::slug(Str::random(8).$filename) . '.' . $image->getClientOriginalExtension();

            //upload image to upload folder then make a thumbnail from the upload image
            $upload = $image->move(Config('image.theme_folder'), $fullname);

            if ($upload) {

                if ($fullname) 
                    $template->image = $fullname;
            }            
        }

        if($name)
            $template->name = $name;

        if($path)
            $template->path = $path;


        $template->save();

        return redirect('template')->with('message', 'Template Created Successfully'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        return view('template.show', compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        return view('template.edit', compact('template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Template $template)
    {

        $name = $req->name;
        $path = $req->path;

        if($name)
            $template->name = $name;

        if($name)
            $template->path = $path;

        if ($req->hasFile('image')) {

            $image = Input::file('image');
            $filename = $image->getClientOriginalName();

            $filename = pathinfo($filename, PATHINFO_FILENAME);

            //in production check if url/image file name already exist
            //make the url friendly
            $fullname = Str::slug(Str::random(8).$filename) . '.' . $image->getClientOriginalExtension();

            //upload image to upload folder then make a thumbnail from the upload image
            $upload = $image->move(Config::get('image.theme_folder'), $fullname);

            if ($upload) {

                //if the new image was successfully uploaded delete the old image
                $oldImage = $template->image;

                $path = Config::get('image.template_folder') . '/' . $oldImage;

                if(File::exists($path)){
                    File::delete($path);
                }

                if ($fullname) 
                    $template->image = $fullname;

            }            
        }

        $template->save();

        return redirect('template')->with('message', 'Template updated Successfully'); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {   
        $template->users()->delete();

        $template->delete();
    }
}
