@extends('layouts.wave')

@section('content')

	<div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Launch Better. Get Attention Faster.</h1>
		    <div class="page-intro single-col-max mx-auto">Every project covered - JavaScript library, jQuery plugin, CMS plugin, browser extension, mobile app, open source project and many more...</div>
	    </div>
    </div><!--//page-header-->
    
	<div class="page-content py-5">
		<div class="container-fluid">
			<ul class="features-tab nav nav-pills justify-content-center" id="features-tab" role="tablist">
				<li class="nav-item">
				    <a class="nav-link active" id="feature-tab-1" data-toggle="tab" href="#feature-1" role="tab" aria-controls="feature-1" aria-selected="true"><i class="fas fa-shapes mr-2 d-none d-lg-inline-block"></i><span>Features 1 <small class="d-none d-lg-inline font-weight-normal">(Ziagzag Layout)</small></span></a>
				</li>
				<li class="nav-item">
				    <a class="nav-link" id="feature-tab-2" data-toggle="tab" href="#feature-2" role="tab" aria-controls="feature-2" aria-selected="false"><i class="fas fa-laptop-code mr-2 d-none d-lg-inline-block"></i>Features 2 <small class="d-none d-lg-inline font-weight-normal">(Umbrella Layout)</small></a>
				</li>
				<li class="nav-item">
				    <a class="nav-link" id="feature-tab-3" data-toggle="tab" href="#feature-3" role="tab" aria-controls="feature-3" aria-selected="false"><i class="fas fa-laptop-code mr-2 d-none d-lg-inline-block"></i>Features 3 <small class="d-none d-lg-inline font-weight-normal">(Carousel Layout)</small></a>
				</li>
				
			</ul>
		</div><!--//container-fluid-->
		<div class="container">
			<div class="features-tab-content tab-content" id="features-tab-content">
				<div class="feature-1-pane tab-pane fade show active py-5" id="feature-1" role="tabpanel" aria-labelledby="feature-tab-1">
					
					<div class="zigzag-layout">
<div class="item py-5 mb-5">
	                       
							<div class="row">
								<div class="col-12 col-md-5 mb-5 mb-md-0">
									<div class="content pr-5">
										<h3 class="heading">Image Example</h3>
										<div class="desc">
											<p>You can take screenshots of your software and showcase each features.</p>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
											<div class="tech-icons mb-3">
												<i class="fab fa-js-square mr-2"></i>
												<i class="fab fa-bootstrap mr-2"></i>
												<i class="fab fa-html5 mr-2"></i>
												<i class="fab fa-sass mr-2"></i>
												<i class="fab fa-sketch"></i>
											</div><!--//tech-icons-->
											
											<div class="cta-link"><a class="btn btn-light" href="#">View Docs<i class="fas fa-arrow-alt-circle-right ml-2"></i></a></div>
										</div><!--//desc-->
										
									</div><!--//content-->
								</div><!--//col-->
								<div class="col-12 col-md-7">
									<div class="content-figure">
										<figure class="figure">
											<img class="img-rounded shadow-lg img-fluid rounded" src="{{ asset('image/appify-theme-projects-overview.jpg')}}" alt="">
											
											<figcaption class="figure-caption mt-4 text-center text-muted">Credit: the above screenshot is taken from <a class="theme-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/" target="_blank"><i class="fas fa-external-link-alt mx-1"></i>Appify theme</a></figcaption>
										</figure>
									</div><!--//content-->
								</div><!--//col-->
							</div><!--//row-->
						</div><!--//item-->
						
						<div class="item py-5 mb-5">
							<div class="row">
								<div class="col-12 col-md-5 order-md-1 pl-md-5 mb-5 mb-md-0">
									<div class="content">
										<h3 class="heading">Screencast Example</h3>
										<div class="desc">
											<p>You can use a screen recording software to create screencasts (in gif/video format) to showcase your software features. Here is a list of the <a href="#"><i class="fas fa-external-link-alt"></i> best screen recording softwares</a>.</p>
											<ul class="list-unstyled py-3 mb-0">
												<li class="mb-3"><span class="theme-icon-holder mr-2"><i class="fas fa-check"></i></span>List item lorem ipsum</li>
												<li class="mb-3"><span class="theme-icon-holder mr-2"><i class="fas fa-check"></i></span>List item donec pede justo,</li>
												<li class="mb-3"><span class="theme-icon-holder mr-2"><i class="fas fa-check"></i></span>List item ullamcorper ultricies nisi</li>
												
											</ul>
											<div class="tech-icons mb-3">
												<i class="fab fa-cc-paypal mr-2"></i>
												<i class="fab fa-cc-apple-pay mr-2"></i>
												<i class="fab fa-cc-stripe"></i>
												
											</div><!--//tech-icons-->
											
											<div class="cta-link"><a class="btn btn-light" href="#">View Docs<i class="fas fa-arrow-alt-circle-right ml-2"></i></a></div>
											
										</div><!--//desc-->
										
									</div><!--//content-->
								</div><!--//col-->
								<div class="col-12 col-md-7 order-md-0">
									<div class="content-figure">
										<figure class="figure">
										    <img class="rounded shadow-lg img-fluid" src="{{ asset('image/devcard-theme-darkmode.gif') }}" alt="">
										    <figcaption class="figure-caption mt-4 text-center text-muted">Credit: this screencast is taken from <a class="theme-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/devcard-bootstrap-4-vcard-portfolio-template-for-software-developers/" target="_blank"><i class="fas fa-external-link-alt mx-1"></i>DevCard theme</a></figcaption>
										</figure>
										
									</div><!--//content-->
								</div><!--//col-->
							</div><!--//row-->
						</div><!--//item-->
						
						<div class="item py-5 mb-5">
							<div class="row">
								<div class="col-12 col-md-5 mb-5 mb-md-0">
									<div class="content pr-md-5">
										<h3 class="heading">Video Example</h3>
										<div class="desc">
											<p>You can embed Youtube video as well.</p>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
											
											<div class="tech-icons mb-3">
												<i class="fab fa-python mr-2"></i>
												<i class="fab fa-github mr-2"></i>
												<i class="fab fa-chrome mr-2"></i>
												<i class="fab fa-firefox"></i>
												
											</div><!--//tech-icons-->
											
											<div class="cta-link"><a class="btn btn-light" href="#">View Docs<i class="fas fa-arrow-alt-circle-right ml-2"></i></a></div>
										</div><!--//desc-->
										
									</div><!--//content-->
								</div><!--//col-->
								<div class="col-12 col-md-7">
									<div class="content-figure">
										<div class="embed-responsive embed-responsive-16by9">
										    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/u21W_tfPVrY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div><!--//content-->
								</div><!--//col-->
							</div><!--//row-->
						</div><!--//item-->
						
						<div class="item py-5">
							<div class="row">
								<div class="col-12 col-md-5 order-md-1 mb-5 mb-md-0">
									<div class="content pl-md-5">
										<h3 class="heading">Github Code Snippet</h3>
										<div class="desc">
											<p>You can use <a href="https://gist.github.com/" target="_blank">Github Gist</a> to display code snippets.</p>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
											<div class="tech-icons mb-3">
												<i class="fab fa-angular mr-2"></i>
												<i class="fab fa-react mr-2"></i>
												<i class="fab fa-vuejs mr-2"></i>
												<i class="fab fa-grunt mr-2"></i>
												<i class="fab fa-gulp"></i>
											</div><!--//tech-icons-->
											
											<div class="cta-link"><a class="btn btn-light" href="#">View Docs<i class="fas fa-arrow-alt-circle-right ml-2"></i></a></div>
										</div><!--//desc-->
										
									</div><!--//content-->
								</div><!--//col-->
								<div class="col-12 col-md-7 order-md-0">
									<div class="content-figure">
										<!-- ** Embed github code starts ** -->
										<script src="https://gist.github.com/xriley/fce6cf71edfd2dadc7919eb9c98f3f17.js"></script>
										<!-- ** Embed github code ends ** -->
									</div><!--//content-->
								</div><!--//col-->
							</div><!--//row-->
						</div><!--//item-->
						
					</div><!--//row-->
				</div><!--//feature-1-pane-->
				<div class="feature-2-pane tab-pane fade py-5" id="feature-2" role="tabpanel" aria-labelledby="feature-tab-2">
					<div class="umbrella-layout">
						<div class="item pb-5">
							<h3 class="heading text-center mb-4">
								Screencast Example
							</h3><!--//item-intro-->
							<div class="item-figure text-center mb-5">
								<figure class="figure single-col-max">
								    <img class="figure-image img-fluid rounded mx-auto shadow-lg mb-4" src="{{ asset('image/appify-add-members.gif')}}" alt="">
								    <figcaption class="figure-caption text-center">Credit: the above screencast is from <a class="theme-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/" target="_blank"><i class="fas fa-external-link-alt mx-1"></i>Appify Theme</a></figcaption>
								</figure>
								
							</div>
							<div class="item-content">
								<div class="row">
									<div class="col-12 col-lg-4 mb-5 mb-lg-0">
										<div class="card shadow">
											<div class="card-body p-3 p-lg-5">
											<h5 class="card-title">Subheading One</h5>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
											<a href="#" class="btn btn-light">View Docs</a>
											</div>
										</div><!--//card-->
									</div><!--//col-->
									<div class="col-12 col-lg-4 mb-5 mb-lg-0">
										<div class="card shadow">
											<div class="card-body p-3 p-lg-5">
											<h5 class="card-title">Subheading Two</h5>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
											<a href="#" class="btn btn-light">View Docs</a>
											</div>
										</div><!--//card-->
									</div><!--//col-->
									<div class="col-12 col-lg-4 mb-5 mb-lg-0">
										<div class="card shadow">
											<div class="card-body p-3 p-lg-5">
											<h5 class="card-title">Subheading Three</h5>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
											<a href="#" class="btn btn-light">View Docs</a>
											</div>
										</div><!--//card-->
									</div><!--//col-->
								</div><!--//row-->
							</div>
						</div><!--//item-->
						<div class="item py-5">
							<h3 class="heading text-center mb-4">
								Code Snippet Example
							</h3><!--//item-intro-->
							<div class="item-figure mb-5 text-center">
								
								<div class="code-snippet single-col-max shadow-lg mx-auto p-3 mb-4 rounded">
									<pre class="mb-0"><code class="hljs python"><span class="hljs-meta">@requires_authorization</span>
									<span class="hljs-function"><span class="hljs-keyword">def</span> <span class="hljs-title">somefunc</span><span class="hljs-params">(param1=<span class="hljs-string">''</span>, param2=<span class="hljs-number">0</span>)</span>:</span>
									    <span class="hljs-string">r'''A docstring'''</span>
									    <span class="hljs-keyword">if</span> param1 &gt; param2: <span class="hljs-comment"># interesting</span>
									        <span class="hljs-keyword">print</span> <span class="hljs-string">'Gre\'ater'</span>
									    <span class="hljs-keyword">return</span> (param2 - param1 + <span class="hljs-number">1</span> + <span class="hljs-number">0b10l</span>) <span class="hljs-keyword">or</span> <span class="hljs-literal">None</span>

									<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">SomeClass</span>:</span>
									    <span class="hljs-keyword">pass</span>

									<span class="hljs-meta">&gt;&gt;&gt; </span>message = <span class="hljs-string">'''interpreter
									<span class="hljs-meta">... </span>prompt'''</span>
									</code></pre>
								</div><!--//code-snippet-->
								
								<div class="text-muted text-center figure-caption">You can use <a class="theme-link" href="https://highlightjs.org/" target="_blank"><i class="fas fa-external-link-alt mx-1"></i>Highlight.js</a> to embed code snippets</div>
								
							</div>
							<div class="item-content">
								<div class="row">
									<div class="col-12 col-lg-4 mb-5 mb-lg-0">
										<div class="card shadow">
											<div class="card-body p-3 p-lg-5">
											<h5 class="card-title">Subheading One</h5>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
											<a href="#" class="btn btn-light">View Docs</a>
											</div>
										</div><!--//card-->
									</div><!--//col-->
									<div class="col-12 col-lg-4 mb-5 mb-lg-0">
										<div class="card shadow">
											<div class="card-body p-3 p-lg-5">
											<h5 class="card-title">Subheading Two</h5>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
											<a href="#" class="btn btn-light">View Docs</a>
											</div>
										</div><!--//card-->
									</div><!--//col-->
									<div class="col-12 col-lg-4 mb-5 mb-lg-0">
										<div class="card shadow">
											<div class="card-body p-3 p-lg-5">
											<h5 class="card-title">Subheading Three</h5>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
											<a href="#" class="btn btn-light">View Docs</a>
											</div>
										</div><!--//card-->
									</div><!--//col-->
								</div><!--//row-->
							</div>
						</div><!--//item-->
					</div><!--//umbrella-layout-->
				</div><!--//feature-2-pane-->
				<div class="feature-3-pane tab-pane fade py-5 text-center" id="feature-3" role="tabpanel" aria-labelledby="feature-tab-3">
					<div class="carousel-layout">
						<h3 class="heading text-center mb-4">
							Feature Carousel Example
						</h3><!--//item-intro-->
						
						<div id="features-carousel" class="features-carousel carousel slide" data-ride="carousel">
							<div class="carousel-inner single-col-max mx-auto mb-5">
								<div class="carousel-item active">
									<img class="img-fluid" src="{{ asset('image/stackblitz-example-1.gif') }}" alt="">
	                                <div class="figure-caption text-center mt-3">Credit: the above screencast is from <a href="https://medium.com/stackblitz-blog/google-cloud-meet-stackblitz-da13f4e4fc29" target="_blank"><i class="fas fa-external-link-alt mx-1"></i>StackBlitz</a></div>
								</div>
								<div class="carousel-item">
									<img class="img-fluid" src="{{ asset('image/stackblitz-example-2.gif') }}" alt="">
									<div class="figure-caption text-center mt-3">Credit: the above screencast is from <a href="https://medium.com/stackblitz-blog/google-cloud-meet-stackblitz-da13f4e4fc29" target="_blank"><i class="fas fa-external-link-alt mx-1"></i>StackBlitz</a></div>
								</div>
								<div class="carousel-item">
									<img class="img-fluid" src="{{ asset('image/stackblitz-example-3.gif') }}" alt="">
									<div class="figure-caption text-center mt-3">Credit: the above screencast is from <a href="https://medium.com/stackblitz-blog/google-cloud-meet-stackblitz-da13f4e4fc29" target="_blank"><i class="fas fa-external-link-alt mx-1"></i>StackBlitz</a></div>
								</div>
								<div class="carousel-item">
									<img class="img-fluid" src="{{ asset('image/stackblitz-example-4.gif') }}" alt="">
									<div class="figure-caption text-center mt-3">Credit: the above screencast is from <a href="https://medium.com/stackblitz-blog/google-cloud-meet-stackblitz-da13f4e4fc29" target="_blank"><i class="fas fa-external-link-alt mx-1"></i>StackBlitz</a></div>
								</div>
								
							</div><!--//carousel-inner-->
							
							<div class="carousel-indicators text-left row mt-4">
								
								<div class="indicator-item active col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
									<a class="card carousel-nav-link shadow border-0" href="#" data-target="#features-carousel" data-slide-to="0">
										<div class="card-body">
											<h5 class="card-title"><span class="theme-icon-holder mr-2 pt-2"><i class="fas fa-rocket"></i></span>Nav Heading One</h5>
											<div class="card-text">Feature desc lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eros elit, volutpat non erat elementum, ultricies consequat libero. </div>
										</div>
									</a><!--//carousel-nav-link-->
								</div><!--//indicator-item-->
								<div class="indicator-item col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
									<a class="card carousel-nav-link shadow border-0" href="#" data-target="#features-carousel" data-slide-to="1">
										<div class="card-body">
											<h5 class="card-title"><span class="theme-icon-holder mr-2 pt-2"><i class="fas fa-user-shield"></i></span>Nav Heading Two</h5>
											<div class="card-text">Feature desc lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eros elit, volutpat non erat elementum, ultricies consequat libero.</div>									
										</div>
									</a><!--//carousel-nav-link-->
								</div><!--//indicator-item-->
								<div class="indicator-item col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
									<a class="card carousel-nav-link shadow border-0" href="#" data-target="#features-carousel" data-slide-to="2">
										<div class="card-body">
											<h5 class="card-title"><span class="theme-icon-holder mr-2 pt-2"><i class="fas fa-code-branch"></i></span>Nav Heading Three</h5>
											<div class="card-text">Feature desc lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eros elit, volutpat non erat elementum, ultricies consequat libero.</div>
										</div>
									</a><!--//carousel-nav-link-->
								</div><!--//col-->
								<div class="indicator-item col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
									<a class="card carousel-nav-link shadow border-0" href="#" data-target="#features-carousel" data-slide-to="3">
										<div class="card-body">
											<h5 class="card-title"><span class="theme-icon-holder mr-2 pt-2"><i class="fas fa-database"></i></span>Nav Heading Four</h5>
											<div class="card-text">Feature desc lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eros elit, volutpat non erat elementum, ultricies consequat libero.</div>
										</div>
									</a><!--//carousel-nav-link-->
								</div><!--//indicator-item-->
								
							</div><!--//features-carousel-nav-->
							
						</div><!--//featues-slider-container-->
						
					</div><!--//carousel-layout-->
				</div><!--//feature-3-pane-->
				
			</div>
		</div><!--//container-->
    </div><!--//page-content-->

@endsection

@section('footer')
	
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

@endsection

@section('script')
	
	    <!-- Page Specific JS -->
    <script src="{{ asset('js/highlight.min.js') }}"></script>
    <script src="{{ asset('js/highlight-custom.js')}}"></script>

@endsection

