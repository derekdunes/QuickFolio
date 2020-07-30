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
                                        <li class="nav-item mr-lg-4">
                                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
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

    <section class="hero-section py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 pt-3 mb-5 mb-lg-0">
                    <h1 class="site-headline font-weight-bold mb-3">Share and promote your software portfolio like a pro</h1>
                    <div class="site-tagline mb-4">Designed for entrepreneurial software developers, QuickFolio is the ultimate Bootstrap 4 template for promoting or selling your <span id="typewriter" class="text-primary font-weight-bold"></span>.</div>
                    <div class="cta-btns mb-lg-3">
                        <a class="btn btn-primary mr-2 mb-3" href="pricing.html">Get Started Free<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                        <a class="btn btn-secondary mb-3" href="docs.html">View Docs<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <img class="hero-figure mx-auto" src="{{ asset('svg/promo-figure-alt.svg') }}" alt="">
                </div>
            </div><!--//row-->
        </div>
    </section><!--//hero-section-->
    
    <section class="benefits-section theme-bg-light py-5">
        
        <div class="container">
            <h3 class="mb-2 text-center font-weight-bold section-title">Made For Developers</h3>
            <div class="mb-5 text-center section-intro">From Web Developers to App Developers</div>
            <div class="row">
                <div class="item col-12 col-md-6 col-lg-3">
                    <div class="item-inner rounded">
                        <div class="icon-holder text-center mx-auto mb-3">
                            <i class="fas fa-shapes"></i>
                        </div><!--//icon-holder-->
                        <h5 class="mb-3">Quick and Simple</h5>
                        <div>List your project's benefit here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">free FontAwesome icons</a> available.</div>
                        <div class="mt-2"><a href="features.html">Learn more &rarr;</a></div>
                    </div><!--//item-inner-->
                </div><!--//item-->
                
                <div class="item col-12 col-md-6 col-lg-3">
                    <div class="item-inner rounded">
                        <div class="icon-holder text-center mx-auto mb-3">
                            <i class="fas fa-angle-double-right"></i>
                        </div><!--//icon-holder-->
                        <h5 class="mb-3">Lightening Fast</h5>
                        <div>List your project's benefit here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">free FontAwesome icons</a> available.</div>
                        <div class="mt-2"><a href="features.html">Learn more &rarr;</a></div>
                    </div><!--//item-inner-->
                </div><!--//item-->
                
                <div class="item col-12 col-md-6 col-lg-3">
                    <div class="item-inner rounded">
                        <div class="icon-holder text-center mx-auto mb-3">
                            <i class="fas fa-wrench"></i>
                        </div><!--//icon-holder-->
                        <h5 class="mb-3">Extendable</h5>
                        <div>List your project's benefit here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">free FontAwesome icons</a> available.</div>
                        <div class="mt-2"><a href="features.html">Learn more &rarr;</a></div>
                    </div><!--//item-inner-->
                </div><!--//item-->
                
                <div class="item col-12 col-md-6 col-lg-3">
                    <div class="item-inner rounded">
                        <div class="icon-holder text-center mx-auto mb-3">
                            <i class="fas fa-book"></i>
                        </div><!--//icon-holder-->
                        <h5 class="mb-3">Fully Documented</h5>
                        <div>List your project's benefit here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">free FontAwesome icons</a> available.</div>
                        <div class="mt-2"><a href="docs.html">View docs &rarr;</a></div>
                    </div><!--//item-inner-->
                </div><!--//item-->
                
            </div><!--//row-->
            <div class="pt-3 text-center">
                <a class="btn btn-light" href="features.html">View All Features<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
            </div>
        </div>
        
    </section><!--//benefits-section-->
    
    <section class="how-section py-5">
        <div class="container">
            <h3 class="mb-2 text-center font-weight-bold section-title">How Does It Work</h3>
            <div class="mb-5 text-center section-intro">You're only a few simple steps away</div>
            
            <div class="row">
                <div class="item col-12 col-md-4">
                    <div class="icon-holder">
                        <img src="monitor-loading-progress.svg" alt="">
                        <div class="arrow-holder d-none d-lg-inline-block"></div>
                    </div><!--//icon-holder-->
                    <div class="desc p-3">
                        <h5><span class="step-count mr-2">1</span>Download</h5>
                        <p>The illustrations used in this section are from <a href="https://transactions.sendowl.com/stores/8764/151385" target="_blank">Streamline's free illustrations pack</a>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div><!--//desc-->
                </div><!--//item-->
                <div class="item col-12 col-md-4">
                    <div class="icon-holder">
                        <img src="monitor-window.svg" alt="">
                        <div class="arrow-holder d-none d-lg-inline-block"></div>
                    </div><!--//icon-holder-->
                    <div class="desc p-3">
                        <h5><span class="step-count mr-2">2</span>Customize</h5>
                        <p>The illustrations used in this section are from <a href="https://transactions.sendowl.com/stores/8764/151385" target="_blank">Streamline's free illustrations pack</a>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div><!--//desc-->
                </div><!--//item-->
                <div class="item col-12 col-md-4">
                    <div class="icon-holder">
                        <img src="monitor-cash-credit-card.svg" alt="">
                    </div><!--//icon-holder-->
                    <div class="desc p-3">
                        <h5><span class="step-count mr-2">3</span>Launch</h5>
                        <p>The illustrations used in this section are from <a href="https://transactions.sendowl.com/stores/8764/151385" target="_blank">Streamline's free illustrations pack</a>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div><!--//desc-->
                </div><!--//item-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//how-section-->
    
    <div class="container"><hr></div>
    <section class="logos-section theme-bg-primary py-5 text-center">
        <div class="container">
            <h3 class="text-center">You're In Good Company</h3>
        <div class="section-intro mb-5">Join 500,000+ users around the world lorem ipsum dolor sit amet</div>
            <div class="logos-row row mx-auto"> 
                <div class="item col-6 col-md-4 mb-3 mb-lg-0">
                    <div class="item-inner">
                        <img src="{{ asset('svg/logo-1.svg') }}" alt="logo">
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-6 col-md-4 mb-3 mb-lg-0">
                    <div class="item-inner">
                        <img src="{{ asset('svg/logo-2.svg') }}" alt="logo">
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-6 col-md-4 mb-3 mb-lg-0">
                    <div class="item-inner">
                        <img src="{{ asset('svg/logo-3.svg') }}" alt="logo">
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-6 col-md-4 mb-3 mb-lg-0">
                    <div class="item-inner">
                        <img src="{{ asset('svg/logo-4.svg') }}" alt="logo">
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-6 col-md-4 mb-3 mb-lg-0">
                    <div class="item-inner">
                        <img src="{{ asset('svg/logo-5.svg') }}" alt="logo">
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-6 col-md-4 mb-3 mb-lg-0">
                    <div class="item-inner">
                        <img src="{{ asset('svg/logo-6.svg') }}" alt="logo">
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div>    
        </div><!--//container-->
    </section><!--//logo-section-->
    
    <div class="container"><hr></div>
    <section class="integration-section text-center py-5">
        <div class="container">
            <h3 class="mb-2">Seamless Integrations</h3>
            <div class="section-intro mb-3">Section intro goes here lorem ipsum</div>
            <div class="integration-list row justify-content-center py-5">
                <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><img class="shadow rounded-circle" src="{{ asset('svg/slack.svg') }}" alt=""></div>
                <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 bottom-line-lg"><img class="shadow rounded-circle" src="{{ asset('svg/jira.svg') }}" alt=""></div>
                <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><img class="shadow rounded-circle" src="{{ asset('svg/trello.svg') }}" alt=""></div>
                <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 bottom-line-lg"><img class="shadow rounded-circle" src="{{ asset('svg/aws.svg') }}" alt=""></div>
                <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><img class="shadow rounded-circle" src="{{ asset('svg/bootstrap.svg') }}" alt=""></div>
                <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5"><img class="shadow rounded-circle" src="{{ asset('svg/wordpress.svg') }}" alt=""></div>
                <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><img class="shadow rounded-circle" src="{{ asset('svg/shopify.svg') }}" alt=""></div>
                <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 bottom-line-lg"><img class="shadow rounded-circle" src="{{ asset('svg/ionic.svg') }}" alt=""></div>
                <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><img class="shadow rounded-circle" src="{{ asset('svg/paypal.svg') }}" alt=""></div>
                <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 bottom-line-lg"><img class="shadow rounded-circle" src="{{ asset('svg/stripe.svg') }}" alt=""></div>
                <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5"><img class="shadow rounded-circle" src="{{ asset('svg/apple-pay.svg') }}" alt=""></div>
            </div><!--//row-->
            
            <div class="pt-3 text-center">
                <a class="btn btn-light" href="#">View Docs<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
            </div>
        </div>
    </section><!--//intergration-section-->
    
    
    <section class="cta-section text-center py-5 theme-bg-dark position-relative">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
            <h3 class="mb-2 text-white mb-3">Get Started in No Time</h3>
            <div class="section-intro text-white mb-3 single-col-max mx-auto">CoderPro makes it super easy to get your software project online, so you can start promoting or selling your digital product to your audience.</div>
            <div class="pt-3 text-center">
                <a class="btn btn-light" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/">Get Started<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
            </div>
        </div>
    </section><!--//cta-section-->

               
    
    <footer class="footer">
        <div class="container py-5 mb-3">
            <div class="row">
                <div class="footer-col col-6 col-lg-3">
                    <h4 class="col-heading">Products</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Bootstrap Themes</a></li>
                        <li><a href="#">Design Templates</a></li>
                        <li><a href="#">Live Demo</a></li>
                        <li><a href="#">Showcase</a></li>
                        
                    </ul>
                </div><!--//footer-col-->
                <div class="footer-col col-6 col-lg-3">
                    <h4 class="col-heading">Developers</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">APIs</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div><!--//footer-col-->
                <div class="footer-col col-6 col-lg-3">
                    <h4 class="col-heading">Resources</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Docs</a></li>
                        <li><a href="#">Freebies</a></li>
                        <li><a href="#">Affliates</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </div><!--//footer-col-->
                <div class="footer-col col-6 col-lg-3">
                    <h4 class="col-heading">CoderPro</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms of Services</a></li>
                    </ul>
                    
                </div><!--//footer-col-->
            </div><!--//row-->
        </div><!--//container-->
        <div class="container">
            <hr>
        </div>
        <div class="newsletter-section py-5">
            <div class="container text-center">
                <h4 class="mb-2">Join Our Newsletter</h4>
                <div class="section-intro mb-2">Sign up to receive latest updates, features, and news!</div>
                <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Email address</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div><!--//newsletter-section-->
        <div class="footer-bottom text-center pb-5">
            <small class="copyright">Template Copyright &copy; <a href="https://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>
            <ul class="social-list list-unstyled pt-4 mb-0">
                <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li> 
                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
            </ul><!--//social-list-->
        </div>
    </footer>
       
    <!-- Javascript -->          
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>  
    
    
    <!-- Page Specific JS -->
    <script src="{{ asset('js/highlight.min.js') }}"></script>
    <script src="{{ asset('js/highlight-custom.js') }}"></script> 
    <script src="{{ asset('js/typewriterjs/dist/core.js') }}"></script> 
    <script src="{{ asset('js/typewriter-custom.js') }}"></script> 
    <script src="{{ asset('js/tiny-slider/min/tiny-slider.js') }}"></script> 
    <script src="{{ asset('js/tinyslider-custom.js') }}"></script> 
    


</body>
</html> 

