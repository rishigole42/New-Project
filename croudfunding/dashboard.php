<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("header.php");

?>


		
		
		
		
		<!-- Start main area -->
        <div class="main-area">
        	<!-- Start header -->
        
        	<!-- End header -->
        	<!-- Start slider area -->
        	<section class="slider-area">
        		<!-- start enable -->
				<div class="ma-banner7-container">
		        	<div class="container-slider">
			        	<div class="flexslider ma-nivoslider">
		        			<div class="ma-loading"></div>
							<div id="ma-inivoslider-banner7" class="slides">
								<img style="display: none;" src="img\slider\slide-one.jpeg" alt="" title="#banner7-caption1">
								<img style="display: none;" src="img\slider\slide-two.jpeg" alt="" title="#banner7-caption2">
                                <img style="display: none;" src="img\slider\slide-one.jpeg" alt="" title="#banner7-caption3">
							</div>			
							<div id="banner7-caption1" class="banner7-caption nivo-html-caption nivo-caption">
								<div class="timethai" style=" 
									position:absolute;
									bottom:0;
									left:0;
									background-color: rgba(255, 255, 255, 0.6);
									height:5px;
									-Charitykit-animation: myfirst 5000ms ease-in-out;
									-moz-animation: myfirst 5000ms ease-in-out;
									-ms-animation: myfirst 5000ms ease-in-out;
									animation: myfirst 5000ms ease-in-out;
								   ">
							    </div>
								
								
								<?php
								$result=$db->select("slider",'*');

 foreach ($result as $project)
  {?>

								<div class="banner7-content slider-1 hidden-xs">
									<h1 class="title1 wow slideInRight" data-wow-duration="1s" data-wow-delay="300ms"><?php echo $project->title ; ?> </h1>
									<p class="wow slideInRight" data-wow-duration="1s" data-wow-delay="600ms"><?php echo $project->content ; ?></p>
									<div class="slider-button-area wow slideInRight" data-wow-duration="1s" data-wow-delay="900ms">
										<a href="<?php echo $project->donate  ; ?>"
										 class="btn-lg">Donate</a>
										<a href="<?php echo $project->learn ; ?>" 
										class="btn-lg">Learn </a>
									</div>				
								</div> 
								<?php } ?> 






							</div>	
							<div id="banner7-caption2" class="banner7-caption nivo-html-caption nivo-caption">
								<div class="timethai" style=" 
									position:absolute;
									bottom:0;
									left:0;
									background-color: rgba(255, 255, 255, 0.6);
									height:5px;
									-Charitykit-animation: myfirst 5000ms ease-in-out;
									-moz-animation: myfirst 5000ms ease-in-out;
									-ms-animation: myfirst 5000ms ease-in-out;
									animation: myfirst 5000ms ease-in-out;">
							    </div>
								<div class="banner7-content slider-1 hidden-xs">
                                    <h1 class="title1 wow slideInRight" data-wow-duration="1s" data-wow-delay="300ms">WE CAN HELP SOMEONE</h1>
                                    <p class="wow slideInRight" data-wow-duration="1s" data-wow-delay="600ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis ante commodo, dictum lectus suscipit. Quisque nec ullamcorper elit, nec fermentum metus.</p>
                                    <div class="slider-button-area wow slideInRight" data-wow-duration="1s" data-wow-delay="900ms">
                                        <a href="#" class="btn-lg">DONATE NOW</a>
                                        <a href="#" class="btn-lg">LEARN MORE</a>
                                    </div>              
                                </div>
							</div>
                            <div id="banner7-caption3" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai" style=" 
                                    position:absolute;
                                    bottom:0;
                                    left:0;
                                    background-color: rgba(255, 255, 255, 0.6);
                                    height:5px;
                                    -Charitykit-animation: myfirst 5000ms ease-in-out;
                                    -moz-animation: myfirst 5000ms ease-in-out;
                                    -ms-animation: myfirst 5000ms ease-in-out;
                                    animation: myfirst 5000ms ease-in-out;
                                   ">
                                </div>
                                <div class="banner7-content slider-1 hidden-xs">
                                    <h1 class="title1 wow slideInRight" data-wow-duration="1s" data-wow-delay="300ms">WE CAN HELP SOMEONE</h1>
                                    <p class="wow slideInRight" data-wow-duration="1s" data-wow-delay="600ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis ante commodo, dictum lectus suscipit. Quisque nec ullamcorper elit, nec fermentum metus.</p>
                                    <div class="slider-button-area wow slideInRight" data-wow-duration="1s" data-wow-delay="900ms">
                                        <a href="#" class="btn-lg">DONATE NOW</a>
                                        <a href="#" class="btn-lg">LEARN MORE</a>
                                    </div>              
                                </div>
                            </div>
						</div>
		    		</div>
				</div>
		    	<!-- end enable -->
        	</section>
        	<!-- End slider area -->
            <!-- Start our couses area -->
        	<section class="our-couses-area pt-90 pb-90">
        		<div class="container">
        			<div class="row">
                        <!-- Start section title -->
        				<div class="col-sm-12">
        					<div class="section-title text-center">
        						<h2>OUR <span>CAUSES</span></h2>
        						<img src="img\title-bottom.png" alt="">
        						<p>Our charity help those people who have no hope</p>
        					</div>
        				</div>
                        <!-- End section title -->
        				<div class="couses">
                            <!-- Start single couses -->
        					<div class="col-sm-4">
        						<div class="single-couses">
        							<div class="single-couses-image-text">
        								<div class="couses-image">
        									<img src="img\couses\couses-one.jpeg" alt="">
        								</div>
        								<div class="couses-text text-center">
        									<h3>Children to get education</h3>
        									<p>Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
        								</div>
        							</div>
        							<div class="couses-button-and-price">
        								<div class="couses-button">
        									<a href="login.php" class="btn-md bo-ra-5">Donate</a>
        								</div>
        								<div class="couses-price">
        									<h5>$ 25,000 / $ 50,000</h5>
        								</div>
        							</div>
        	      <!-- End single couses -->
                            <!-- Start single couses -->
                            
                                    <div class="couses-button-and-price">
                                        <div class="couses-button">
                                            <a href="login.php" class="btn-md bo-ra-5">Donate</a>
                                        </div>
                                        <div class="couses-price">
                                            <h5>$ 45,000 / $ 90,000</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single couses -->
                            <!-- Start single couses -->
                            
                            <!-- End single couses -->
        				</div>
        			</div>
        		</div>
        	</section>
            <!-- End our couses area -->
            <!-- Start help us area -->
            <section class="help-us-area pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
						
					
						
                            <div class="section-title-style-two text-center">
                                <h2>HOW CAN YOU HELP US?</h2>
                                 
                            </div>
                        </div>
						    <?php
							   
						 $db->orderBy("sno","DESC");
						$db->limit(0,3);
						$result=$db->select("help_us",'*');

				 foreach ($result as $project)
  {?>		
                        <div class="help-us-content-area">
                            <!-- Start single help -->
                        
							<div class="col-sm-4">
                                <div class="single-help">
                                    <div class="help-icon">
                                        <i class="fa fa-university" aria-hidden="true"></i>
                                    </div>
                                    <div class="help-text">
										
                                        <h3><?php echo $project->title ; ?></h3>
                                        <p><?php echo $project->content ; ?></p>
                                        <a href="<?php echo $project->link ;  ?>" class="btn-sm bo-ra-3">
										Link</a>
										
                                    </div>
									
                                </div>
                            </div>
                            <!-- End single help -->
                            <!-- Start single help -->
                    
                            <!-- End single help -->
                            <!-- Start single help -->
                         
                             <!-- End single help -->
                        </div>
<?php } ?>

                    </div>
                </div>
            </section>
            <!-- End help us area -->
            <!-- Start our gallery -->
            <section class="our-gallery pt-90 pb-60">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>OUR <span>Gallery</span></h2>
                                <img src="img\title-bottom.png" alt="">
                                <p>We create events aiming to pear to the voice for children and gather for support. <br>Please update with our events and confirm you presence.</p>
                            </div>
                        </div>
                        <!-- End section title -->
                        <div class="gallery-area">
                            <div class="col-sm-12">
                                <div class="gallery-menu text-center">
                                    <nav>
                                        <ul>
                                            <li class="filter" data-filter="all">All</li>
                                            <li class="filter" data-filter="Charity">Charity</li>
                                            <li class="filter" data-filter="Nature">Nature</li>
                                            testimonial.jpeg<li class="filter" data-filter="Wildlife">Wildlife</li>
                                            <li class="filter" data-filter="Video">Video</li>
                                            <li class="filter" data-filter="Children">Children</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div id="gallery-filter">
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Charity Wildlife ">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-one.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-one.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Nature Video">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-two.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-two.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Charity Wildlife Children">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-three.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-three.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Nature Video">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-four.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-four.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Charity Wildlife Video Children">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-five.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-five.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Nature Children">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-six.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-six.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Charity Wildlife Video">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-seven.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-seven.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Nature Children">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-eight.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-eight.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End our gallery -->
            <!-- Start countdown area -->
            <section class="countdown-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="countdown-side-area">
                                <div class="countdown-icon">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                </div>
                                <div class="countdown-text">
                                    <h3>Up comming event</h3>
                                    <p>SCHOOL OF CRITIVITY</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="count-down">
                                <div id="simple_timer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End countdown area -->
            <!-- Start our volunteers area -->
            <section class="our-volunteers-area pt-90 pb-90">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>OUR <span>VOLUNTEERS</span></h2>
                                <img src="img\title-bottom.png" alt="">
                                <p>We create events aiming to pear to the voice for children and gather for support. <br>Please update with our events and confirm you presence.</p>
                            </div>
                        </div>
                        <!-- End section title -->
                        <div class="our-volunteers">
                            <!-- Start single volunteer -->
                            <div class="col-sm-3">
                                <div class="single-volunteer">
                                    <div class="volunteer-image-and-social">
                                        <img src="img\volunteers\volunteers-one.jpeg" alt="">
                                        <div class="volunteer-social">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="volunteer-title text-center">
                                        <h5>Farnado rotia</h5>
                                        <p>Secretery</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single volunteer -->
                            <!-- Start single volunteer -->
                            <div class="col-sm-3">
                                <div class="single-volunteer">
                                    <div class="volunteer-image-and-social">
                                        <img src="img\volunteers\volunteers-two.jpeg" alt="">
                                        <div class="volunteer-social">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="volunteer-title text-center">
                                        <h5>Serena sanion</h5>
                                        <p>Secretery</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single volunteer -->
                            <!-- Start single volunteer -->
                            <div class="col-sm-3">
                                <div class="single-volunteer">
                                    <div class="volunteer-image-and-social">
                                        <img src="img\volunteers\volunteers-three.jpeg" alt="">
                                        <div class="volunteer-social">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="volunteer-title text-center">
                                        <h5>Peterson smith</h5>
                                        <p>Secretery</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single volunteer -->
                            <!-- Start single volunteer -->
                            <div class="col-sm-3">
                                <div class="single-volunteer">
                                    <div class="volunteer-image-and-social">
                                        <img src="img\volunteers\volunteers-four.jpeg" alt="">
                                        <div class="volunteer-social">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="volunteer-title text-center">
                                        <h5>Anabari koy</h5>
                                        <p>Secretery</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single volunteer -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End our volunteers area -->
            <!-- Start people says area -->
            <section class="people-says-area pt-54 pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="people-asy-title text-center">
                                <h2>WHAT PEOPLE SAYS</h2>
                                <img src="img\title-bottom.png" alt="">
                            </div>
							<?php
							 
							$result=$db->select("people_says",'*');
 foreach ($result as $project)
  {?>

                            
							<div class="people-say-slide">
                                <!-- Start single people -->
                                <div class="single-people text-center">
                                    <div class="people-say-image">
                                        <img src="<?php echo $project->image ; ?> " alt="">
                                    </div>  
									
                                    <div class="peoplp-say-text text-center">
                                        <p><?php echo $project->content ; ?></p>
                                        <h5><?php echo $project->name ; ?></h5>
                                        <h6><?php echo $project->position ; ?></h6>
                                    </div>  
                                </div>
                                <!-- End single people -->
                                <!-- Start single people -->
                                
                                <!-- End single people -->
                                <!-- Start single people -->
                                







<?php } ?>   
                        </div>
                    </div>
                </div>
            </section>
            <!-- End people says area -->
            <!-- Start blog area -->
            <section class="blog-area pt-90 pb-90">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>LATEST FROM <span>BLOG</span></h2>
                                <img src="img\title-bottom.png" alt="">
                                <p>We create events aiming to spear the voice for children and gather for <br>support Please update with our events</p>
                            </div>
                        </div>
                        <!-- End section title -->
                        <!-- Start blog -->
                        <div class="blog">
                            <!-- Start single blog -->
                            <div class="col-sm-4">
                                <div class="single-blog">
                                    <div class="blo-image-and-date">
                                        <img src="img\blog\blog-one.jpeg" alt="">
                                        <a href="#">24 may</a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="admin">
                                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> By: Admin</a>
                                        </div>
                                        <div class="comment">
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 15</a>
                                            <a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 25</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipicing elit. Nullam feugiat dignissim metus, id vestibulum tellus Cras ante commodo.</p>
                                        <a href="#">Read More...</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-sm-4">
                                <div class="single-blog">
                                    <div class="blo-image-and-date">
                                        <img src="img\blog\blog-two.jpeg" alt="">
                                        <a href="#">24 may</a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="admin">
                                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> By: Admin</a>
                                        </div>
                                        <div class="comment">
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 15</a>
                                            <a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 25</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipicing elit. Nullam feugiat dignissim metus, id vestibulum tellus Cras ante commodo.</p>
                                        <a href="#">Read More...</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-sm-4">
                                <div class="single-blog">
                                    <div class="blo-image-and-date">
                                        <img src="img\blog\blog-three.jpeg" alt="">
                                        <a href="#">24 may</a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="admin">
                                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> By: Admin</a>
                                        </div>
                                        <div class="comment">
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 15</a>
                                            <a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 25</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipicing elit. Nullam feugiat dignissim metus, id vestibulum tellus Cras ante commodo.</p>
                                        <a href="#">Read More...</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                        <!-- End blog -->
                    </div>
                </div>
            </section>
            <!-- End blog area -->
            <!-- Start brand logo area -->
            <section class="brand-logo-area pb-90">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>OUR <span>SPONSORS</span></h2>
                                <img src="img\title-bottom.png" alt="">
                            </div>
                        </div>
                        <!-- End section title -->
                        <!-- Start brand logo -->
                        <div class="brand-logo">
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="http://psdrightsell.com/"><img src="img\brand-logo\b-logo-one.png" alt="psdrightsell"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="http://hastech.company/"><img src="img\brand-logo\b-logo-two.png" alt="hastech"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="https://devitems.com/"><img src="img\brand-logo\b-logo-three.png" alt="devitems"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="https://themeforest.net/user/power-boosts"><img src="img\brand-logo\b-logo-four.png" alt="power boosts"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="https://themeforest.net/user/hastech/portfolio"><img src="img\brand-logo\b-logo-five.png" alt="hastech"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="https://themeforest.net/user/codecarnival"><img src="img\brand-logo\b-logo-six.png" alt="codecarnival"></a>
                                </div>
                            </div>
                        </div>
                        <!-- End brand logo -->
                    </div>
                </div>
            </section>
            <!-- End brand logo area -->
            <!-- Start footer -->
            
            <!-- End footer -->
        </div>
        <!-- End main area -->


<?php

include("footer.php");

?>