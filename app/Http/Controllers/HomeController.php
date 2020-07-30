<?php

namespace App\Http\Controllers;

use View;
use File;
use App\User;
use App\Stack;
use App\Title;
use App\Template;
use App\Project;
use App\Level;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['show','contact','features','pricing']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = User::find(auth()->user()->id);

        return view('home', compact('user'));
        
    }

    public function contact()
    {
        return view('contact');
    }

    public function features(){

        return view('features');
    
    }

    public function pricing(){

        return view('pricing');
    
    }

    public function sendMail(Request $req)
    {
        
        $name = $req->name;

        $email = $req->email;

        $message = $req->message . ' by ' . $name . ' with email ' . $email;

        if ($name && $email && $message) {

            //Mail::to('mbahderek@gmail.com')->send($message);
        
        }

        return view('home');
    }

    public function create()
    {
        //return view('user.create');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //no need for this since the user is created during registration
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
  //   public function show($id)
  //   {			

  //       $user = User::with('stacks','projects')->find($id);

  //   	//increment the user views
  //   	$count = $user->views + 1;
    				
  //   	$user->views = $count;
    				
  //   	$user->save();
    				
  //       //get the theme
  //       $theme = Template::find($user->template_id);
							
  //   	$path = 'themes.' . $theme->path  . '.show';
		// $default = 'themes.default.show';
							
		// //if theme path does not exist
		// //switch to default theme
  //       if(View::exists($path)){
  //           return view($path, compact('user'));
  //       }
       
  //       return view($default, compact('user'));

  //   }

    public function previewTemplate($id){

        //if the user profile is incomplete
        //return back
        $user = User::with('projects', 'stacks')->find(auth()->user()->id);

        if ( !isset($user->projects) && !isset($user->stacks) ) {
            return back()->with('message', 'Please complete your profile to preview theme');
        }

        $theme = Template::find($id);

        $path = 'themes.' . $theme->path  . '.show';
        $default = 'themes.default.show';
                            
        //if theme path does not exist
        //switch to default theme
        if(View::exists($path)){

            return view($path, compact('user'));

        }
       
        return view($default, compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $user = User::find(auth()->user()->id);
  
        $titles = Title::all();

        return view('user.edit', compact('user','titles'));
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
            $user->title_id = $title;

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
	
	   return redirect('selectStack')->with('message', 'This is supposed to work');

    }

    public function showStacks(){

        $stacks = Stack::all();

        $levels = Level::all();

        $user = User::with('stacks')->find(auth()->user()->id);

        if (count($user->stacks) > 0) {
            //return view for updating stack
            return view('user.updateStack', compact('stacks', 'user', 'levels'));

        } else {
            
            //return a view for adding new stack
            return view('user.chooseStack', compact('stacks', 'user', 'levels'));

        }

    }


    public function updateNewStacks(Request $req, $id){

        $user = User::with('stacks')->find($id);

        $stacks = $req->stacks;
        $levels = $req->levels;
        $years = $req->years;

        //check if casts amd roles is set and if the aew equal
        if(isset($stacks) && isset($levels) && isset($years) && count($stacks) == count($levels) && count($stacks) == count($years))
        {
            //for each cast
            //find the cast and add to the pivot table 
            for ($i = 0; $i < count($stacks); $i++) { 

                $stack = Stack::find($stacks[$i]);

                if ($stack) {

                    $user->stacks()->attach($stack, ['level' => $levels[$i] , 'years' => $years[$i] ]);    
                       
                }

            }
        }

        return redirect('createProject')->with('message', 'This supposed to work');

    }

    public function updateStacks(Request $req, $id){

        $user = User::with('stacks')->find($id);

        $stacks = $req->stacks;
        $levels = $req->levels;
        $years = $req->years;

        //check if casts amd roles is set and if the aew equal
        if(isset($stacks) && isset($levels) && isset($years) && count($stacks) == count($levels) && count($stacks) == count($years))
        {

            //laravel 7 new technique of syncing
            //pending fix for saving attributes
            $user->stacks()->sync($stacks, [ 'level' => $levels , 'years' => $years ]);   

        }

        return redirect('createProject')->with('message', 'This supposed to work');

    }

    public function showProjects(){

        $user = User::with('projects')->find(auth()->user()->id);

        //return a view for adding new stack
        return view('user.createProject');

    }

        public function showTemplates(){

        $templates = Template::with('plan')->get()  ;

        $user = User::find(auth()->user()->id);

        //redirect to choose theme form
        return view('user.chooseTemplate', compact('templates', 'user'));
    
    }

    public function updateProjects(Request $req, $id)
    {   

        if ($req->hasFile('image')) {
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
                            $project->user_id = $id;

                        $project->save();
                            
                    }

            }
 
           return redirect('selectTemplate')->with('message', 'This supposed to work');          
        
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
    public function updateTemplate(Request $req, $id)
    {   
        $user = User::find($id);

        $template = $req->template;
        
        if ($template){ 
        
            $user->template_id = $template;
        
        }else{
        
            return back()->with('message', 'Please select a theme of your choice');
        
        }

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
