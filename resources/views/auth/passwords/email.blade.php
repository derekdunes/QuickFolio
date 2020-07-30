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
    <script defer src="{{asset('js/all.min.js') }}"></script>

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/theme.css') }}">

</head> 



<body class="p-0 theme-bg-light">    
    
    <section class="auth-section password-reset-section text-center py-5">
        <div class="container">
            <div class="site-logo mb-4"><a class="navbar-brand mr-0" href="index.html"><img class="logo-icon mr-2" src="{{ asset('svg/site-logo.svg') }}" alt="logo"><span class="logo-text">Quick<span class="text-alt">Folio</span></span></a></div> 
             
            <div class="auth-wrapper mx-auto shadow p-5 rounded">
                <h2 class="auth-heading text-center mb-4">Password Reset</h2>

                <div class="auth-intro mb-4 text-center">Enter your email address below. We'll email you a link to a page where you can easily create a new password.</div>

                <div class="auth-form-container text-left">
                    
                    <form class="auth-form resetpass-form" method="POST" action="{{ route('password.update') }}> 
                        @csrf               
                        <div class="form-group email">
                            <label class="sr-only" for="reg-email">Your Email</label>
                            <input id="reg-email" name="email" type="email" class="form-control login-email" placeholder="Your Email" required="required">
                        </div><!--//form-group-->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block theme-btn mx-auto">Reset Password</button>
                        </div>
                    </form>
                    
                    <div class="auth-option text-center pt-5"><a href="{{ route('login') }}" >Return to login</a></div>
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
    <script src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>  

    


</body>
</html> 


