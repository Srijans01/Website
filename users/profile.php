<!DOCTYPE html>
<html lang="en">
  <?php 
include "../include/functions.php";


//postedby


session_start();

$loginid="";
if(!empty($_SESSION["login_user_id"]) and (!isset($_GET['id']) or empty($_GET["id"])))
{
$loginid=$_SESSION["login_user_id"];
}
if(isset($_GET['id']) )
{
$loginid=base64_decode($_GET["id"]);	
}
if((!isset($_GET['id']) or empty($_GET["id"])) and empty($_SESSION["login_user_id"]))
{
	header("location:../404.php");
	
}
$getid="";
if(isset($_GET['id']))
{
	$getid=$_GET["id"];
	
}

if($_SESSION["login_user_id"]==base64_decode($getid) or (!empty($_SESSION["login_user_id"]) and ( empty($getid))))
{
	$restrict=""; 
}
else{
	
	$restrict="disabled";
}
if($loginid=="")
{
	$restrict="disabled";
}


?>  
<head>
    <meta charset="utf-8">
    <title>EXECOM</title> 
   <meta name="keywords" content="IEEE,IEEE ASET,ASET,AMITY,aset, Contact | IEEE ASET, technical groups, engineering, WIE, computer society">
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
    <link rel="shortcut icon" href="../img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="../img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/icons/apple-touch-icon-114x114.png">  

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
<body >
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

                  <div class="col-md-4">
                      <h5>Member Login</h5>
                      <form>
                          <input type="text" placeholder="Membership Id" required>
                          <input type="password" placeholder="Password" required>
                          <input type="submit" class="btn btn-primary" value="sign in">
                          <span>Or</span>                       
                          <input type="submit" class="btn btn-primary" value="Register">
                      </form>
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

                    if(!empty($_SESSION["login_user_id"])) 
                        {
                            echo '<li> <a href="profile.php" target="_blank">Howdy! &nbsp'.selectuserinfo($_SESSION["login_user_id"])["name"].'</a></li>';
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
                            <img src="../img/logo_aset.png" alt="IEEE" class="logo_img">
                            <a href="http://www.ieee.org/index.html" target="_blank"><img src="../img/logo_ieee.png" alt="ASET" class="logo_img"> </a>                                                                      
                   </div>
                    <!-- End Logo-->
                                                      
                    <!-- Nav-->
                    <nav class="col-md-9" >
                        <!-- Menu-->
                        <ul id="menu" class="sf-menu">
                             <li><a href="../index.php">HOME</a></li>
                             <li>
                                <a href="about.php">ABOUT<i class="fa fa-angle-down"></i></a>
                                <ul>                                  
                                    <li><a href="../about/ieee.php">About IEEE</a></li>
                                    <li><a href="../about/ieee-aset.php">About IEEE ASET</a></li>
                                    <li><a href="../about/cs.php">About Computer Society</a></li>
                                    <li><a href="../about/wie.php">About WIE</a></li>
                                    <li><a href="../about/mtts.php">About MTTS</a></li>
                                    <li><a href="about/counsellor.php">Branch Counsellor</a></li>
                                </ul>
                            </li>
                           <li><a href="../membership/hti.php">MEMBERSHIP <i class="fa fa-angle-down"></i></a>
                                <ul>                                  
                                    <li><a href="../membership/hti.php">How to join? </a></li>
                                    <li><a href="../membership/wtj.php">Why to join?</a></li>
                                    <li><a href="../membership/aoab.php">Advantage of ASET branch</a></li>									
                                    <li><a href="../membership/am.php">Additional membership</a></li>
                                    <li><a href="../membership/registration.php">Join Now</a></li>
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
       <section class="paddings"style="background-color:white">
           <div class="container" >
 
  <div class="row">
    <!-- left column -->
	  <form class="form-horizontal" method="post" action="update.php" enctype="multipart/form-data">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
	  
        <img src="../img/team/<?php echo selectuserinfo($loginid)["dpimage"];?>" class="avatar img-circle img-thumbnail" alt="avatar">
      <?php if($restrict!="disabled"){?>
        <input type="file" id="FileUpload1" name="file" id="file" class="text-center center-block well well-sm">
	  <?php }?>
      </div>
 <br><br>
  <?php if($restrict!="disabled"){?>
	  <div class="form-group">
          <label class="col-lg-4 control-label">Reset password</label>
          <div class="col-lg-8">
		  <br>
            <input class="form-control"  type="text" name="password">
          </div>
        </div>
		<?php }?>
	
    </div>
	
	
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      
      <h3>Personal info</h3>
      
	
        
		
		<div class="form-group">
          <label class="col-lg-3 control-label">Name</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo selectuserinfo($loginid)["name"];?>" type="text" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Branch & Year</label>
          <div class="col-lg-3">
            <input class="form-control" name="brach" value="<?php echo selectuserinfo($loginid)["branch"];?>" type="text"<?php echo $restrict;?>>
			</div><div class="col-lg-3">
			<input class="form-control" name="brachyr" value="<?php echo selectuserinfo($loginid)["branchyr"];?>" type="text"<?php echo $restrict;?>>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Member ID</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo selectuserinfo($loginid)["memid"];?>" type="text" disabled>
          </div>
        </div>
		<div class="form-group">
          <label class="col-lg-3 control-label">IEEE-Post</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo selectuserinfo($loginid)["post"];?>" type="text" disabled>
          </div>
        </div>
		
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" name="email" value="<?php echo selectuserinfo($loginid)["email"];?>" type="text"
			<?php echo $restrict;?>>
          </div>
        </div>
         <div class="form-group">
          <label class="col-lg-3 control-label">DOB</label>
          <div class="col-lg-8">
            <input class="form-control" name="dob" value="<?php echo selectuserinfo($loginid)["dob"];?>" type="text"
			<?php echo $restrict;?>>
          </div>
        </div>
		 <div class="form-group">
          <label class="col-lg-3 control-label">Member Since</label>
          <div class="col-lg-8">
            <input class="form-control" name="memsince" value="<?php echo selectuserinfo($loginid)["membersince"];?>" type="text"<?php echo $restrict;?>>
          </div>
        </div>
		 <div class="form-group">
          <label class="col-lg-3 control-label">Passing Year:</label>
          <div class="col-lg-8">
            <input class="form-control" name="passingyr" value="<?php echo selectuserinfo($loginid)["passingyear"];?>" type="text" <?php echo $restrict;?>>
          </div>
        </div>
		   <div class="form-group">
          <label class="col-lg-3 control-label">Facebook Profile Link:</label>
          <div class="col-lg-8">
            <input class="form-control" name="fblink" value="<?php echo selectuserinfo($loginid)["fblink"];?>" type="text"
			<?php echo $restrict;?>>
          </div>
        </div>
       <div class="form-group">
          <label class="col-lg-3 control-label">Twitter Profile Link:</label>
          <div class="col-lg-8">
            <input class="form-control" name="tlink" value="<?php echo selectuserinfo($loginid)["twitterlink"];?>" type="text"
			<?php echo $restrict;?>>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Linkedin Profile Link:</label>
          <div class="col-lg-8">
            <input class="form-control" name="llink" value="<?php echo selectuserinfo($loginid)["linkedinlink"];?>" type="text" <?php echo $restrict;?>>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">GitHub  Link:</label>
          <div class="col-md-8">
            <input class="form-control" name="ghlink" value="<?php echo selectuserinfo($loginid)["githublink"];?>" type="text"
			<?php echo $restrict;?>>
          </div>
        </div>
		<div class="form-group">
          <label class="col-md-3 control-label">Google plus Link:</label>
          <div class="col-md-8">
            <input class="form-control" name="glink" value="<?php echo selectuserinfo($loginid)["gplus"];?>" type="text"
			<?php echo $restrict;?>>
          </div>
        </div>
		
		
		<div class="form-group">
          <label class="col-md-5 control-label">Something Interesting About Me:</label>
          <div class="col-md-12">
            <textarea class="form-control" name="about" rows="4" cols="100" value="11111122333" style="resize:none" <?php echo $restrict;?>>
			<?php echo selectuserinfo($loginid)["about"];?> </textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Save Changes" type="submit" <?php echo $restrict;?>>
            <span></span>
            
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
            <!-- End Container-->
        </section>
        <!-- End Works-->
      		
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