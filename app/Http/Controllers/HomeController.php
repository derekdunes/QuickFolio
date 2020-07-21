<?php

namespace App\Http\Controllers;

use File;
use App\User;
use App\Template;
use App\Stack;
use App\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

     public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $user = new User();

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
            $image = $req->image;
            $filename = $image->getClientOriginalName();

            $filename = pathinfo($filename, PATHINFO_FILENAME);

            //in production check if url/image file name already exist
            //make the url friendly
            $fullname = Str::slug(Str::random(8).$filename) . '.' . $image->getClientOriginalExtension();

            //upload image to upload folder then make a thumbnail from the upload image
            $upload = $image->move(Config('image.project_folder'), $fullname);

            if ($upload) {

                if ($fullname) 
                    $project->image = $fullname;
            }

        }

        $project->save();

        return redirect('project')->with('message', $name . ' created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {			//increment the user views
    				$count = $user->views + 1;
    				
    				$user->views = $count
    				
    				$user->save();
    				
        //get the theme
        $theme = $user->template()->name;

        $path = $theme . '.show';

        return view($path, compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, User $user)
    {   
        //if this logged in user is not the user that created the project
        //then reject the data
        if (auth()->user()->id != $user->id)
            return back()->with('error','This is not your project so you cant Update it');


        $name = $req->name;
        $title = $req->title;
        $password = $req->password;
        $bio = $req->bio;
        $linkedin = $req->linkedin;
        $github = $req->github;
        $twitter = $req->twitter;
        $instagram = $req->instagram;


        if ($name) 
            $user->name = $name;

        if ($title) 
            $user->title = $title;

        if ($password)
            $user->password = Hash::make($password);

        if ($bio) 
            $user->bio = $bio;

        if ($linkedin) 
            $user->linkedin = $linkedin;
        
        if($github)
            $user->github = $github;

        if ($twitter)
            $user->twitter = $twitter;

        if ($instagram)
            $user->instagram = $instagram;                
        
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
            $upload = $image->move(Config('image.user_folder'), $fullname);

            if ($upload) {

                //if the new image was successfully uploaded delete the old image
                $oldImage = $user->image;

                $path = Config('image.user_folder') . '/' . $oldImage;

                if(File::exists($path)){
                    File::delete($path);
                }

                if ($fullname) 
                    $user->image = $fullname;

            }
        }

        $user->save();


							$stack = Stack::all();
	
	       return redirect('user.chooseStack', compact('stack'));

    }

    public function updateStack(Request $req, User $user){

        

        if(isset($stacks)  && count($stacks) > 0)
        {
            //for each cast
            //find the cast and add to the pivot table 
            foreach ($stacks as $stack) { 

                $stack = Stack::find($stack);

                if ($stack) {
                    $User->stacks()->attach($stack);
                }

            }
       }

        $stacks = $req->stacks;
        $levels = $request->levels;
        $years = $request->years;

        //check if casts amd roles is set and if the aew equal
        if(isset($stacks) && isset($levels) && isset($years) && count($stacks) == count($levels) && count($stacks) == count($years))
        {
            //for each cast
            //find the cast and add to the pivot table 
            for ($i = 0; $i < count($stacks); $i++) { 

                $stack = Stack::find($stacks[$i]);

                if ($stack) {
                    $user->stacks()->sync($stack, ['level' => $levels[$i], 'years' => $years[$i] ], false);
                }

            }
        }

       return view('user.createProject', compact('user'));

    }

    public function updateProjects(Request $req)
    {   

        if ($request->hasFile('image')) {
            # code...

            $images = $req->image;
            $urls = $req->url;
            $names = $req->name;

            //make sure the images are same with s/n
            if (count($images) == count($urls) || count($images) == count($names)) {
                
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

                        if ($urls[$i])
                            $project->url = $urls[$i];

                        if ($fullname) 
                            $project->image = $fullname;

                        if ($names[$i])
                            $project->name = $names[$i];

                        if (auth()->user()->id)
                            $project->user_id = auth()->user()->id;

                        $project->save();
                            
                    }

            }
 
            
        $template = Template::all();
        //redirect to choose theme form
        return view('user.chooseTemplate', compact('template'));           
        
        }else{

            return back()->with('error',"Images , Descriptions and Names of Project don't Match");
        }

    } else{

        return back()->with('error',"Images does not exist Exist"); 
    
    }

        return back()->with('error',"Images does not exist Exist");
    }
    
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function updateTemplate(Request $req, User $user)
    {   
        //if this logged in user is not the user that created the project
        //then reject the data
        if (auth()->user()->id != $user->id)
            return back()->with('error','This is not your project so you cant Update it');


        $template = $req->template;
        

        if ($template) 
            $user->template_id = $template;

        $user->save();
        
        return redirect('home')->with('success', 'Your Portfolio was added Successfully! ');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //detach the stacks
        $user->stacks()->detach($user->id);

        $user->projects()->delete();

        $user->delete();

    }

}
