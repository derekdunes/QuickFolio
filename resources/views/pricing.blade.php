@extends('layouts.wave')

@section('content')

	<div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Simple Plans For Every Project!</h1>
		    <div class="page-intro single-col-max mx-auto">30 day FREE trial with all plans. Cancel at any time.</div>
	    </div>
    </div><!--//page-header-->
    
	<div class="page-content py-5">
		<section class="plans-section mb-5 pb-5">
			<div class="container">
				<div class="plan-switch text-center mb-4" id="plan-switch">
					
					<ul class="radio-switch mx-auto shadow-sm">
						<li class="radio-switch-item">
							<input type="radio" class="radio-switch-input sr-only" id="radio1" name="radioSwitch" data-plan-cost="plan-cost-monthly" checked>
							<label for="radio1" class="radio-switch-label">Monthly</label>
						</li>
						
						<li class="radio-switch-item">
							<input type="radio" class="radio-switch-input sr-only" id="radio2" data-plan-cost="plan-cost-yearly" name="radioSwitch">
							<label for="radio2" class="radio-switch-label">Yearly</label>
							<div aria-hidden="true" class="radio-switch-marker"></div>
						</li>
					</ul><!--//radio-switch-->
					
					<div class="mb-5 plan-switch-intro">Switch to yearly plans and save!</div>
					
				</div>
				<div class="plan-items row justify-content-center" id="plan-items">
					<div class="col-12 col-md-6 col-lg-3">
						<div class="item shadow rounded">
							<div class="plan-header text-center">
								<h3 class="plan-title">Personal</h3>
								<div class="plan-cost">
									<div class="plan-cost-monthly">
										<span class="currency">$</span>
										<span class="number">0</span>
										<span class="unit">/month</span>
									</div>
									<div class="plan-cost-yearly" style="display: none">
										<span class="currency">$</span>
										<span class="number">0</span>
										<span class="unit">/year</span>
									</div>
								</div><!--//plan-cost-->
								<div class="plan-cta">
									<a class="btn-primary btn" href="#">Get Started</a>
								</div>
							</div><!--//plan-header-->
							
							<div class="plan-content">
								<div class="plan-intro">Extra plan info goes here lorem ipsum dolor sit amet.</div>
								<ul class="plan-desc list-unstyled">
									<li>Feature Lorem<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature tempus</li>
									<li>Feature ipsum</li>
								</ul>
							</div><!--//plan-content-->
						</div><!--//item-->
					</div><!--//col-->
					<div class="col-12 col-md-6 col-lg-3">
						<div class="item shadow rounded">
							<div class="plan-header text-center">
								<h3 class="plan-title">Pro</h3>
								<div class="plan-cost">
									<div class="plan-cost-monthly">
										<span class="currency">$</span>
										<span class="number">9</span>
										<span class="unit">/month</span>
									</div><div class="plan-cost-yearly" style="display:none">
										<span class="currency">$</span>
										<span class="number">99</span>
										<span class="unit">/year</span>
									</div>
								</div><!--//plan-cost-->
								<div class="plan-cta">
									<a class="btn-primary btn" href="#">Get Started</a>
								</div>
							</div><!--//plan-header-->
							
							<div class="plan-content">
								<div class="plan-intro">Extra plan info goes here lorem ipsum dolor sit amet.</div>
								<ul class="plan-desc list-unstyled">
									<li>Feature Lorem <a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									
									<li>Feature tempus <a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature consectetur<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature nulla nunc<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature vitae leo<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
								</ul>
							</div><!--//plan-content-->
						</div><!--//item-->
					</div><!--//col-->
					<div class="col-12 col-md-6 col-lg-3">
						<div class="item shadow rounded">
							<div class="plan-header text-center">
								<h3 class="plan-title">Team</h3>
								<div class="plan-cost">
									<div class="plan-cost-monthly">
										<span class="currency">$</span>
										<span class="number">99</span>
										<span class="unit">/month</span>
									</div>
									<div class="plan-cost-yearly" style="display:none">
										<span class="currency">$</span>
										<span class="number">800</span>
										<span class="unit">/year</span>
									</div>
								</div><!--//plan-cost-->
								<div class="plan-cta">
									<a class="btn-primary btn" href="#">Get Started</a>
								</div>
							</div><!--//plan-header-->
							
							<div class="plan-content">
								<div class="plan-intro">Extra plan info goes here lorem ipsum dolor sit amet.</div>
								<ul class="plan-desc list-unstyled">
									<li>Feature Lorem <a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature tempus<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature Ipsum<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature consectetur<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature nulla nunc<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature vitae leo<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature sit amet<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									
								</ul>
							</div><!--//plan-content-->
						</div><!--//item-->
					</div><!--//col-->
					<div class="col-12 col-md-6 col-lg-3">
						<div class="item shadow rounded">
							<div class="plan-header text-center">
								<h3 class="plan-title">Enterprise</h3>
								<div class="plan-cost">
									
									<span class="number"><i class="far fa-building"></i></span>
									
								</div><!--//plan-cost-->
								<div class="plan-cta">
									<a class="btn-primary btn" href="#">Contact Us</a>
								</div>
							</div><!--//plan-header-->
							
							<div class="plan-content">
								<div class="plan-intro">Extra plan info goes here lorem ipsum dolor sit amet.</div>
								<ul class="plan-desc list-unstyled">
									<li>Feature Lorem <a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature tempus<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature Ipsum<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature consectetur<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature nulla nunc<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature vitae leo<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature sit amet<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature adipiscing<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
									<li>Feature aptent taciti sociosqu<a tabindex="0" class="theme-icon-holder info-popover-trigger" data-toggle="popover" data-content="You can use popover to give more info about the feature." data-trigger="hover"><i class="fas fa-info" ></i></a></li>
								</ul>
							</div><!--//plan-content-->
						</div><!--//item-->
					</div><!--//col-->
						
				</div><!--//row-->
			</div><!--//container-fluid-->
		</section><!--//plans-section-->

		<section class="testimonial-cards-section py-5 theme-bg-light">
			<div class="container">
				<h3 class="text-center mb-2">Trusted By People Like You</h3>
				<div class="section-intro text-center mb-5">Don’t take our word for it. See what our users are saying...</div>
				<div class="testimonial-card-columns card-columns">
					<div class="card shadow-sm">
		                <div class="card-body rounded">
			                <div class="media source-holder">
							    <img src="{{ asset('image/user-1.jpg') }}" class="source-profile mr-3" alt="">
							    <div class="media-body source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a href="#">@username</a></div>
							    </div>
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//media-->
							    
						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    👍You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>⭐️⭐️⭐️⭐️⭐️
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//card-body-->
	                </div><!--//card-->
	                <div class="card shadow-sm">
		                <div class="card-body rounded">
			                <div class="media source-holder">
							    <img src="{{ asset('image/user-2.jpg') }}" class="source-profile mr-3" alt="">
							    <div class="media-body source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a href="#">@username</a></div>
							    </div>
							    <div class="source-icon"><i class="fab fa-facebook"></i></div>
							</div><!--//media-->
							    
						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    🚀You can list user reviews or testimonials here. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.					    
								</blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//card-body-->
	                </div><!--//card-->
	                <div class="card shadow-sm">
		                <div class="card-body rounded">
			                <div class="media source-holder">
							    <img src="{{ asset('image/user-3.jpg') }}" class="source-profile mr-3" alt="">
							    <div class="media-body source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a href="#">@username</a></div>
							    </div>
							    <div class="source-icon"><i class="fab fa-product-hunt"></i></div>
							</div><!--//media-->
							    
						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. Curabitur vestibulum mollis leo, sed ultricies felis egestas ac.
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//card-body-->
	                </div><!--//card-->
	                <div class="card shadow-sm">
		                <div class="card-body rounded">
			                <div class="media source-holder">
							    <img src="{{ asset('image/user-4.jpg') }}" class="source-profile mr-3" alt="">
							    <div class="media-body source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a href="#">@username</a></div>
							    </div>
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//media-->
							    
						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//card-body-->
	                </div><!--//card-->
	                <div class="card shadow-sm">
		                <div class="card-body rounded">
			                <div class="media source-holder">
							    <img src="{{ asset('image/user-5.jpg') }}" class="source-profile mr-3" alt="">
							    <div class="media-body source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a href="#">@username</a></div>
							    </div>
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//media-->
							    
						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//card-body-->
	                </div><!--//card-->
	                <div class="card shadow-sm">
		                <div class="card-body rounded">
			                <div class="media source-holder">
							    <img src="{{ asset('image/user-6.jpg') }}" class="source-profile mr-3" alt="">
							    <div class="media-body source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a href="#">@username</a></div>
							    </div>
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//media-->
							    
						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. 
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//card-body-->
	                </div><!--//card-->
	                <div class="card shadow-sm">
		                <div class="card-body rounded">
			                <div class="media source-holder">
							    <img src="{{ asset('image/user-7.jpg') }}" class="source-profile mr-3" alt="">
							    <div class="media-body source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a href="#">@username</a></div>
							    </div>
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//media-->
							    
						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at erat vel quam cursus sagittis. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//card-body-->
	                </div><!--//card-->
	                <div class="card shadow-sm">
		                <div class="card-body rounded">
			                <div class="media source-holder">
							    <img src="{{ asset('image/user-8.jpg') }}" class="source-profile mr-3" alt="">
							    <div class="media-body source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a href="#">@username</a></div>
							    </div>
							    <div class="source-icon"><i class="fab fa-twitter"></i></div>
							</div><!--//media-->
							    
						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 👍😄
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//card-body-->
	                </div><!--//card-->
	                <div class="card shadow-sm">
		                <div class="card-body rounded">
			                <div class="media source-holder">
							    <img src="{{ asset('image/user-9.jpg') }}" class="source-profile mr-3" alt="">
							    <div class="media-body source-meta align-self-center ">
								    <div class="name">User Name</div>
								    <div class="info"><a href="#">@username</a></div>
							    </div>
							    <div class="source-icon"><i class="fab fa-product-hunt"></i></div>
							</div><!--//media-->
							    
						    <div class="quote-holder">
							    <blockquote class="quote-content mb-0">
								    You can list user reviews or testimonials here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 👍😄
							    </blockquote>
						    </div><!--//quote-holder-->
		                </div><!--//card-body-->
	                </div><!--//card-->
				</div><!--//testimonial-card-columns-->
			</div><!--//container-->
		</section><!--//testimonial-cards-section-->

		<section class="faq-section py-5">
			<div class="container single-col-max">
				<h3 class="text-center mb-5">Frequently Asked Questions</h3>
				<div id="faq-accordion" class="faq-accordion mx-auto">
			        <div class="card border-0 mb-4 shadow-sm rounded">
		                <div class="card-header border-0 p-4 theme-bg-light rounded">
		                    <h4 class="card-title mb-0"><i class="fas fa-question-circle mr-2"></i><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq1" aria-expanded="false"><i class="fas fa-chevron-down"></i>What's sit amet quam eget lacinia?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq1">
		                    <div class="card-body p-4 bg-white rounded">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
		            <div class="card border-0 mb-4 shadow-sm rounded">
		                <div class="card-header border-0 p-4 theme-bg-light rounded">
		                    <h4 class="card-title mb-0"><i class="fas fa-question-circle mr-2"></i><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq2" aria-expanded="false"><i class="fas fa-chevron-down"></i>How to ipsum dolor sit amet quam tortor?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq2">
		                    <div class="card-body p-4 bg-white rounded">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
		            <div class="card border-0 mb-4 shadow-sm rounded">
		                <div class="card-header border-0 p-4 theme-bg-light rounded">
		                    <h4 class="card-title mb-0"><i class="fas fa-question-circle mr-2"></i><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq3" aria-expanded="false"><i class="fas fa-chevron-down"></i>Can I ultricies nec vulputate eget?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq3">
		                    <div class="card-body p-4 bg-white rounded">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
		            <div class="card border-0 mb-4 shadow-sm rounded">
		                <div class="card-header border-0 p-4 theme-bg-light rounded">
		                    <h4 class="card-title mb-0"><i class="fas fa-question-circle mr-2"></i><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq4" aria-expanded="false"><i class="fas fa-chevron-down"></i>Where can I tellus eget auctor condimentum?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq4">
		                    <div class="card-body p-4 bg-white rounded">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
	            
		            <div class="card border-0 mb-4 shadow-sm rounded">
		                <div class="card-header border-0 p-4 theme-bg-light rounded">
		                    <h4 class="card-title mb-0"><i class="fas fa-question-circle mr-2"></i><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq5" aria-expanded="false"><i class="fas fa-chevron-down"></i>Do you elementum turpis semper imperdiet?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq5">
		                    <div class="card-body p-4 bg-white rounded">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
		            <div class="card border-0 mb-4 shadow-sm rounded">
		                <div class="card-header border-0 p-4 theme-bg-light rounded">
		                    <h4 class="card-title mb-0"><i class="fas fa-question-circle mr-2"></i><a data-parent="#faq-accordion" data-toggle="collapse" class="card-toggle collapsed" href="#faq6" aria-expanded="false"><i class="fas fa-chevron-down"></i>How much imperdiet lorem sem non nisl?</a></h4>
		                </div>
		    
		                <div class="card-collapse collapse" id="faq6">
		                    <div class="card-body p-4 bg-white rounded">
		                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae. 
		                    </div><!--//card-body-->
		                </div>
		            </div><!--//card-->
		            
	            
	            </div><!--//faq-accordion-->
	            <div class="text-center">
	                <h4 class="pt-5">Have more questions? </h4>
	                <div class="section-intro">Check our <a href="docs.html">docs</a> or <a href="contact.html">contact us</a>. We're more than happy to help.</div>
	            </div>
			</div><!--//container-->
		</section><!--//faq-section-->
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
    <script src="{{ asset('js/pricing.js') }}"></script>

@endsection