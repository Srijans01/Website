<!DOCTYPE html>
<?php 
include "../include/functions.php";
session_start();
?> 
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Arunoday Foundation School</title> 
    <meta name="keywords" content="Arunoday Foundation School">
    <meta name="description" content="IEEE-ASET, a Student Branch of IEEE was founded in 2003 by Piyush Arya. It endeavors to realize the dreams of the budding engineers. It mainly aims to spread the knowledge to one and all in all the upcoming fields of robotics, telecommunication, electronics, computers etc. by organizing workshops, events, quizzes and publishing newsletters, Annual Magazine and DVD. ">
    <meta name="author" content="ieeeaset.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="600">  

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Theme CSS -->
    <link href="../css/style.css" rel="stylesheet" media="screen">

    <!-- Skins Theme -->
    <link href="../css/skins/blue/blue.css" rel="stylesheet" media="screen" class="skin">

    <!-- Favicons -->
   <link rel="shortcut icon" href="img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">  
	
    <!-- Head Libs -->
    <script src="js/modernizr.js"></script>

    <!--[if lte IE 9]>
        <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
        <script src="js/responsive/respond.js"></script>
    <![endif]-->

    <!-- styles for IE -->
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="../css/ie/ie.css" type="text/css" media="screen" />            
    <![endif]-->

    <!-- Skins Changer-->
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
   
  </head>
<body>
	
	 <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
         <!-- Login Client -->
        <div class="jBar">
          <div class="container">            
              <div class="row">    

                  <div class="col-md-8">
                     <div class="row padding-top-mini">
                        <!-- Item service-->
                        <div class="col-md-6">
                            <div class="item-service border-right">
                                <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-angle-right"></i>                             
                                    </div>
                                    <div class="col-md-10">
                                        <h5><a href="http://www.ieee.org/index.html" target="_blank" style="color:white;">IEEE.ORG</a></h5>
                                    </div>
                                </div>  
                                 <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-angle-right"></i>                             
                                    </div>
                                    <div class="col-md-10">
                                        <h5><a href="http://ewh.ieee.org/r10/delhi/" target="_blank" style="color:white;">IEEE DELHI SECTION</a></h5>
                                    </div>
                                </div> 
							</div>
                        </div>      
                        <!-- End Item service-->

                      	 <div class="col-md-6">
                            <div class="item-service border-right">
                                <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-angle-right"></i>                             
                                    </div>
                                    <div class="col-md-10">
                                        <h5><a href="http://www.ewh.ieee.org/r10/india_council/" target="_blank" style="color:white;">IEEE INDIA COUNCIL</a></h5>
                                    </div>
                                </div>  
                                 <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-angle-right"></i>                             
                                    </div>
                                    <div class="col-md-10">
                                        <h5><a href="http://www.ieeer10.org/" target="_blank" style="color:white;">IEEE REGION 10</a></h5>
                                    </div>
                                </div> 
							</div>
                        </div>    
						
                     </div>
                  </div>

                  
                 <div class="col-md-4" id="login">
                      <h5>Member Login</h5>
                   <?php    
				   if(!empty($_SESSION["login_user_id"]))
{
$loginid=$_SESSION["login_user_id"];
}
                   if(empty($_SESSION["login_user_id"]))
                        {
                       echo '
                      <form method="post" action="login.php">
                          <input type="text" placeholder="Membership Id / UserID" required name="userid">
                          <input type="password" placeholder="Password" required name="pass">
                          <input type="hidden" name="redirect" value="blog">
                          <input type="submit" class="btn btn-primary" value="Sign In">
                          <span>Or</span> 
                          
                                            
                          <a href="../membership/registration.php" class="btn btn-primary" >Register</a>
                      </form>';
                      }
else{
    echo '<form method="post" action="logout.php">
                         
                          <input type="hidden" name="redirect" value="blog">
                          <input type="submit" class="btn btn-primary" value="Log out">
                         
                          
                                            
                          
                      </form>';


}


                      ?>
                  </div>

                            
                  <span class="jTrigger downarrow"><i class="fa fa-minus"></i></span>
              </div>
          </div>
      </div>
      <span class="jRibbon jTrigger up" title="Login"><i class="fa fa-plus"></i></span>
      <div class="line"></div>
      <!-- End Login Client -->

        <!-- Info Head -->
        <section class="info-head">  
            <div class="container">
                <ul>  
                    <li> <a href="http://www.ieee.org/index.html" target="_blank"> IEEE.org</a></li>
                    <li> <a href="http://ieeexplore.ieee.org/" target="_blank">IEEE Xplore Digital Library </a></li>
                    <li> <a href="http://standards.ieee.org/" target="_blank">IEEE Standards</a></li>
                    <li> <a href="http://spectrum.ieee.org/" target="_blank">IEEE Spectrum</a></li>
                    <li> <a href="http://www.ieee.org/sitemap.html?WT.mc_id=mn_smap" target="_blank">More IEEE Site</a></li>
                   <?php 

                    if(!empty($loginid)) 
                        {
                            echo '<li> <a href="../users/profile.php" target="_blank">Howdy! &nbsp'.selectuserinfo($loginid)["name"].'</a></li>';
                        }
                    ?>
                </ul>
            </div>            
        </section>
        
        <!-- Info Head -->

        <!-- Header-->
        <header class="animated fadeInDown delay1">           
            <div class="container">
                <div class="row">

                    <!-- Logo-->
                    <div class="col-md-3 logo">                                               
                            <img src="../img/logo.png" alt="IEEE" class="logo_img">
                            <a href="http://www.ieee.org/index.html" target="_blank"><img src="../img/logo_ieee.png" alt="ASET" class="logo_img"> </a>                                               	                    
                   </div>
                    <!-- End Logo-->
                                                      
                    <!-- Nav-->
                    <nav class="col-md-9" >
                        <!-- Menu-->
                        <ul id="menu" class="sf-menu">
                             <li><a href="../index.php">HOME</a></li>
                             <li>
                                <a href="ieee.php">ABOUT<i class="fa fa-angle-down"></i></a>
                                <ul>                                  
                                    <li><a href="ieee.php">About IEEE</a></li>
                                    <li><a href="ieee-aset.php">About IEEE ASET</a></li>
                                    <li><a href="cs.php">About Computer Society</a></li>
                                    <li><a href="wie.php">About WIE</a></li>
                                    <li><a href="mtts.php">About MTTS</a></li>
                                    <li><a href="counsellor.php">Branch Counsellor</a></li>
                                </ul>
                            </li>
                           <li><a href="../membership/hti.php">MEMBERSHIP <i class="fa fa-angle-down"></i></a>
                                <ul>                                  
                                    <li><a href="../membership/hti.php">How to join? </a></li>
                                    <li><a href="../membership/wtj.php">Why to join?</a></li>
                                    <li><a href="../membership/aoab.php">Advantage of ASET branch</a></li>									
                                    <li><a href="../membership/am.php">Additional membership</a></li>
                                    <li><a href="../membership/jn.php">Join Now</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../events/u_event.php">EVENTS <i class="fa fa-angle-down"></i></a>
                                <ul>                      
                                    <li><a href="../events/u_event.php">Upcoming Events</a></li>
                                    <li><a href="../events/p_event.php">Past Events</a></li>
                                 </ul>
                            </li>   
							<li>
							    <a href="../team/execom.php">TEAM <i class="fa fa-angle-down"></i></a>
								<ul>
								    <li><a href="../team/execom.php">EXECOM</a></li>
									<li><a href="../team/member.php">MEMBERS</a></li>
								</ul>
							</li>
                            <li>
                                <a href="../works/sig.php">WORKS <i class="fa fa-angle-down"></i></a>
                                <ul>                                  
                                    <li><a href="../works/sig.php">SIGs</a></li>                      
                                    <li><a href="../works/projects.php">Projects</a></li>                      
                                    <li><a href="../works/achievements.php">Achievements</a></li>                      
                                    <li><a href="../works/binary.php">Binary - The Annual DVD</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../blog/blog-list.php">BLOG </a>
                            </li>								
                            <li><a href="../contact.php">CONTACT</a></li>
                        </ul>
                        <!-- End Menu-->
                    </nav>
                    <!-- End Nav-->
                    
                </div><!-- End Row-->
            </div><!-- End Container-->
        </header>
        <!-- End Header-->
		
	
        <!-- Title Section -->           
        <section class="title-section">
            <div class="container">
                

                <!-- Title - Search--> 
                <div class="row title">
                    <!-- Title --> 
                    <div class="col-md-9">
                        <h1>IEEE-Amity School Of Engineering And Technology
                            <span class="subtitle-section">
                                Benefits Of Our Generosity
                                <span class="left"></span>
                                <span class="right"></span>
                            </span>
                            <span class="line-title"></span>
                        </h1>
                    </div>
                    <!-- End Title--> 
                </div>
         </div>
        </section>   
        <!-- End Title Section --> 


        <!-- Info About Us -->
        <section class="paddings">
            <div class="container">
                <div class="row">

                    <div class="col-md-7">
                         <br><p>
						 Assuming that you have already looked up the "official" benefits on the ieee website (Global Benefits Finder), quite a lot depends on how active is the ieee student branch member is.
						And mostly it depends on how you want to derive benefits out of it.
						We have listed a few on top of our views.
						<ol>
						<li>Student Network : <br>Helps you get in touch with a lot of talented people in various fields and not just your own. (You never know when you need a web/app developer's advice). Also further down the road, when all of you would be on your way, there would be much more connection than just DCE (institute name) alumni</li>
						<li>Head Fake Learning : <br>By organizing events / membership drive - you learn(&implement !) other things which you might have not really followed even after attending an hour-long session(lecture/talk) on. Things like leadership, patience, perseverance, felicitation, street-smartness and a lot more.
							Why head fake ? You were set out to do a task but never had a primary intention to learn any of the above. You just happen to pick 'em up along the way. Isn't that the best way to learn.</li>
						<li> SIG(Special Interest Groups) : <br>A crucial part of Student Branch Activities. As a member, you can practically start a group on anything that excites you and even a few others - competitive programming, web development, open source, robotics, MATLab, Designing ; although mostly they are encouraged to be technical. There is no such compulsion. 
They help you find your interest or even co-founders to your start-up idea or feedback on current technologies.  Such a head-start is needed.</li>
						<ol>
						 </p>
						<p>These are mostly the non-technical side of it. Although there many benefits on technical front even for an undergrad (learning resources/ insights from IEEE Gold members/ discounts to conferences/ free Microsoft software etc.), let us know if you want us to elaborate on that aspect.</p>
					</div>

                    <div class="col-md-5">
                        <!-- Simple-slide --> 
                        <div id="carousel-example-generic" class="carousel slide bs-docs-carousel-example">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
								<li data-target="#carousel-example-generic" data-slide-to="3" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
								<li data-target="#carousel-example-generic" data-slide-to="6" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="7" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="8" class=""></li>
							</ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../img/asetworks/1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="../img/asetworks/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="../img/asetworks/3.jpg" alt="">
                                </div>
								<div class="item">
                                    <img src="../img/asetworks/4.jpg" alt="">
                                </div>
								<div class="item">
                                    <img src="../img/asetworks/5.jpg" alt="">
                                </div>
								<div class="item">
                                    <img src="../img/asetworks/6.jpg" alt="">
                                </div>
								<div class="item">
                                    <img src="../img/asetworks/7.jpg" alt="">
                                </div>
								<div class="item">
                                    <img src="../img/asetworks/8.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="icon-prev"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="icon-next"></span>
                            </a>
                        </div>
                        <!-- End Simple-slide --> 
                    </div>
                </div>
				
            </div>
            <!-- End Container-->
        </section>
        <!-- End Info About Us-->
		   		
	 <!-- footer Center-->
        <footer class="footer-center" id="footer">
            <div class="container">

                <br/>               

                <div class="row ">   
                   <div class="col-md-4">
                        <div class="border-right">
                            <i class="fa fa-twitter"></i>
                            <h4>Latest Tweet</h4>                     
                            <div class="twitter">  

                            </div>                        
                        </div>
                   </div>
                   <div class="col-md-3">
                        <div class="border-right">
                            <h4>Newsletter</h4>
                            <p>Enter your e-mail and subscribe to our newsletter.</p>

                            <form id="newsletterForm" action="subscribe.php">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input class="form-control" placeholder="Email Address" name="email"  type="email" required="required">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit" name="subscribe" >Go!</button>
                                    </span>
                                </div>
                            </form>   
                            <div id="result-newsletter"></div>
                       </div>
                    </div>
                    <div class="col-md-2">
                        <div class="border-right">
                            <h4>Recent Links</h4>
                            <ul class="links">
                                <li><i class="fa fa-check"></i> <a href="#">Work</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">About Us</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Services</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Contact</a></li>
                            </ul>
                       </div>
                    </div>
                   <div class="col-md-3">
                        <h4>Gallery</h4>
                        <ul id="flickr" class="thumbs"></ul>
                   </div>
               </div>    

            </div>
        </footer>      
        <!-- End footer Center-->

        <!-- footer bottom-->
        <footer class="footer-bottom">
            <div class="container">
               <div class="row">   
                                                                  
                    <!-- Nav-->
                    <div class="col-md-8">
                        <div class="logo-footer">
                            <h2><span>IEEE</span> ASET<span>.</span></h2>
                        </div>
                        <!-- Menu-->
                        <ul class="menu-footer">
                            <li><a href="index.html">HOME</a> </li>
                            <li><a href="about.html">ABOUT</a></li>
                            <li><a href="services.html">SERVICES</a></li> 
                            <li><a href="http://themeforest.net/user/iwthemes/portfolio?ref=iwthemes">PORTFOLIO</a></li> 
                            <li><a href="blog.html">BLOG</a></li>                                                     
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                        <!-- End Menu-->

                        <!-- coopring-->
                       <div class="row coopring">
                           <div class="col-md-8">
                               <p>&copy; 2016 IEEE ASET . All Rights Reserved.  2003 - 2016</p>
                           </div>
                       </div>    
                       <!-- End coopring-->  

                    </div>
                    <!-- End Nav-->

                    <!-- Social-->
                    <div class="col-md-4">
                        <!-- Social-->
                        <ul class="social">
                            <li data-toggle="tooltip" title data-original-title="Facebook">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li> 
                            <li data-toggle="tooltip" title data-original-title="Twitter">
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li> 
                            <li data-toggle="tooltip" title data-original-title="Youtube">
                                <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>                     
                        </ul>
                        <!-- End Social-->
                    </div>
                    <!-- End Social-->

               </div> 
                    
            </div>
        </footer>      
        <!-- End footer bottom-->
	
	   <!-- ======================= JQuery libs =========================== -->
    <!-- Always latest version of jQuery-->
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
     <!-- jQuery local-->    
    <script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>    
    <!--Nav-->
    <script type="text/javascript" src="js/nav/tinynav.js"></script> 
    <script type="text/javascript" src="js/nav/superfish.js"></script>  
    <script src="js/nav/jquery.sticky.js" type="text/javascript"></script>                                           
    <!--Totop-->
    <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
    <!--Slide-->
    <script type="text/javascript" src="js/slide/camera.js" ></script>      
    <script type='text/javascript' src='js/slide/jquery.easing.1.3.min.js'></script>  
    <!--FlexSlider-->
    <script src="js/flexslider/jquery.flexslider.js"></script> 
    <!--Ligbox--> 
    <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script> 
    <!-- carousel.js-->
    <script src="js/carousel/carousel.js"></script>  
    <!-- Twitter Feed-->
    <script src="js/twitter/jquery.tweet.js"></script> 
    <!-- flickr Feed-->
    <script src="js/flickr/jflickrfeed.min.js"></script>  
    <!--Scroll-->   
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Nicescroll -->
    <script src="js/scrollbar/jquery.nicescroll.js"></script>
    <!-- Maps -->
    <script src="js/maps/gmap3.js"></script>
    <!-- Filter -->
    <script src="js/filters/jquery.isotope.js" type="text/javascript"></script>
    <!--Theme Options-->
    <script type="text/javascript" src="js/theme-options/theme-options.js"></script>
    <script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script>                                
    <!-- Bootstrap.js-->
    <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
    <!--MAIN FUNCTIONS-->
    <script type="text/javascript" src="js/main.js"></script>
    <!-- ======================= End JQuery libs =========================== -->
       
</body>
</html>