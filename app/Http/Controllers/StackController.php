<?php

namespace App\Http\Controllers;

use File;
use App\Stack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class StackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stack.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stack.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $stack = new Stack();

        $name = $req->name;

        if ($name) 
            $stack->name = $name;

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
            $upload = $image->move(Config::get('image.stack_folder'), $fullname);

            if ($upload) {

                if ($fullname) 
                    $stack->image = $fullname;

            }
        }

        $stack->save();

        return redirect('stack.index')->with('message', $name . ' created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stack  $stack
     * @return \Illuminate\Http\Response
     */
    public function show(Stack $stack)
    {
        return view('stack.show', compact('stack'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stack  $stack
     * @return \Illuminate\Http\Response
     */
    public function edit(Stack $stack)
    {
        return view('stack.edit', compact('stack'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stack  $stack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stack $stack)
    {
        $name = $req->name;

        if ($name) 
            $stack->name = $name;

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
            $upload = $image->move(Config::get('image.stack_folder'), $fullname);

            if ($upload) {

                //if the new image was successfully uploaded delete the old image
                $oldImage = $stack->image;

                $path = Config::get('image.stack_folder') . '/' . $oldImage;

                if(File::exists($path)){
                    File::delete($path);
                }

                if ($fullname) 
                    $stack->image = $fullname;

            }
        }

        $stack->save();

        return redirect('stack.index')->with('message', 'Stack updated!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stack  $stack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stack $stack)
    {
        $stack->users()->detach($stack->id);

        $name = $stack->name;

        $stack->delete();

        redirect('stack.index')->with('message', $name . 'Movie deleted!');
    }
}
