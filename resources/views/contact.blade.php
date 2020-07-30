
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
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/theme.css') }}">

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
    
    
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Contact Us</h1>
		    <div class="page-intro single-col-max mx-auto">Get in touch if you have any questions or want to get a custom quote</div>
		    
	    </div>
    </div><!--//page-header-->
    
	<div class="page-content py-5">
		<section class="options-section">
			<div class="container">
				<div class="row">
				    <div class="col-12 col-lg-6 mb-5">
						<div class="media shadow-sm p-4 rounded h-100">
							<!---
								/* Uncomment if you want to use a FontAwesome icon instead of an image */
								<div class="theme-icon-holder mr-4"><i class="far fa-life-ring"></i></div> 
							-->
							<img class="mr-3" src="{{ asset('svg/customer-service-man.svg')}}" alt="">
						    <div class="media-body">
							    <h5 class="mt-0"><a href="#">Customer Support<i class="fas fa-long-arrow-alt-right ml-2"></i></a></h5>
							    If you use a help desk ticketing software (eg. Zendesk, Groove) you can provide more info here. The illustration used here is from <a class="theme-link" href="https://transactions.sendowl.com/stores/8764/151385" target="_blank">Streamline's free illustrations pack</a>.
							</div><!--//media-body-->
						</div><!--//media-->
					</div><!--//col-->
					<div class="col-12 col-lg-6 mb-5">
						<div class="media shadow-sm p-4 rounded h-100">
							
							<!---
								/* Uncomment if you want to use a FontAwesome icon instead of an image */
								<div class="theme-icon-holder mr-4"><i class="fas fa-code"></i></div>
							-->
							<img class="mr-3" src="{{ asset('svg/write-paper-ink.svg') }}" alt="">
						    <div class="media-body">
							    <h5 class="mt-0"><a href="docs.html">Documentation<i class="fas fa-long-arrow-alt-right ml-2"></i></a></h5>
							    Have technical questions? Checkout our documentation. The illustration used here is from <a class="theme-link" href="https://transactions.sendowl.com/stores/8764/151385" target="_blank">Streamline's free illustrations pack</a>
							</div><!--//media-body-->
						</div><!--//media-->
					</div><!--//col-->
				</div><!--//row-->
			</div><!--//container-->
		</section><!--//options-section-->
		<section class="contact-form-section mb-5">
			<div class="container">
			    <form id="contact-form" class="contact-form p-5 col-lg-9 mx-lg-auto theme-bg-light shadow" method="POST" action="{{ route('sendMail') }}">
			        <h3 class="text-center">Ask A Question</h3>
			        <div class="mb-3 text-center">For pre-sale and general questions, please use the form below.</div>
			        <div class="form-row">                                                           
		                <div class="form-group col-md-6">
		                    <label class="sr-only" for="cname">Name</label>
		                    <input type="text" class="form-control" id="cname" name="name" placeholder="Name" minlength="2" required="" >
		                </div>                    
		                <div class="form-group col-md-6">
		                    <label class="sr-only" for="cemail">Email</label>
		                    <input type="email" class="form-control" id="cemail" name="email" placeholder="Email" required="" >
		                </div>
		                
		                <div class="form-group col-12">
		                    <label class="sr-only" for="cmessage">Your message</label>
		                    <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="10" required=""></textarea>
		                </div>
		                 <div class="form-group col-12">
		                    <button type="submit" class="btn btn-block btn-primary py-2">Submit</button>
		                </div>                           
		            </div><!--//form-row-->
		        </form>
		    </div><!--//container-->
		</section><!--//contact-form-section-->
		
	</div><!--//page-content-->   
    
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
    <script src="jquery-3.4.1.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="jquery.validate.min.js"></script>  
    <script src="form.js"></script>
    

</body>
</html> 

