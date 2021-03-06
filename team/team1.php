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
    <title>TEAM | Arunoday School</title> 
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

                    if(!empty($loginid)) 
                        {
                            echo '<li> <a href="../users/profile.php" target="_blank">Howdy! &nbsp'.selectuserinfo($loginid)["name"].'</a></li>';
                        }
                    ?>
                </ul>
            </div>            
        </section>
        
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
        <section class="title-section">
            <div class="container">

                <!-- Title - Search--> 
                <div class="row title">
                    <!-- Title --> 
                    <div class="col-md-9">
                        <h1>EXECOM
                            <span class="subtitle-section">
                                IEEE ASET
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


         <!-- Works -->
        <section class="paddings">
            <div class="container">

                <!-- Nav Filters -->
                <div class="portfolioFilter">
                    <a href="#" data-filter="*" class="current">Show All</a>
                    <a href="#core" data-filter=".core">Core</a>
                    <a href="#technical" data-filter=".technical">Technical</a>
                    <a href="#wie" data-filter=".wie">WIE</a>
                    <a href="#website" data-filter=".website">Website</a>
                    <a href="#events" data-filter=".events">Events</a>
                    <a href="#publication" data-filter=".publication">Publication</a>
                </div>
                <!-- End Nav Filters -->
	
                <!-- Items Works filters-->
                <div class="works portfolioContainer">
                    <?php
					$name=array('Pratik Rana','Gandharv Hira','Chander Mohan Singh Negi','Abhinav Kapoor','Nimisha Bana','Sonali SOna','Divyansh Gab');
					?>
					
					
					<!-- Item Work-->
                    <div class="col-md-3 core">
                         <div class="item-work">
                            <div class="hover">
                                <img src="../img/team/ashish.jpg" alt="Ashish Krishan"/>                               
                                 <a href="../img/team/ashish.jpg" class="fancybox" title="Ashish Krishan"><div class="overlay"></div></a>
                            </div>                                   
                            <div class="info-work">
                                <h4>Ashish Krishan</h4>
                                <p>Chairperson<br>CSE-3rd Year</p>
                                <div class="icons-work">
									<a href="https://www.facebook.com/ashishkrishan1995?fref=ts" target="_blank">
									<i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
									</a>
									
									<a href="mailto:ashishkrishan19@gmail.com" target="_blank">
									<i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
									</a>
									
									<i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-7503346746"></i>
									
									<a href="#">
									<i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
									</a>
								</div>
							</div>  
                        </div>
                    </div>  
                    <!-- End Item Work-->
                                        
                    <!-- Item Work-->
                      <div class="col-md-3 core">
                         <div class="item-work">
                            <div class="hover">
                                <img src="../img/team/shivam.jpg" alt="Shivam Sharma"/>                               
                                 <a href="../img/team/shivam.jpg" class="fancybox" title="Shivam Sharma"><div class="overlay"></div></a>
                            </div>                                   
                            <div class="info-work">
							   <h4>Shivam Sharma</h4>
							   <p>Vice-Chairperson<br>CSE-3rd Year</p>
							   <div class="icons-work">
							   
								   <a href="https://www.facebook.com/profile.php?id=1784675409&fref=ts" target="_blank">
								   <i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
								   </a>
								   
								   <a href="mailto:sharma.shivam7771@gmail.com" target="_blank">
								   <i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
								   </a>
								   
								   <i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-8750297770"></i>
								   
								   <a href="#">
								   <i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
								   </a>
							   </div>
						   </div>
						</div>
                    </div>  
                  <!-- End Item Work-->
                    
                    <!-- Item Work-->
                    <div class="col-md-3 core">
                        <div class="item-work">
                            <div class="hover">
                                <img src="../img/team/amit.jpg" alt="Amit Kumar Mishra"/>                               
                                 <a href="../img/team/amit.jpg" class="fancybox" title="Amit Kumar Mishra"><div class="overlay"></div></a>
                            </div>                                   
							<div class="info-work">
								<h4>Amit Kumar Mishra</h4>
								<p>Treasurer<br>CSE-3rd Year</p>
								<div class="icons-work">
									<a href="https://www.facebook.com/akmdeveloper?fref=ts" target="_blank">
									<i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
									</a>
									
									<a href="mailto:akm.me241@gmail.com" target="_blank">
									<i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
									</a>
									
									<i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-9643627896"></i>
									
									<a href="#">
									<i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
									</a>
								</div>
							</div>
						</div>
                    </div>
                    <!-- End Item Work-->
                                        
                <!-- Item Work-->
                    <div class="col-md-3 core">
                        <div class="item-work">
                            <div class="hover">
                                <img src="../img/team/nimisha.jpg" alt="Nimisha Bana"/>                               
                                 <a href="../img/team/nimisha.jpg" class="fancybox" title="Nimisha Bana"><div class="overlay"></div></a>
                            </div>                                   
							<div class="info-work">
								<h4>Nimisha Bana</h4>
								<p>Secretary<br>ICE-2nd Year</p>
								<div class="icons-work">
									<a href="https://www.facebook.com/nimisha211296?fref=ts" target="_blank">
									<i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
									</a>
									
									<a href="mailto:bana.nimisha@gmail.com" target="_blank">
									<i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
									</a>
									
									<i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-9953668191"></i>
									
									<a href="#">
									<i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
									</a>
								</div>
							</div>
						</div>
                    </div>
                    <!-- End Item Work-->
                   
                    
                    <!-- Item Work-->
                    <div class="col-md-3 technical">
						<div class="item-work">
							<div class="hover">
								<img src="../img/team/sumil.jpg" alt="Sumil Mehta">
								<a href="../img/team/sumil.jpg" class="fancybox" title="Sumil Mehta"><div class="overlay"></div></a>
							</div>
							<div class="info-work">
								<h4>Sumil Mehta</h4>
								<p>Technical Director<br>CSE-3rd Year</p>
								<div class="icons-work"><a href="https://www.facebook.com/sumilmehta?fref=ts" target="_blank">
									<i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
									</a>
														
									<a href="mailto:sumilmehta007@gmail.com" target="_blank">
									<i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
									</a>
									
									<i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-8010080189"></i>
									
									<a href="#">
									<i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
                    <!-- End Item Work-->
                                                           
                    <!-- Item Work-->
					<div class="col-md-3 wie">
						<div class="item-work">
							<div class="hover">
							   <img src="../img/team/apoorva.jpg" alt="Apoorva Jain">
							   <a href="../img/team/apoorva.jpg" class="fancybox" title="Apoorva Jain"><div class="overlay"></div></a>
						   </div>
						   <div class="info-work"><h4>Apoorva Jain</h4><p>WIE Chairperson<br>CSE-3rd Year</p>
							   <div class="icons-work"><a href="https://www.facebook.com/apoorva.jain.92123?ref=br_rs_WyJrZXl3b3Jkc19zZWFyY2giXQ%3D%3D" target="_blank">
								   <i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
								   </a>
								   
								   <a href="mailto:apoorva.jain0402@gmail.com" target="_blank">
								   <i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
								   </a>
								   
								   <i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-9013387840"></i>
								   
								   <a href="#">
								   <i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
								   </a>
							   </div>
						   </div>
					   </div> 
					</div>
				   <!-- End Item Work-->
                    
                    <!-- Item Work-->
					<div class="col-md-3 wie">   
					   <div class="item-work">
						   <div class="hover">
							   <img src="../img/team/ritika.jpg" alt="Ritik Sharma">
							   <a href="../img/team/ritika.jpg" class="fancybox" title="Ritika Sharma"><div class="overlay"></div></a>
						   </div>
						   <div class="info-work">
							   <h4>Ritika Sharma</h4>
							   <p>WIE Vice-Chairperson <br>CSE-3rd Year</p>
							   <div class="icons-work">
								   <a href="https://www.facebook.com/ritika.sharma.754" target="_blank">
								   <i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
								   </a>
								   
								   <a href="mailto:sharma.ritika147gmail.com" target="_blank">
								   <i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
								   </a>
								   
								   <i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-8447140115"></i>
								   
								   <a href="#">
								   <i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
								   </a>
							   </div>
						   </div>
					   </div> 
					</div>
				   <!-- End Item Work-->
                                        
                    
                
				 
				 <!-- Item Work-->
                    <div class="col-md-3 events">
                         <div class="item-work">
                            <div class="hover">
                                <img src="../img/team/Madhur.jpg" alt="Madhur Mittal"/>                               
                                 <a href="../img/team/Madhur.jpg" class="fancybox" title="Madhur Mittal"><div class="overlay"></div></a>
                            </div>                                   
                            <div class="info-work">
                                <h4>Madhur Mittal</h4>
                                <p>Event Manager<br>CSE-3rd Year</p>
                                <div class="icons-work">
									<a href="https://www.facebook.com/madhur.mittal.39?fref=ts" target="_blank">
									<i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
									</a>
									
									<a href="mailto:madhurmittal1807@gmail.com" target="_blank">
									<i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
									</a>
									
									<i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-9971437388"></i>
									
									<a href="#">
									<i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
									</a>
								</div>
							</div>  
                        </div>
                    </div>  
                    <!-- End Item Work-->
					
					
					
					<!-- Item Work-->
                    <div class="col-md-3 publication">
                         <div class="item-work">
                            <div class="hover">
                                <img src="../img/team/Rahulm.jpg" alt="Rahul Malhotra"/>                               
                                 <a href="../img/team/Rahulm.jpg" class="fancybox" title="Rahul Malhotra"><div class="overlay"></div></a>
                            </div>                                   
                            <div class="info-work">
                                <h4>Rahul Malhotra</h4>
                                <p>Publications Director<br>IT-3rd Year</p>
                                <div class="icons-work">
									<a href="https://www.facebook.com/profile.php?id=100010302061879&fref=ts" target="_blank">
									<i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
									</a>
									
									<a href="mailto:rahul.nevile07@gmail.com " target="_blank">
									<i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
									</a>
									
									<i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-9560074834"></i>
									
									<a href="#">
									<i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
									</a>
								</div>
							</div>  
                        </div>
                    </div>  
                    <!-- End Item Work-->
					
					
					<!-- Item Work-->
                    <div class="col-md-3 website">
                         <div class="item-work">
                            <div class="hover">
                                <img src="../img/team/Pratik.jpg" alt="Pratik Rana"/>                               
                                 <a href="../img/team/Pratik.jpg" class="fancybox" title="Pratik Rana"><div class="overlay"></div></a>
                            </div>                                   
                            <div class="info-work">
                                <h4>Pratik Rana</h4>
                                <p>Website Coordinator<br>CSE-2nd Year</p>
                                <div class="icons-work">
									<a href="https://www.facebook.com/pratik.rana.790?fref=ts" target="_blank">
									<i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
									</a>
									
									<a href="mailto:pratik.capricon23@gmail.com " target="_blank">
									<i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
									</a>
									
									<i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-9560703539"></i>
									
									<a href="#">
									<i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
									</a>
								</div>
							</div>  
                        </div>
                    </div>  
                    <!-- End Item Work-->
					
					<!-- Item Work-->
                    <div class="col-md-3 website">
                         <div class="item-work">
                            <div class="hover">
                                <img src="../img/team/ginny.jpg" alt="Gandaharv Hira"/>                               
                                 <a href="../img/team/ginny.jpg" class="fancybox" title="Gandaharv Hira"><div class="overlay"></div></a>
                            </div>                                   
                            <div class="info-work">
                                <h4>Gandaharv Hira</h4>
                                <p>Website Coordinator<br>CSE-2nd Year</p>
                                <div class="icons-work">
									<a href="https://www.facebook.com/gandharav.hira?fref=ts" target="_blank">
									<i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
									</a>
									
									<a href="mailto:gandharav.pal87@gmail.com " target="_blank">
									<i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
									</a>
									
									<i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-8375010251"></i>
									
									<a href="#">
									<i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
									</a>
								</div>
							</div>  
                        </div>
                    </div>  
                    <!-- End Item Work-->
					
					<!-- Item Work-->
                    <div class="col-md-3 publication">
                         <div class="item-work">
                            <div class="hover">
                                <img src="../img/team/rahult.jpg" alt="Rahul Tejpal"/>                               
                                 <a href="../img/team/rahult.jpg" class="fancybox" title="Rahul Tejpal"><div class="overlay"></div></a>
                            </div>                                   
                            <div class="info-work">
                                <h4>Rahul Tejpal</h4>
                                <p>Publications Coordinator<br>IT-2nd Year</p>
                                <div class="icons-work">
									<a href="https://www.facebook.com/assshooterguy?fref=ts" target="_blank">
									<i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
									</a>
									
									<a href="mailto:totaakr@gmail.com " target="_blank">
									<i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
									</a>
									
									<i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-8800673101"></i>
									
									<a href="#">
									<i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
									</a>
								</div>
							</div>  
                        </div>
                    </div>  
                    <!-- End Item Work-->
					
					<!-- Item Work-->
                    <div class="col-md-3 technical">
                         <div class="item-work">
                            <div class="hover">
                                <img src="../img/team/karan.jpg" alt="Karandeep Singh"/>                               
                                 <a href="../img/team/karan.jpg" class="fancybox" title="Karandeep Singh"><div class="overlay"></div></a>
                            </div>                                   
                            <div class="info-work">
                                <h4>Karandeep Singh</h4>
                                <p>Technical Coordinator<br>CSE-2nd Year</p>
                                <div class="icons-work">
									<a href="https://www.facebook.com/karan.717?fref=ts" target="_blank">
									<i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
									</a>
									
									<a href="mailto:karanredrock@gmail.com " target="_blank">
									<i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
									</a>
									
									<i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-9711745660"></i>
									
									<a href="#">
									<i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
									</a>
								</div>
							</div>  
                        </div>
                    </div>  
					
					
					<!-- Item Work-->
                    <div class="col-md-3 events">
                         <div class="item-work">
                            <div class="hover">
                                <img src="../img/team/yogesh.jpg" alt="Yogesh Sachdeva"/>                               
                                 <a href="../img/team/yogesh.jpg" class="fancybox" title="Yogesh Sachdeva"><div class="overlay"></div></a>
                            </div>                                   
                            <div class="info-work">
                                <h4>Yogesh Sachdeva</h4>
                                <p>Event Coordinator<br>IT-2nd Year</p>
                                <div class="icons-work">
									<a href="https://www.facebook.com/yogesh.sachdeva.16?fref=ts" target="_blank">
									<i class="fa fa-facebook-square" data-toggle="tooltip" title="" data-original-title="Facebook Profile"></i>
									</a>
									
									<a href="mailto:yogeshsachdeva223@gmail.com " target="_blank">
									<i class="fa fa-envelope" data-toggle="tooltip" title="" data-original-title="Email Now"></i>
									</a>
									
									<i class="fa fa-phone-square" data-toggle="tooltip" title="" data-original-title="Mobile: +91-9654999827"></i>
									
									<a href="#">
									<i class="fa fa-user" data-toggle="tooltip" title="" data-original-title="Visit Profile"></i>
									</a>
								</div>
							</div>  
                        </div>
                    </div>  
					
					
                    
				 
                </div>   
                <!-- End Items Works filters-->       
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