<!DOCTYPE html>
<?php 
include "include/functions.php";
session_start();



$loginid="";
if(!empty($_SESSION["login_user_id"]))
{
$loginid=$_SESSION["login_user_id"];
}
?> 
<html lang="en">

<head>
    <meta charset="utf-8">
 
    <title>Home | IEEE ASET</title> 
    <meta name="keywords" content="IEEE,IEEE ASET,ASET,AMITY,aset, Contact | IEEE ASET, technical groups, engineering, WIE, computer society">
    <meta name="description" content="IEEE-ASET, a Student Branch of IEEE was founded in 2003 by Piyush Arya. It endeavors to realize the dreams of the budding engineers. It mainly aims to spread the knowledge to one and all in all the upcoming fields of robotics, telecommunication, electronics, computers etc. by organizing workshops, events, quizzes and publishing newsletters, Annual Magazine and DVD. ">
    <meta name="author" content="ieeeaset.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="600">  

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet" media="screen">

    <!-- Skins Theme -->
    <link href="css/skins/blue/blue.css" rel="stylesheet" media="screen" class="skin">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">  

    <!-- Head Libs -->
    <script src="js/modernizr.js"></script>

  

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
    

    <div id="layout" class="layout-boxed-margin">

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
                                        <h5><a href="http://www.ieee.org/index.html" target="_blank" style="text-decoration:none; color:white;">IEEE.ORG</a></h5>
                                    </div>
                                </div>  
                                 <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-angle-right"></i>                             
                                    </div>
                                    <div class="col-md-10">
                                        <h5><a href="http://ewh.ieee.org/r10/delhi/" target="_blank" style="text-decoration:none; color:white;">IEEE DELHI SECTION</a></h5>
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
                                        <h5><a href="http://www.ewh.ieee.org/r10/india_council/" target="_blank" style="text-decoration:none; color:white;">IEEE INDIA COUNCIL</a></h5>
                                    </div>
                                </div>  
                                 <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-angle-right"></i>                             
                                    </div>
                                    <div class="col-md-10">
                                        <h5><a href="http://www.ieeer10.org/" target="_blank" style="text-decoration:none; color:white;">IEEE REGION 10</a></h5>
                                    </div>
                                </div> 
							</div>
                        </div>    
						
                     </div>
                  </div>

                  
					 <div class="col-md-4" id="login">
                      <h5>Member Login</h5>
                   <?php    
                   if(empty($_SESSION["login_user_id"]))
                        {
                       echo '
                      <form method="post" action="login.php">
                          <input type="text" placeholder="Membership Id / UserID" required name="userid">
                          <input type="password" placeholder="Password" required name="pass">
                          <input type="hidden" name="redirect" value="blog">
                          <input type="submit" class="btn btn-primary" value="Sign In">
                          <span>Or</span> 
                          
                                            
                          <a href="membership/registration.php" class="btn btn-primary" >Register</a>
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
                            echo '<li> <a href="users/profile.php" target="_blank">Howdy! &nbsp'.selectuserinfo($loginid)["name"].'</a></li>';
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
                            <img src="img/logo_aset.png" alt="IEEE" class="logo_img">
                            <a href="http://www.ieee.org/index.html" target="_blank"><img src="img/logo_ieee.png" alt="ASET" class="logo_img"> </a>                                                                      
                   </div>
                    <!-- End Logo-->
                                                      
                    <!-- Nav-->
                    <nav class="col-md-9" >
                        <!-- Menu-->
                        <ul id="menu" class="sf-menu">
                             <li><a href="index.php">HOME</a></li>
                             <li>
                                <a href="about.php">ABOUT<i class="fa fa-angle-down"></i></a>
                                <ul>                                  
                                    <li><a href="about/ieee.php">About IEEE</a></li>
                                    <li><a href="about/ieee-aset.php">About IEEE ASET</a></li>
                                    <li><a href="about/cs.php">About Computer Society</a></li>
                                    <li><a href="about/wie.php">About WIE</a></li>
                                    <li><a href="about/mtts.php">About MTTS</a></li>
                                    <li><a href="about/counsellor.php">Branch Counsellor</a></li>
                                </ul>
                            </li>
                           <li><a href="membership/hti.php">MEMBERSHIP <i class="fa fa-angle-down"></i></a>
                                <ul>                                  
                                    <li><a href="membership/hti.php">How to join? </a></li>
                                    <li><a href="membership/wtj.php">Why to join?</a></li>
                                    <li><a href="membership/aoab.php">Advantage of ASET branch</a></li>									
                                    <li><a href="membership/am.php">Additional membership</a></li>
                                    <li><a href="membership/registration.php">Join Now</a></li>
                                </ul>
                            </li>
                             <li>
                                <a href="events/u_event.php">EVENTS <i class="fa fa-angle-down"></i></a>
                                <ul>                      
                                    <li><a href="events/u_event.php">Upcoming Events</a></li>
                                    <li><a href="events/p_event.php">Past Events</a></li>
                                 </ul>
                            </li>  
                            <li>
							    <a href="team/execom.php">TEAM <i class="fa fa-angle-down"></i></a>
								<ul>
								    <li><a href="team/execom.php">EXECOM</a></li>
									<li><a href="team/member.php">MEMBERS</a></li>
								</ul>
							</li>
                            <li>
                                <a href="works/sig.php">WORKS <i class="fa fa-angle-down"></i></a>
                                <ul>                                  
                                    <li><a href="works/sig.php">SIGs</a></li>                      
                                    <li><a href="works/projects.php">Projects</a></li>                      
                                    <li><a href="works/achievements.php">Achievements</a></li>                      
                                    <li><a href="works/binary.php">Binary - The Annual DVD</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog/blog-list.php">BLOG </a>
                            </li>								
                            <li><a href="contact.php">CONTACT</a></li>
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
                <!-- crumbs --> 
                <div class="row crumbs">
                   <div class="col-md-12">
                        <a href="index.php">Home</a> / Contact Us
                   </div>
                </div>
                <!-- End crumbs --> 

                <!-- Title - Search--> 
                <div class="row title">
                    <!-- Title --> 
                    <div class="col-md-9">
                        <h1>Contact Us
                            <i class="fa fa-phone"></i>
                             
                               
                            <span class="line-title"></span>
                        </h1>
                    </div>
                    <!-- End Title--> 

                    
                </div>
                <!-- End Title -Search --> 
              
            </div>
        </section>   
        <!-- End Title Section --> 

        <!-- Google Map --> 
        <iframe
  width="100%"
  height="400"
  frameborder="1" style="border:5"
  src="https://www.google.com/maps/embed/v1/search?key=AIzaSyAbd318t5kTkd5tBcqCxISXCeWRSdcL-sI&q=amity+bijwasan " allowfullscreen>
</iframe>
        <!-- End Google Map --> 

        <!-- Contact Us -->
        <section class="paddings">
            <div class="container">
                <div class="row">

                    <!-- Sidebars -->
                    <div class="col-md-4 sidebars">

                        <aside>
                            <h4>IEEE ASET</h4>
                            <address>
                              <strong>Amity School of Engineering & Technology</strong><br>
                              <i class="fa fa-map-marker"></i><strong>Address: </strong> 580 Najafgarh Kapashera Rd, Dalmia Vihar, <br>
                              <i class="fa fa-plane"></i><strong>City: </strong>Bijwasan New Delhi, DL 110061<br>
                              <i class="fa fa-phone"></i> <abbr title="Phone">P:</abbr> (011) 2806 2106
                            </address>

                            <address>
                              <strong>Email Us:</strong><br>
                              <i class="fa fa-envelope"></i><strong>Email: </strong><a href="mailto:info@ieeeaset.com" target="_blank">info@ieeeaset.com</a>
                            </address>
                        </aside>

                        <hr class="tall">

               
                    </div>
                    <!-- End Sidebars -->

                    <!-- Content Right -->
                    <div class="col-md-8">
                        <h3>Contact Info</h3>
                        

                        
                        <!-- Tabs -->
                        <div class="tabs">
                            <!-- Tab nav -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#contactUs" data-toggle="tab">
                                    <i class="fa fa-envelope"></i> Contact Us</a>
                                </li>
                                <li class=""><a href="#feedback" data-toggle="tab">
                                    <i class="fa fa-check"></i> Feedback</a>
                                </li>
                            </ul>
                            <!-- End Tab nav -->

                            <!-- Tab Content -->
                            <div class="tab-content">
                                <!-- Tab item -->
                                <div class="tab-pane" id="feedback">
                                    
                                    <h4>Rate us</h4>

                                    <!-- Form Contact -->
                                    <form class="form-contact" action="contact.php">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label>Your name *</label>
                                                    <input type="text"  required="required" value="" maxlength="100" class="form-control" name="Name" id="name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Your email address *</label>
                                                    <input type="email"  required="required" value="" maxlength="100" class="form-control" name="Email" id="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Comment *</label>
                                                    <textarea maxlength="5000" rows="10" class="form-control" name="message"  style="height: 138px;" required="required" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="submit" value="Send Message" class="btn btn-lg btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Form Contact --> 
                                    <div class="result"></div>
                                </div>
                                <!-- End Tab item -->

                                <!-- Tab item -->
                                <div class="tab-pane active" id="contactUs">
                                    
                                    <h4>Fill in the info please</h4>

                                    <!-- Form Contact -->
                                    <form class="form-contact" action="contact.php">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label>Your name *</label>
                                                    <input type="text"  required="required" value="" maxlength="100" class="form-control" name="Name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Your email address *</label>
                                                    <input type="email"  required="required" value="" maxlength="100" class="form-control" name="Email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label>Subject *</label>
                                                    <input type="text"  required="required" value="" class="form-control" name="Subject">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Phone *</label>
                                                    <input type="number"  required="required" value="" class="form-control" name="Phone">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Problem</label>
                                                <select class="form-control" name="Problem">
                                                  <option>Technical</option>
                                                  <option>Administrative</option>
                                                  <option>Membership</option>                                                  
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Comment *</label>
                                                    <textarea maxlength="5000" rows="10" class="form-control" name="message"  style="height: 138px;" required="required" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="submit" value="Send Message" class="btn btn-lg btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Form Contact --> 
                                    <div class="result"></div>
                                </div>
                                <!-- End Tab item -->

                            </div>
                            <!-- End Tab Content -->
                        </div>  
                        <!-- End Tabs -->                     

                    </div>
                    <!-- End Content Right -->


                </div>
            </div>
            <!-- End Container-->
        </section>
        <!-- End Contact Us-->
   

     
<?php include('include/footer.php'); ?>

    </div>
    <!-- End layout-->

     <!-- ======================= JQuery libs =========================== -->
    <!-- Always latest version of jQuery-->
    <script src="ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
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
                            