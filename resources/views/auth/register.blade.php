<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>CoderPro - Bootstrap 4 Template For Software Projects</title>
    
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
             
            <div class="auth-wrapper mx-auto shadow p-5 rounded">

                <h2 class="auth-heading text-center mb-5">Start Your Free trial today</h2>
                <div class="auth-heading-desc mb-5">No credit card required</div>

                <div class="social-auth text-center mx-auto">                        
                    <ul class="social-buttons list-unstyled">
                        <li class="mb-3">
                            <a href="#" class="btn btn-social btn-block">
                                <span class="icon-holder"><img src="{{ asset('svg/google-logo.svg') }}" alt=""></span>
                                <span class="btn-text">Sign in with Google</span>
                            </a>
                        </li>
                        <li class="mb-3"><a href="#" class="btn btn-social btn-block"><span class="icon-holder"><span class="icon-holder"><img src="{{ asset('svg/github-logo.svg') }}" alt=""></span></span><span class="btn-text">Sign in with Github</span></a></li>
                    </ul>
                </div><!--//social-auth-->
                
                <div class="divider my-5">
                    <span class="or-text">OR</span>
                </div><!--//divider-->

                <div class="auth-form-container text-left mx-auto">
                    <form class="auth-form login-form" method="POST" action="{{ route('register') }}">         
                        @csrf
                        
                        <div class="form-group name">
                            <label class="sr-only" for="signin-name">Name</label>
                            <input id="signin-name" name="name" type="text" class="form-control signin-name @error('name') is-invalid @enderror" placeholder="Full Name" required="required">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div><!--//form-group-->

                        <div class="form-group email">
                            <label class="sr-only" for="signin-email">Email</label>
                            <input id="signin-email" name="email" type="email" class="form-control  signin-email @error('email') is-invalid @enderror" placeholder="Email address" required="required">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div><!--//form-group-->

                        <div class="form-group password">
                            <label class="sr-only" for="signin-password">Password</label>
                            <input id="signin-password" name="password" type="password" class="form-control signin-password @error('password') is-invalid @enderror" placeholder="Password" required="required">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
 
                        </div><!--//form-group-->

                        <div class="form-group password">
                            <label class="sr-only" for="signin-password">Confirm Password</label>
                            <input id="signin-password" name="password_confirmation" type="password" class="form-control signin-password" placeholder="Password" required="required">
                        </div><!--//form-group-->


                        <div class="extra mb-4 text-center">By signing up, you agree to our <a href="#" class="theme-link">terms of service</a> and <a href="#" class="theme-link">privacy policy</a>.</div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block theme-btn mx-auto">Create Account</button>
                        </div>
                    </form><!--//auth-form-->
                    
                    <div class="auth-option text-center pt-5">Already have an account? <a href="{{ route('login') }}" >Log in</a></div>
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

