<?php

include 'menu_staff.php';
ob_start();

?>
		<!--end header-section-->
			<!--banner-->
		<section class="slider2">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="slider-info">
							<img src="images/ban.jpg" class="img-responsive" alt="">
						</div>
					</li>
					<li>
						<div class="slider-info">
							<img src="images/ban1.jpg" class="img-responsive" alt="">
						</div>
					</li>
					<li>	
						<div class="slider-info">
							<img src="images/ban2.jpg" class="img-responsive" alt="">
						</div>
					</li>
					
				</ul>
			</div>
		</section>
			<!--FlexSlider-->
				 <script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
					</script>			
			<!--FlexSlider-->
	<!-- slider -->
						
		<!--banner-->
	<!--welcome-->
	<div class="content">
		<div class="welcome">
			<div class="container">
				
					<div class="welcome-grids">
						<div class="col-md-6 welcome-grid">
							<img src="images/p1.jpg" class="img-responsive" alt="">
						</div>
						<div class="col-md-6 welcome-grid1">
							<h2>Welcome to our page</h2>
							<h4>Vestibulum interdum mi sit amet</h4>
							<p>Lorem ipsum dolor sit t, consectetuer adipiscing elit. Praesentstibulum molestie lacus. Aenean nonumy hendrerit mauris. Phasellus porta. Fusce cipit varius mi. Cum sociis natoque penatibus et dis parturient montes, nasus. Nulla dui. Fusce feugiat malesuada odio.</p>
							<a href="#" class="button"> read more</a>
								<div class="welcomes-grids">
									<div class="col-md-4 welcomes-grid">
										<img src="images/w1.jpg" class="img-responsive" alt="">
									</div>
									<div class="col-md-4 welcomes-grid">
										<img src="images/w2.jpg" class="img-responsive" alt="">
									</div>
									<div class="col-md-4 welcomes-grid">
										<img src="images/w3.jpg" class="img-responsive" alt="">
									</div>
									<div class="clearfix"></div>
								</div>
						</div>
						<div class="clearfix"></div>
					</div>
			</div>
		</div>
		<!--welcome-->
		<div class="slider1">
		<div class="arrival-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="#"><img src="images/b3.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="#"><img src="images/b4.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="#"><img src="images/b5.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="#"><img src="images/b6.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="#"><img src="images/b7.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="#"><img src="images/b8.jpg" alt=""/>
					 </a>
				 </li>
				</ul>
				<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
		</div>
	</div>
	<!-- //slider -->
			<!--features-->
				<div class="feature">
					<div class="container">
						<h3>features</h3>
						<div class="feature-grids">
							<div class="col-md-3 feature-grid">
							<div class="feature-icon">
								<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
								</div>
								<h4>Repair</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							</div>
							<div class="col-md-3 feature-grid">
							<div class="feature-icon">
								<span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>
								</div>
								<h4>speed</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							</div>
							<div class="col-md-3 feature-grid">
							<div class="feature-icon">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</div>
								<h4>Spare parts</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							</div>
							<div class="col-md-3 feature-grid">
							<div class="feature-icon">
							<span class="glyphicon glyphicon-record" aria-hidden="true"></span>
							</div>
								<h4>Tire Sales</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--features-->
			
	<!--testimonials-->
			<div class="testimonials">
				<div class="container">
					<h3>testimonials</h3>
					<div class="slider">
			<div class="callbacks_container">
				  <ul class="rslides" id="slider">
						 <li>	          
							<p>Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi. Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget volutpat lacus. Vestibulum faucibus scelerisque nisl vitae scelerisque. Sed tristique metus eu…</p>
							<h4><a href="#">John Anderson</a></h4>

						</li>
						 <li>	          
							<p>Nonummy aenean hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi. Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget volutpat lacus. Vestibulum faucibus scelerisque nisl vitae scelerisque. Sed tristique metus eu…</p>
							<h4><a href="#">Anderson</a></h4>
						 </li>
						 <li>	          
							<p>Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi. Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget volutpat lacus. Vestibulum faucibus scelerisque nisl vitae scelerisque. Sed tristique metus eu…aenean nonummy hendrerit mau phasellu porta.</p>
							<h4><a href="#">Bradley Grosh</a></h4>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--testimonials-->
	<div class="events">
		<div class="container">
			<h3>events</h3>
			<div class="event-grids">
				<div class="col-md-4 event-grid">
					<div class="event-time">
						 <p>03/2015</p>
					</div>
					<div class="event-grid_pic">
						<img src="images/e1.jpg" class="img-responsive" alt=""/>
						<h4><a href="#">Morbi pellentesque urna</a></h4>
						<p>Nullam placerat aliquet nisl id finibus. Nulla mollis mattis magna in hendrerit. Pellentesque nunc nisl, dapibus eget erat non,
						sagittis accumsan dolor.</p>
					</div>
				</div>
				<div class="col-md-4 event-grid">
					<div class="event-time">
						<p>02/2015</p>
					</div>
					<div class="event-grid_pic">
						<img src="images/e2.jpg" class="img-responsive" alt=""/>
						<h4><a href="#">Morbi pellentesque urna</a></h4>
						<p>Nullam placerat aliquet nisl id finibus. Nulla mollis mattis magna in hendrerit. Pellentesque nunc nisl, dapibus eget erat non,
						sagittis accumsan dolor.</p>
					</div>
				</div>
				<div class="col-md-4 event-grid">
					<div class="event-time">
						<p>04/2015</p>
					</div>
					<div class="event-grid_pic">
						<img src="images/e3.jpg" class="img-responsive" alt=""/>
						<h4><a href="#">Morbi pellentesque urna</a></h4>
						<p>Nullam placerat aliquet nisl id finibus. Nulla mollis mattis magna in hendrerit. Pellentesque nunc nisl, dapibus eget erat non,
						 sagittis accumsan dolor.</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
`		<?php

include 'footer.php';

?>