<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>QuickFolio - Portfolio For Software Engineers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap 4 Template For Software Startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="{{ asset('js/all.min.js') }}"></script>

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/theme.css') }}  ">

</head> 

<body class="p-0 theme-bg-light">    

    <section class="auth-section login-section text-center py-5">
        <div class="container">
            <div class="site-logo mb-4"><a class="navbar-brand mr-0" href="index.html"><img class="logo-icon mr-2" src="{{ asset('svg/site-logo.svg') }}" alt="logo"><span class="logo-text">Quick<span class="text-alt">Folio</span></span></a></div> 
            
            <div class="container-fluid">
                <ul class="features-tab nav nav-pills justify-content-center" id="features-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="feature-tab-1" data-toggle="tab" href="#feature-1" role="tab" aria-controls="feature-1" aria-selected="true"><svg class="svg-inline--fa fa-shapes fa-w-16 mr-2 d-none d-lg-inline-block" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shapes" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M128,256A128,128,0,1,0,256,384,128,128,0,0,0,128,256Zm379-54.86L400.07,18.29a37.26,37.26,0,0,0-64.14,0L229,201.14C214.76,225.52,232.58,256,261.09,256H474.91C503.42,256,521.24,225.52,507,201.14ZM480,288H320a32,32,0,0,0-32,32V480a32,32,0,0,0,32,32H480a32,32,0,0,0,32-32V320A32,32,0,0,0,480,288Z"></path></svg><!-- <i class="fas fa-shapes mr-2 d-none d-lg-inline-block"></i> --><span>Basic Profile</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="feature-tab-2" data-toggle="tab" href="#feature-2" role="tab" aria-controls="feature-2" aria-selected="false"><svg class="svg-inline--fa fa-laptop-code fa-w-20 mr-2 d-none d-lg-inline-block" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="laptop-code" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63l58.35 58.34zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63zM624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16zM576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512V48zm-64 272H128V64h384v256z"></path></svg><!-- <i class="fas fa-laptop-code mr-2 d-none d-lg-inline-block"></i> -->Select Technology Stacks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="feature-tab-3" data-toggle="tab" href="#feature-3" role="tab" aria-controls="feature-3" aria-selected="false"><svg class="svg-inline--fa fa-laptop-code fa-w-20 mr-2 d-none d-lg-inline-block" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="laptop-code" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63l58.35 58.34zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63zM624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16zM576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512V48zm-64 272H128V64h384v256z"></path></svg><!-- <i class="fas fa-laptop-code mr-2 d-none d-lg-inline-block"></i> -->Create Projects</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="feature-tab-3" data-toggle="tab" href="#feature-3" role="tab" aria-controls="feature-3" aria-selected="false"><svg class="svg-inline--fa fa-laptop-code fa-w-20 mr-2 d-none d-lg-inline-block" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="laptop-code" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63l58.35 58.34zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63zM624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16zM576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512V48zm-64 272H128V64h384v256z"></path></svg><!-- <i class="fas fa-laptop-code mr-2 d-none d-lg-inline-block"></i> -->Choose Portfolio Theme </a>
                    </li>
                </ul>
            </div>

            <div class="auth-wrapper mx-auto shadow p-5 rounded">

                <h2 class="auth-heading text-center mb-5">Complete Your Profile</h2>

                <div class="auth-form-container text-left mx-auto">
                    <form class="auth-form login-form" method="POST" action="{{ route('user.update', Auth::user()->id) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        
                        <div class="form-group name">
                            <label class="sr-only" for="signin-name">Name</label>
                            <input id="signin-name" name="name" type="text" class="form-control signin-name @error('name') is-invalid @enderror" placeholder="Full Name" value="{{ $user->name }}" required="required">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div><!--//form-group-->

                        <div class="form-group name">
                            <label class="sr-only" for="signin-name">Title</label>
                            <select id="signin-name" name="title" class="form-control  signin-name @error('title') is-invalid @enderror custom-select" style=" padding-top: 10px; padding-bottom: 10px" required>
                                

                                @if($user->title_id)
                                    
                                    <option value="" disabled>Choose your Title</option>

                                    @foreach($titles as $title)

                                        @if($user->title_id == $title->id)

                                            <option value="{{ $title->id }}" selected>{{ $title->name }}</option>

                                        @else

                                            <option value="{{ $title->id }}">{{ $title->name }}</option>

                                        @endif

                                    @endforeach
                                
                                @else
                                    <option value="" disabled selected>Choose your Title</option>

                                    @foreach($titles as $title)

                                        <option value="{{ $title->id }}">{{ $title->name }}</option>

                                    @endforeach

                                @endif


                            </select>                            

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div><!--//form-group-->

                        <div class="form-group email">
                            <label class="sr-only" for="signin-email">Email</label>
                            <input id="signin-email" type="email" class="form-control  signin-email @error('email') is-invalid @enderror" placeholder="Email address" value="{{ $user->email }}" disabled>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div><!--//form-group-->

                        <div class="form-group name">
                            <label class="sr-only" for="signin-bio">Bio</label>
                            <textarea id="signin-name" name="bio" rows="5" class="form-control signin-name @error('bio') is-invalid @enderror" placeholder="Complete your Bio" required>{{ $user->bio }}</textarea>
                                @error('bio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
 
                        </div><!--//form-group-->

                        <div class="form-group image">
                            <label class="sr-only" for="image">Profile Image</label>
                            <input id="image" name="image" type="file" class="form-control signin-name @error('image') is-invalid @enderror" required accept="image/*" style="padding-top: 10px">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
 
                        </div><!--//form-group-->

                        <div class="form-group name">
                            <label class="sr-only" for="linkedin">LinkedIn</label>
                            <input id="linkedin" name="linkedin" type="url" class="form-control signin-name @error('linkedin') is-invalid @enderror" placeholder="Linkedin" value="{{ $user->linkedin }}" required="required">
                                @error('linkedin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
 
                        </div><!--//form-group-->

                        <div class="form-group name">
                            <label class="sr-only" for="github">Github</label>
                            <input id="github" name="github" type="url" class="form-control signin-name @error('github') is-invalid @enderror" placeholder="Github" value="{{ $user->github }}" required="required">
                                @error('github')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
 
                        </div><!--//form-group-->

                        <div class="form-group name">
                            <label class="sr-only" for="twitter">Twitter</label>
                            <input id="twitter" name="twitter" type="url" class="form-control signin-name @error('twitter') is-invalid @enderror" placeholder="Twitter" value="{{ $user->twitter }}" required="required">
                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
 
                        </div><!--//form-group-->

                        <div class="form-group name">
                            <label class="sr-only" for="instagram">Instagram</label>
                            <input id=instagram" name="instagram" type="url" class="form-control signin-name @error('instagram') is-invalid @enderror" placeholder="Instagram" value="{{ $user->instagram }}" required="required">
                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
 
                        </div><!--//form-group-->

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block theme-btn mx-auto">Update Profile</button>
                        </div>
                    </form><!--//auth-form-->
                    
                </div><!--//auth-form-container-->
                
            </div><!--//auth-wrapper-->
        </div><!--//container-->
    </section><!--//auth-section-->

    <footer class="footer auth-footer py-5">
        <div class="footer-bottom text-center">
            <small class="copyright">Template Copyright &copy; <a href="https://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>
        </div><!--//footer-bottom-->
    </footer><!--//footer-->
       
    <!-- Javascript -->          
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>  

    


</body>
</html> 

