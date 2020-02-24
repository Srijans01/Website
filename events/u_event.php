<!DOCTYPE html>
<?php 
include "../include/functions.php";

if (!isset($_GET['id']) or empty($_GET["id"]))

{


    $blogid=blog_latestdetail();

}

else{

    $blogid=base64_decode($_GET["id"]);
}

//postedby
$author=blogdetail($blogid)["postedby"];

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
    <title>Events</title> 
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

                  <div class="col-md-4">
                      <h5>Membership Login</h5>
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

  
    <div id="layout">

        <section class="paddings">
            <div class="container">

                <!-- Nav Filters -->
                <div class="portfolioFilter">
                    <a href="#" data-filter="*" class="current">Show All</a>
                    <a href="#programming" data-filter=".programming">Colossus V6.0</a>
                    <a href="#web" data-filter=".web">EQUINOX WEEK</a>
                    <a href="#mobile" data-filter=".mobile">R10/DELHI SECTION EVENTS</a>
					<a href="#ui" data-filter=".ui">WIE EVENTS</a>
                </div>
                <!-- End Nav Filters -->

                <!-- Items Works filters-->
                <div class="works portfolioContainer">
                    
                    
					
					<div class="col-md-6 ui panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/selfd.jpg" alt=""/></center>                               
                                 <a href="../img/events/selfd.jpg" class="fancybox" title="Self Defence Workshop"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Self Defence Workshop</h4>
                         	</center>
                        </div>
						</div>
						
						
					<div class="col-md-6 mobile panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/dsc4.jpg" alt=""/></center>                               
                                 <a href="../img/events/dsc4.jpg" class="fancybox" title="Delhi Section Congress"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Delhi Section Student Congress 2K16</h4>
                         	</center>
                        </div>
						<div class="col-md-6 mobile panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/dsc5.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/dsc5.jpg" class="fancybox" title="Our Execom"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>The Representatives</h4>
                         	</center>
                        </div>
						</div>	
					<div class="col-md-6 mobile panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/dsc6.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/dsc6.jpg" class="fancybox" title="Our Delegates At The DSC 2k16"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>IEEE ASET's Stall</h4>
                         	</center>
                        </div>
						</div>
						<div class="col-md-6 mobile panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/dsc7.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/dsc7.jpg" class="fancybox" title="Karandeep And Pratik Interacting With The Guests"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Letting Guests Know About Us</h4>
                         	</center>
                        </div>
						</div>
						<div class="col-md-6 mobile panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/dsc8.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/dsc8.jpg" class="fancybox" title="IEEE-ASET At Display"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>IEEE-ASET At Display</h4>
                         	</center>
                        </div>
						</div>
						</div>
                   	
					<!-- Item Work-->
					<div class="col-md-6 ui panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/womenentern.jpg" alt=""/></center>                               
                                 <a href="../img/events/womenentern.jpg" class="fancybox" title="Women Enternship Workshop"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Women Enternship Workshop</h4>
                         	</center>
                        </div>
						<div class="col-md-6 ui panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/speaker.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/speaker.jpg" class="fancybox" title="Oshikka Lumb"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Speaker For The Workshop</h4>
                         	</center>
                        </div>
						</div>	
					<div class="col-md-6 ui panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/speaker2.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/speaker2.jpg" class="fancybox" title="Speaker Oshikka Lumb With Branch Councellor Mr.Sanjeev"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>A Token Of Gratitude Presented To The Speaker</h4>
                         	</center>
                        </div>
						</div>
						<div class="col-md-6 ui panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/speaker3.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/speaker3.jpg" class="fancybox" title="Interaction With the students"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Interaction With The Students</h4>
                         	</center>
                        </div>
						</div>
						<div class="col-md-6 ui panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/speaker4.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/speaker4.jpg" class="fancybox" title="Oshikka Lumb"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Interaction With The Students</h4>
                         	</center>
                        </div>
						</div>
						</div>
                   

				   <div class="col-md-6 programming panel panel-default">
                        <div class="item-work">
                            <div class="hover">
                                <center><img src="../img/events/codesense.jpg" alt="C Programming"/> </center>                             
                                 <a href="../img/events/codesense.jpg" class="fancybox" title="C Programming"><div class="overlay"></div></a>
								 <br>
                            </div>                                   
                            <center>
                                <h4>CODSENSE</h4>
                            </center>
                        </div>
                    
                    <!-- End Item Work-->
                                        
                    <!-- Item Work-->
                    <div class="col-md-6 programming  panel panel-default">
                         <div class="item-work">
                            <div class="hover" style="padding:5px;">
                                <center><img src="../img/events/Respawn.jpg" alt="C++"/></center>                              
                                 <a href="../img/events/Respawn.jpg" class="fancybox" title="Whatsapp C++ code not available"><div class="overlay"></div></a>      
                            </div>                                   
                            <center>
                                <h4>LAN GAMING</h4>
							</center>  
                        </div>
                    </div>  
                    <!-- End Item Work-->
                     
					<div class="col-md-6 programming  panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                                <center><img src="../img/events/admad.jpg" alt="JAVA"/></center>                               
                                 <a href="../img/events/admad.jpg" class="fancybox" title="JAVA"><div class="overlay"></div></a>
                            </div>							
                            <center>
                                <h4>ADMAD</h4>
                            </center>  
                        </div>
                    </div>  
                    
					<div class="col-md-6 programming  panel panel-default" height="60px">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/beg borrow steal.jpg" alt="PYTHON"/></center>                               
                                 <a href="../img/events/beg borrow steal.jpg" class="fancybox" title="Join IEEE ASET PYTHON whatsapp Group"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>BEG BORROW STEAL</h4>
							</center>
                        </div>
                    </div>  

					<div class="col-md-6 programming' panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/bit the pic.jpg" alt="HTML5"/></center>                               
                                 <a href="../img/events/bit the pic.jpg" class="fancybox" title="HTML5"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>BIT THE PIC</h4>
							</center>
                        </div>
                    </div>  

					
					<div class="col-md-6 programming panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/BuildTheBridge.jpg" alt="buildthebridge"/></center>                               
                                 <a href="../img/events/BuildTheBridge.jpg" class="fancybox" title="buildthebridge"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>BUILD THE BRIDGE</h4>
                             </center>
                        </div>
                    </div>

					<div class="col-md-6 programming panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/crazylaser .jpg" alt=""/></center>                               
                                 <a href="../img/events/crazylaser .jpg" class="fancybox" title="crazylaser"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>CRAZY LASER</h4>
							</center>
                        </div>
                    </div>
					
					<div class="col-md-6 programming panel panel-default">
                         <div class="item-work">
                            <div class="hover"  style="padding:3px;">
                               <center> <img src="../img/events/hydro.jpg" alt="hydroshoot"/></center>                               
                                 <a href="../img/events/hydro.jpg" class="fancybox" title="hydroshoot"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>HYDROSHOOT</h4>
							</center>
                        </div>
                    </div>
					
					<div class="col-md-6 programming panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/robo race.jpg" alt="roborace"/></center>                               
                                 <a href="../img/events/robo race.jpg" class="fancybox" title="roborace"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>ROBO-RACE</h4>
								</center>
                        </div>
                    </div>
					
					<div class="col-md-6 programming panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/robo soccor.jpg" alt="robosoccer"/></center>                               
                                 <a href="../img/events/robo soccor.jpg" class="fancybox" title="Robo Soccer"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>ROBO-SOCCER</h4>
							</center>
                        </div>
                    </div>
					
					<div class="col-md-6 programming panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/sherlockedNewnew.jpg" alt="sherlocked"/></center>                               
                                 <a href="../img/events/sherlockedNewnew.jpg" class="fancybox" title="Sherlocked"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>SHERLOCKED</h4>
							</center>
                        </div>
                    </div>
					
					<div class="col-md-6 programming panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/tech final.jpg" alt="TECH-QUIZ"/></center>                               
                                 <a href="../img/events/tech final.jpg" class="fancybox" title="TECH-QUIZ"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>TECH-QUIZ</h4>
                         	</center>
                        </div>
                    </div>
					<div class="col-md-6 programming panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/tasveern.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/tasveern.jpg" class="fancybox" title="Tasveern"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Tasveern</h4>
                         	</center>
                        </div>
                    </div>
					</div>
									
						
					<div class="col-md-6 mobile panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/ieee1.jpg" alt=""/></center>                               
                                 <a href="../img/events/ieee1.jpg" class="fancybox" title="Speaker:- Prof.Rajkumar Buyya"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>New InnoVations On Cloud Computing And Big Data</h4>
                         	</center>
                        </div>
						</div>
                    	
						
					<div class="col-md-6 mobile panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/ieee2.jpg" alt=""/></center>                               
                                 <a href="../img/events/ieee2.jpg" class="fancybox" title="workshop Hosted At DTU"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Open Source Software Development</h4>
                         	</center>
                        </div>
						</div>
                    
					<div class="col-md-6 mobile panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/ieee3.jpg" alt=""/></center>                               
                                 <a href="../img/events/ieee3.jpg" class="fancybox" title="Learn The Basics About App Development"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Android App Workshop</h4>
                         	</center>
                        </div>
						</div>
                    
					
						
						<div class="col-md-6 ui panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/gd.jpg" alt=""/></center>                               
                                 <a href="../img/events/gd.jpg" class="fancybox" title="Group Discussion"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Group Discussion</h4>
                         	</center>
                        </div>
						</div>
                    
					<div class="col-md-6 mobile panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/dsc1.jpg" alt=""/></center>                               
                                 <a href="../img/events/dsc1.jpg" class="fancybox" title="Workshop on Azure Organized By IEEE Delhi Section"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Worshop On AZURE</h4>
                         	</center>
                        </div>
						<div class="col-md-6 mobile panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/dsc2.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/dsc2.jpg" class="fancybox" title="Students From All over the Delhi Region"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Students Experience Learning New Concepts </h4>
                         	</center>
                        </div>
						</div>	
					<div class="col-md-6 mobile panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/dsc3.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/dsc3.jpg" class="fancybox" title="Glimpses Of The Workshop"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Trying Hands On Azure</h4>
                         	</center>
                        </div>
						</div>
						</div>
					<!--Equinox-->
					<div class="col-md-6 web panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/eqi1.jpg" alt=""/></center>                               
                                 <a href="../img/events/eqi1.jpg" class="fancybox" title="Delhi Section Congress"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Tech Quiz</h4>
                         	</center>
                        </div>
						</div>
						
	
					
					<div class="col-md-6 web panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/eqi2.jpg" alt=""/></center>                               
                                 <a href="../img/events/eqi2.jpg" class="fancybox" title="Workshop on Azure Organized By IEEE Delhi Section"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Worshop On Photoshop</h4>
                         	</center>
                        </div>
						<div class="col-md-6 web panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/p1.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/p1.jpg" class="fancybox" title="Students From All over the Delhi Region"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Students Experience Learning New Concepts </h4>
                         	</center>
                        </div>
						</div>	
					<div class="col-md-6 web panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/p2.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/p2.jpg" class="fancybox" title="Glimpses Of The Workshop"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Trying Hands On Azure</h4>
                         	</center>
                        </div>
						</div>
						</div>
					
	
	
					<div class="col-md-6 web panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/eqi3.jpg" alt=""/></center>                               
                                 <a href="../img/events/eqi3.jpg" class="fancybox" title="Workshop on Azure Organized By IEEE Delhi Section"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Worshop On C</h4>
                         	</center>
                        </div>
						<div class="col-md-6 web panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/ce.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/ce.jpg" class="fancybox" title="Students From All over the Delhi Region"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Students Experience Learning New Concepts </h4>
                         	</center>
                        </div>
						</div>	
					<div class="col-md-6 web panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/ce2.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/ce2.jpg" class="fancybox" title="Glimpses Of The Workshop"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Trying Hands On Azure</h4>
                         	</center>
                        </div>
						</div>
						</div>
					
	
	
					
					<div class="col-md-6 web panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/eqi4.jpg" alt=""/></center>                               
                                 <a href="../img/events/eqi4.jpg" class="fancybox" title="Group Discuusion On The Difference Over Gender In Society"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Toastmaster</h4>
                         	</center>
                        </div>
						</div>
						
						
						
					<div class="col-md-6 web panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/eqi5.jpg" alt=""/></center>                               
                                 <a href="../img/events/eqi5.jpg" class="fancybox" title="Workshop on Azure Organized By IEEE Delhi Section"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Error Hunt</h4>
                         	</center>
                        </div>
						<div class="col-md-6 web panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/e.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/e.jpg" class="fancybox" title="Glimpses Of The Workshop"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Students trying To Break The Code </h4>
                         	</center>
                        </div>
						</div>	
					<div class="col-md-6 web panel panel-default">
                         <div class="item-work">
                            <div class="hover">
                               <center> <img src="../img/events/e2.jpg" alt="tasveern"/></center>                               
                                 <a href="../img/events/e2.jpg" class="fancybox" title="Glimpses Of The Workshop"><div class="overlay"></div></a>
                            </div>                                   
                            <center>
                                <h4>Could The eroor Be Found</h4>
                         	</center>
                        </div>
						</div>
						</div>
	
	
	
	
	
                </div>   
                <!-- End Items Works filters-->       
            </div>
            <!-- End Container-->
        </section>
      
   

      
    </div>
    <!-- End layout-->

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

    </div>
    <!-- End layout-->

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