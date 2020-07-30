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
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">

    <link rel="stylesheet" href="{{ asset('css/atom-one-dark.min.css') }}">

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/theme.css') }}">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-24707561-58"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-24707561-58');
    </script>


    
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','//connect.facebook.net/en_US/fbevents.js');
    
    fbq('init', '1506230579705064');
    fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1506230579705064&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

</head> 

<body>    
    <header class="header fixed-top">       
        <div class="branding">
            <div class="container-fluid position-relative">
                <nav class="navbar navbar-expand-lg" >
                    <div class="site-logo"><a class="navbar-brand" href="{{ url('/') }}"><img class="logo-icon mr-2" src="{{ asset('svg/site-logo.svg') }}" alt="logo"><span class="logo-text">Quick<span class="text-alt">Folio</span></span></a></div>    

                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span> </span>
                        <span> </span>
                        <span> </span>
                    </button>
                    
                    <div class="collapse navbar-collapse py-3 py-lg-0" id="navigation">
                        <ul class="social-list list-inline mt-3 mt-lg-0 mb-lg-0 d-none d-xl-flex ml-lg-3 mr-lg-3">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
                        </ul><!--//social-list-->
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item mr-lg-4">
                                <a class="nav-link" href="{{ route('features') }}">Features</a>
                            </li>
                            <li class="nav-item mr-lg-4">
                               <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
                            </li>
                            <li class="nav-item mr-lg-4">
                                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                            </li>
                    
                            @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item dropdown mr-lg-4">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              {{ Auth::user()->name }}
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right rounded shadow menu-animate slideIn" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item has-icon" href="{{ route('home') }}"><span class="theme-icon-holder mr-2"><i class="fas fa-home fa-fw"></i></span>{{ Auth::user()->name }} Settings</a>
                                              
                                                <div class="dropdown-divider m-0"></div>

                                                 <a class="dropdown-item has-icon" href="{{ route('user.edit', Auth::user()->id) }}"><span class="theme-icon-holder mr-2"><i class="fas fa-home fa-fw"></i></span>Edit Profile</a>
                                              
                                                <div class="dropdown-divider m-0"></div>                                               
                                                
                                                @if(Auth::user()->image && Auth::user()->bio && Auth::user()->github)
                                                    
                                                    <a class="dropdown-item has-icon" href="{{ route('selectStack') }}"><span class="theme-icon-holder mr-2"><i class="fas fa-home fa-fw"></i></span>Choose Stacks</a>
                                                  
                                                    <div class="dropdown-divider m-0"></div>


                                                    <a class="dropdown-item has-icon" href="{{ route('createProject') }}"><span class="theme-icon-holder mr-2"><i class="fas fa-home fa-fw"></i></span>Add Projects</a>
                                              
                                                    <div class="dropdown-divider m-0"></div>
 

                                                    <a class="dropdown-item has-icon" href="{{ route('selectTemplate') }}"><span class="theme-icon-holder mr-2"><i class="fas fa-home fa-fw"></i></span>Choose Template</a>
                                              
                                                    <div class="dropdown-divider m-0"></div>

                                                @endif

                                                <a class="dropdown-item has-icon" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><span class="theme-icon-holder mr-2"><i class="fas fa-map-signs fa-fw"></i></span>{{ __('Logout') }}</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                            </div>
                                        </li>
                                    @else
                                        <li class="nav-item mr-lg-4">
                                               <a class="nav-link" href="{{ route('login') }}">Login</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item mr-lg-0 mt-3 mt-lg-0">
                                               <a class="btn btn-primary text-white" href="{{ route('register') }}">Sign up</a>
                                            </li>
                                        @endif
                                    @endauth
                            @endif

                        </ul>
                    </div>
                </nav>

            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->


    @yield('content')
               
    
    @yield('footer')
       
    <!-- Javascript -->          
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>  
    
    
    @yield('script') 
    


</body>
</html> 

