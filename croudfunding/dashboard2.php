<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");


$select = $db->select("needypersondetails","*",array("status"=>"Approve"));
//varPrint($select);
include("includes/header.php");



?>
			
        	<!-- Start slider area -->
        	<section class="slider-animate-area pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="cd-intro">
                                <h1 class="cd-headline clip is-full-width title1 wow zoomIn animated" data-wow-duration="1s" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1s; animation-delay: 300ms; animation-name: zoomIn;">
                                    <span>WE CAN HELP </span>
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">SOMEONE</b>
                                        <b>SOMEONE</b>
                                        <b>SOMEONE</b>
                                    </span>
                                </h1>
                                <p class="wow zoomIn animated" data-wow-duration="1s" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1s; animation-delay: 600ms; animation-name: zoomIn;">E-DISHA makes sure that your donations reach the right people through an extensive verification process.</p>
                                <div class="slider-button-area wow zoomIn animated" data-wow-duration="1s" data-wow-delay="900ms" style="visibility: visible; animation-duration: 1s; animation-delay: 900ms; animation-name: zoomIn;">
                                    <a href="donation_categories.php" class="btn-lg">DONATE NOW</a>
                                    <a href="login.php" class="btn-lg">Start A Fundriser</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        	</section>
        	<!-- End slider area -->
        	<!-- End slider area -->
            <!-- Start our couses area -->
        	<section class="our-couses-area pt-90 pb-90">
<div class="col-sm-12">
        					<div class="section-title text-center">
        						<h2>OUR <span>CAUSES</span></h2>
        						<img src="img\title-bottom.png" alt="">
        						<p>Our charity help those people who have no hope</p>
        					</div>

        				</div>







<div class="col-md-12">

<div class="row">
		<div class="MultiCarousel" data-items="0,1,2,3" data-slide="1" id="MultiCarousel1" data-interval="1000">
            <div class="MultiCarousel-inner" style="transform: translateX(0px); width: 1710px;">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<?php               
$Pcontent = $db->select("needypersondetails","*",array("status"=>"Approve"));
 foreach($Pcontent as $content)
 {            
 	?>



			   <div class="item" style="width: 190px;">
                    <div style="background-color: white;">
                        <!-- Start single blog -->
                            <div class="col-sm-12">
                                <div class="single-blog">
                                    <div class="blo-image-and-date">
                                        <img src="admin2/includes/img/<?php echo $content->photo;?>" alt="" style="height: 250px; padding:10px;  width: auto;">
                                       
                                    </div>
                                    <div class="blog-info">
                                       <div class="admin" style="border:1px solid #ff0000;text-align: center;background: red;color: cornsilk;">
                                            <?php echo $content->NeedFor; ?>
                                        </div>
                                        <div class="comment">
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 15</a>
                                            <a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 25</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="#" style="color: #0aaaa0;"><?php echo $content->Tital;?></a></h3>
                                        
                                       

                                    </div>
									
									 <div class="row">
                                    <div class="couses-button-and-price">   
                                    <div class="col-md-6">               
                                        <div class="couses-button">
                                            <a href="patientdetailpage.php?id=<?php echo $content->sno; ?>" class="btn-md bo-ra-5"style="background-color:#0aaaa0; color: black; margin: 15px;border: 1px solid white;">Donate</a>
                                        </div>  
                                    </div>
                                     <div class="col-md-6" style="margin-top: -15px;">
                                        <div class="couses-price" style="margin-right: 30px; margin-top:5px;">
									
                                          <h5 style="font-size: 20px;">₹ <?php echo $content->InitialAmount;?></h5>
                                           
                                        </div>
                                     </div>   
                                    </div>
                                    </div>
									
                                </div>
                            </div>
                            <!-- End single blog --> 
                    </div>
                </div>
				
			     <?php       
				 }
				 ?>           

            </div>
            <button class="leftLst over" style="background-color:transparent;color:white; ;font-size:50px; border:none;    text-shadow: 4px 4px 8px black;

"><span class="glyphicon glyphicon-chevron-left"></span></button>
            <button class="rightLst" style="background-color:transparent;color:white; ;font-size:50px; border:none;    text-shadow: 4px 4px 8px black;

"><span class="glyphicon glyphicon-chevron-right"></span></button>
        </div>
	</div>
	
</div>	
	
	
	
<style>
.mr-row1-left, .mr-row1-right {
    float: left;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -o-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
    width: 61%;
    border-right: solid 1px #e5e5e5;
    position: relative;
}
.intro-pic {
    width: 45%;
    position: relative;
}
.mr-row1-left .intro-txt {
    background: #FFF;
    width: 60%;
    top: 0;
    left: 42%;
    position: absolute;
    padding: 36px;
    -moz-box-shadow: 5px 6px 5px rgba(33, 30, 31, .4);
    -webkit-box-shadow: 5px 6px 5px rgba(33, 30, 31, .4);
    box-shadow: 5px 6px 5px rgba(33, 30, 31, .4);
    z-index: 50;
}
.intro-pic img {
    width: 100%;
}

element.style {
}
.mr-row1, .mr-row2 {
    position: relative;
    padding: 0 0 2em 0;
    margin: 0 auto 2em auto;
    border-bottom: solid 1px #e5e5e5;
}
.mCustomScrollbar {
    -ms-touch-action: pinch-zoom;
    touch-action: pinch-zoom;
}

.whoare-contents {
    height: 330px;
    overflow: auto;
    position: relative;
}
.mCustomScrollBox {
    position: relative;
    overflow: hidden;
    height: 100%;
    max-width: 100%;
    outline: none;
    direction: ltr;
}

.mCustomScrollBox {
    position: relative;
    overflow: hidden;
    height: 100%;
    max-width: 100%;
    outline: none;
    direction: ltr;
}
.mCSB_inside > .mCSB_container {
    margin-right: 30px;
}

.mCSB_container {
    overflow: hidden;
    width: auto;
    height: auto;
}
element.style {
    display: block;
}

.mCSB_scrollTools {
    opacity: 0.75;
    filter: "alpha(opacity=75)";
    -ms-filter: "alpha(opacity=75)";
}
.mCSB_scrollTools, .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, .mCSB_scrollTools .mCSB_buttonUp, .mCSB_scrollTools .mCSB_buttonDown, .mCSB_scrollTools .mCSB_buttonLeft, .mCSB_scrollTools .mCSB_buttonRight {
    -webkit-transition: opacity .2s ease-in-out, background-color .2s ease-in-out;
    -moz-transition: opacity .2s ease-in-out, background-color .2s ease-in-out;
    -o-transition: opacity .2s ease-in-out, background-color .2s ease-in-out;
    transition: opacity .2s ease-in-out, background-color .2s ease-in-out;
}
.mCSB_scrollTools {
    position: absolute;
    width: 16px;
    height: auto;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
}

.intro-txt p {
    font-family: "Baskerville", Georgia, Times, Serif;
    font-size: 1.2em;
    line-height: 1.5em;
    color: #111;
    font-style: italic;
    text-align: justify;
}

.intro-txt h2 {
    text-align: center;
    font-family: "AvantGarde", Arial, Sans-serif;
    font-size: 1.5em;
    line-height: 1.2;
    text-transform: uppercase;
    color: #000;
    letter-spacing: 0.01em;
}


.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color:transparent; 
    color: black; 
    border: 10px solid #f44336;
	width:250px;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
</style>





<script>
$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>





</section>
            <!-- End our couses area -->
            <section class="what-we-do-area pb-70">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>Browse <span>Fundraisers</span></h2>
                                <img src="img\title-bottom.png" alt="">
                                <p>We create events aiming to pear to the voice for children and gather for support. <br>Please update with our events and confirm you presence.</p>
                            </div>
                        </div>
                        <!-- End section title -->
                        <div class="what-we-do">
                            <!-- Start single we do -->
                            <div class="col-sm-3">
                            <a href="campaginlist.php?id=Education">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img/about/we-do-one.jpg" alt="">
                                    </div>
                                    <div class="we-do-text" style="background: center;">
                      <h5>DONATE FOR EDUCATION</h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <!-- End single we do -->
                            <!-- Start single we do -->
                            <div class="col-sm-3">
                            <a href="campaginlist.php?id=Food">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img\about\we-do-two.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text" style="background: center;">
                                        <h5>DONATE FOR FOOD</h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <!-- End single we do -->
                            <!-- Start single we do -->
                            <div class="col-sm-3">
                            <a href="campaginlist.php?id=Water">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img/about/water.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text" style="background: center;">
                                        <h5>DONATE FOR WATER</h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <!-- End single we do -->
                             <!-- Start single we do -->
                            <div class="col-sm-3">
                            <a href="campaginlist.php?id=Sports">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img/about/we-do-three.jpg" alt="">
                                    </div>
                                    <div class="we-do-text" style="background: center;">
                                        <h5>DONATE FOR SPORTS</h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <!-- End single we do -->
                        </div>

                          <div class="what-we-do">
                            <!-- Start single we do -->
                            <div class="col-sm-3" style="padding-top: 15px;">
                            <a href="campaginlist.php?id=Children">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img/about/we-do-one2.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text" style="background: center;">
                                        <h5 style="color:#136888">DONATE FOR CHILDREN</h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <!-- End single we do -->
                            <!-- Start single we do -->
                            <div class="col-sm-3" style="padding-top: 15px;">
                            <a href="campaginlist.php?id=Community Devlopment">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img\about\we-do-two.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text" style="background: center;">
                                        <h5 style="color:#136888">DONATE FOR COMMUNITY</h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <!-- End single we do -->
                            <!-- Start single we do -->
                            <div class="col-sm-3" style="padding-top: 15px;">
                            <a href="campaginlist.php?id=Creativity">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img/about/creative.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text" style="background: center;">
                                        <h5 style="color:#136888">DONATE FOR CREATIVITY</h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <!-- End single we do -->
                             <!-- Start single we do -->
                            <div class="col-sm-3" style="padding-top: 15px;">
                            <a href="campaginlist.php?id=Health">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img/about/we-do-one2.jpg" alt="">
                                    </div>
                                    <div class="we-do-text" style="background: center;">
                                        <h5 style="color:#136888">DONATE FOR HEALTH</h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <!-- End single we do -->
                        </div>
                    </div>
                </div>
            </section>  
           <!-- Start help us area -->
            <section class="help-us-area pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title-style-two text-center">
                                <h2>HOW CAN YOU HELP US?</h2>
                                <p>Step 1: Create your fundraiser instantly.<br>
                                Step 2: Share your fundraiser online.<br>
                                Step 3:Receive donations from around the world.<br>
                                  Step 4: Transfer funds to the account directly. </p>
                            </div>
                        </div>
                        <div class="help-us-content-area">
                            <!-- Start single help -->
                            <div class="col-sm-4">
                                <div class="single-help">
                                    <div class="help-icon">
                                        <i class="fa fa-university" aria-hidden="true"></i>
                                    </div>
                                    <div class="help-text">
                                        <h3>fundraiser</h3>
                                        <p>Fill in a few details about yourself, and who you are fundraising for. It takes less time..</p>
                                                                            </div>
                                </div>
                            </div>
                            <!-- End single help -->
                            <!-- Start single help -->
                            <div class="col-sm-4">
                                <div class="single-help">
                                    <div class="help-icon">
                                        <i class="fa fa-money" aria-hidden="true"></i>
                                    </div>
                                    <div class="help-text">
                                        <h3>Start crowdfunding</h3>
                                        <p>Receive donations from friends, family and even strangers across the world..</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End single help -->
                            <!-- Start single help -->
                            <div class="col-sm-4">
                                <div class="single-help">
                                    <div class="help-icon">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </div>
                                    <div class="help-text">
                                        <h3 >charges</h3>
                                        <p>Transfer funds to the account directly without any fees.</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End single help -->
                        </div>
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
                                    
                                            
                                        <li class="filter" data-filter="Wildlife">Wildlife</li>
                                            
                                            <li class="filter" data-filter="Children">Children</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div id="gallery-filter">
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Charity Wildlife ">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img/gallery/children.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\children.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Nature Video">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img/gallery/children1.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\children1.jpeg">
									
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											
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
																					</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Nature Video">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img/gallery/wildlife.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\wildlife.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Charity Wildlife Video Children">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\nature.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\nature.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Nature Children">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img/gallery/charity1.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\charity1.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											
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
                                        <img src="img/volunteers/volunteers-one.png" alt="">
                                        <div class="volunteer-social">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="volunteer-title text-center">
                                        <h5>volunteer 1</h5>
                                        <p>E-DISHA</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single volunteer -->
                            <!-- Start single volunteer -->
                            <div class="col-sm-3">
                                <div class="single-volunteer">
                                    <div class="volunteer-image-and-social">
                                        <img src="img/volunteers/volunteers-two.jpeg" alt="">
                                        <div class="volunteer-social">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="volunteer-title text-center">
                                        <h5>volunteer2</h5>
                                        <p>E-DISHA</p>
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
                                        <h5>volunteer 3</h5>
                                        <p>E-DISHA</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single volunteer -->
                            <!-- Start single volunteer -->
                            <div class="col-sm-3">
                                <div class="single-volunteer">
                                    <div class="volunteer-image-and-social">
                                        <img src="img/volunteers/volunteers-four.jpeg" alt="">
                                        <div class="volunteer-social">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="volunteer-title text-center">
                                        <h5>volunteer 4</h5>
                                        <p>E-DISHA</p>
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
                            <div class="people-say-slide">
                                <!-- Start single people -->
                                <div class="single-people text-center">
                                    <div class="people-say-image">
                                        <img src="img/volunteers/volunteers-one.png" alt="">
                                    </div>
                                    <div class="peoplp-say-text text-center">
                                        <p>

No one is useless in this world who lightens the burdens of another.

</p>
                                        <h5>E-DISHA</h5>
                                        <h6>USER</h6>
                                    </div>
                                </div>
                                <!-- End single people -->
                                <!-- Start single people -->
                                <div class="single-people text-center">
                                    <div class="people-say-image">
                                        <img src="img/volunteers/volunteers-two.jpeg" alt="">
                                    </div>
                                    <div class="peoplp-say-text text-center">
                                        <p>I think people forget that it doesn't take a big donation to help someone, just a lot of little donations.
</p>
                                        <h5>E-DISHA</h5>
                                        <h6>USER</h6>
                                    </div>
                                </div>
                                <!-- End single people -->
                                <!-- Start single people -->
                                <div class="single-people text-center">
                                    <div class="people-say-image">
                                        <img src="img/volunteers/volunteers-four.jpeg" alt="">
                                    </div>
                                    <div class="peoplp-say-text text-center">
                                        <p>I think people forget that it doesn't take a big donation to help someone, just a lot of little donations.
</p>
                                        <h5>E-DISHA</h5>
                                        <h6>USER</h6>
                                    </div>
                                </div>
                                <!-- End single people -->
                            </div>
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
                        <?php 
                        $db->orderBy("sno","DESC");	
                        $blogs = $db->select("blog","*");
                        foreach($blogs as $blog){
						
                        ?>
                        
                            <!-- Start single blog -->
                             <div class="col-sm-4">
                                <div class="single-blog mb-30">
                                
                                    <div class="blo-image-and-date">
                                        <img src="admin2/includes/img/<?php echo $blog->image; ?>" alt="">
                                        <a href="#">24 may</a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="admin">
                                            <a href="blogdetails.php" style="color: #0aaaa0;"><i class="fa fa-user" aria-hidden="true"></i> By: <?php echo $blog->blogby; ?></a>
                                        </div>
                                        <div class="comment">
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 15</a>
                                            <a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 25</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="#" style="color: #0aaaa0;"><?php echo $blog->blogtital; ?></a></h3>
                                        <p><?php //echo $blog->blog; ?></p>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <?php } ?>
                       
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
                                    <a href="#"><img src="img\brand-logo\b-logo-one.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="#"><img src="img\brand-logo\b-logo-two.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="#"><img src="img\brand-logo\b-logo-three.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="#"><img src="img\brand-logo\b-logo-four.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="#"><img src="img\brand-logo\b-logo-five.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="#"><img src="img\brand-logo\b-logo-six.png" alt=""></a>
                                </div>
                            </div>
                         </div>
                        <!-- End brand logo -->
					
		<div class="row">
		<div class="col-md-4 text-centre" style=" margin-top: 23px;    text-align: center;">										
					
<!-- Sharingbutton Facebook -->
<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="Share on Facebook">
<div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid" style="width: 300px;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
    </div>Share on Facebook</div>
</a>

</div>
<div class="col-md-4 text-centre" style=" margin-top: 23px;    text-align: center;">		
<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="Share on Twitter">
  <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid" style="    width: 300px;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg>
    </div>Share on Twitter</div>
</a>
</div>
<div class="col-md-4 text-centre" style=" margin-top: 23px;    text-align: center;">		
<a class="resp-sharing-button__link" href="https://plus.google.com/share?url=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="Share on Google+">
  <div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid"style="    width: 300px;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.37 12.93c-.73-.52-1.4-1.27-1.4-1.5 0-.43.03-.63.98-1.37 1.23-.97 1.9-2.23 1.9-3.57 0-1.22-.36-2.3-1-3.05h.5c.1 0 .2-.04.28-.1l1.36-.98c.16-.12.23-.34.17-.54-.07-.2-.25-.33-.46-.33H7.6c-.66 0-1.34.12-2 .35-2.23.76-3.78 2.66-3.78 4.6 0 2.76 2.13 4.85 5 4.9-.07.23-.1.45-.1.66 0 .43.1.83.33 1.22h-.08c-2.72 0-5.17 1.34-6.1 3.32-.25.52-.37 1.04-.37 1.56 0 .5.13.98.38 1.44.6 1.04 1.84 1.86 3.55 2.28.87.23 1.82.34 2.8.34.88 0 1.7-.1 2.5-.34 2.4-.7 3.97-2.48 3.97-4.54 0-1.97-.63-3.15-2.33-4.35zm-7.7 4.5c0-1.42 1.8-2.68 3.9-2.68h.05c.45 0 .9.07 1.3.2l.42.28c.96.66 1.6 1.1 1.77 1.8.05.16.07.33.07.5 0 1.8-1.33 2.7-3.96 2.7-1.98 0-3.54-1.23-3.54-2.8zM5.54 3.9c.33-.38.75-.58 1.23-.58h.05c1.35.05 2.64 1.55 2.88 3.35.14 1.02-.08 1.97-.6 2.55-.32.37-.74.56-1.23.56h-.03c-1.32-.04-2.63-1.6-2.87-3.4-.13-1 .08-1.92.58-2.5zM23.5 9.5h-3v-3h-2v3h-3v2h3v3h2v-3h3"/></svg>
    </div>Share on Google+</div>
</a>
</div>


				
			</div>				
							
							
                           </div>
                </div>
            </section>
            <!-- End brand logo area -->
            <!-- Start footer -->
          
		  
<?php

include("footer.php");

?>




            <!-- End footer -->