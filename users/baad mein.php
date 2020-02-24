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
                    <li>
                    <i>
                    <?php 

                    if(!empty($loginid)) 
                        {
                            echo 'Howdy! &nbsp'.selectuserinfo($loginid)["name"];
                        }
                    ?>
                        </i>    </li>
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
        <section class="title-section" style="background: #333333;">
            
  <head>
    <title>IEEE|ASET</title>
    <meta name="description" content="" />
    <meta name="author" content="templatemo">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />
    <link href="css/templatemo_style.css" rel="stylesheet"> 
        
    <script src="js/jquery-1.10.2.min.js"></script> 
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/templatemo_custom.js"></script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>  
     <script>
    function showhide()
    {
        var div = document.getElementById("newpost");
        if (div.style.display !== "none") 
        {
            div.style.display = "none";
        }
        else 
        {
            div.style.display = "block";
        }
    }
  </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
        <!-- logo start -->
    <div class="logocontainer" >
        <div class="row">
            <h1><a href="#">HOWDY! anyone</a></h1>
            <div class="clear"></div>
            <div class="templatemo_smalltitle">IEEE ASET</div>
       </div>
    </div>
    <!-- logo end -->    
   <div id="menu-container" class="main_menu">
   <!-- homepage start -->
    <div class="content homepage" id="menu-1">
    <div class="container">
            <div class="col-md-3 col-sm-6 templatemo_leftgap">
                <div class="templatemo_mainservice templatemo_botgap">
                    <div class="templatemo_link"><a class="show-2 templatemo_page2" href="#">MY PROFILE</a></div>
                    
                </div>
                <div class="templatemo_mainimg"><img src="images/templatemo_home1.jpg" alt="home img 01"></div>
            </div>
            <div class="col-md-3 col-sm-6 templatemo_leftgap">
                <div class="templatemo_mainimg templatemo_botgap templatemo_portfotopgap"><img src="images/templatemo_home2.jpg" alt="home img 02"></div>
                <div class="templatemo_mainportfolio">
                      <div class="templatemo_link"><a class="show-3 templatemo_page3" href="#">PORTFOLIO</a></div>
                                       
                </div>
            </div>
            <div class="col-md-3 col-sm-6 templatemo_leftgap">
                <div class="templatemo_maintesti templatemo_botgap templatemo_topgap">
                    <div class="templatemo_link"><a class="show-4 templatemo_page4" href="#">POST ON BLOG</a></div>
                </div>
                <div class="templatemo_mainimg"><img src="images/templatemo_home3.jpg" alt="home img 03"></div>
            </div>
            <div class="col-md-3 col-sm-6 templatemo_leftgap">
                <div class="templatemo_mainimg templatemo_botgap templatemo_topgap">
                   <img src="images/templatemo_home4.jpg" alt="home img 04">
                </div>
                <div class="templatemo_mainabout templatemo_botgap">
                    <div class="templatemo_link"><a class="show-5 templatemo_page5" href="#">UPDATE ME</a></div>
                </div>
                <div class="templatemo_maincontact">
                    <div class="templatemo_link"><a class="show-6 templatemo_page6" href="#">SIG's</a></div>
                </div>
            </div>
    </div>
    
   </div>
    <!-- homepage end -->
    <!--services start -->
   <div class="content services" id="menu-2">
        <div class="container" >
            <div class="row templatemo_bordergapborder">
                <div class="col-md-3 col-sm-12 templatemo_leftgap">
                    <div class="templatemo_mainimg templatemo_botgap"><img src="images/templatemo_service1.jpg" alt="service image"></div>
                    <div class="templatemo_mainservice templatemo_botgap">
                    <div class="templatemo_linkservice"><a class="show-1 templatemo_homeservice" href="#">Go Back</a></div>
                </div>
                </div>
                
               <div class="col-md-9 col-sm-12 "style="background-color:white">
                    <div >
                    <div class="templatemo_frame" style="width:100%;">
                    <h2>That's ME</h2>
                    <div ></div>
					
					
					<?php 
					
					
					
					
					
					
					
					
					
					
					?>
                   <form action="form.php" method="POST" class="form-inline">
 
    <table class="table table-hovers">
 
    <!----- First Name ---------------------------------------------------------->
    <tr>
	
	
    <td>NAME</td>
    <td><div class="col-md-10"> <input type="text" name="Name" class="form-control" placeholder="Name " maxlength="30" required/></div>
        
    </td>
    </tr>
 
    <!----- Branch ---------------------------------------------------------->
    <tr>
    <td>Branch and Year
    </td>
    
         <td>
 <div class="col-md-4"> 
    <select name="branch" class="form-control" required> 
    <option value="CSE">CSE</option>
    <option value="IT">IT</option>
    <option value="MAE">MAE</option>
    <option value="ECE">ECE</option>
    <option value="ICE">ICE</option>
    </select>
    </div>


    <div class="col-md-4"> 
    <select name="branchyear" class="form-control" required> 
    <option value="First">First</option>
    <option value="Second">Second</option>
    <option value="Third">Third</option>
    <option value="Fourth">Fourth</option>
    
    </select>


</div>

    </td>
    </tr>
 
 
 <!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<div class="col-md-3">
<select name="dob_date" id="Birthday_Day" class="form-control" required>
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>

</select>
</div> 
<div class="col-md-3"><select id="dob_Month" name="Birthday_Month" class="form-control" required>
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 </div>
 <div class="col-md-3">
<select name="dob_Year" id="Birthday_Year" class="form-control" required>
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select></div>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><div class="col-md-10"><input type="email" name="email" maxlength="100" placeholder="Email " class="form-control" required /></div></td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS</td>
<td><div class="col-md-10"><textarea name="Address" rows="4" cols="30" class="form-control" placeholder="Address" style="resize: none" required></textarea></div></td>
</tr>
 
 <!----- Mobile Number ---------------------------------------------------------->
<tr colspan="2">
<td>MOBILE NUMBER</td>
<td>
 <div class="col-md-10"><input type="text" name="Mobile_Number" class="form-control" placeholder="Mobile No (10 digit number)" maxlength="10" required />
 </div>

</td>
</tr>
 
<!--- Gender --------------------------------------------------------- -->
<tr>
<td>GENDER</td>
<td><div class="col-md-10" required>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</div></td>
</tr>
 

 
<!----- Graduation Date ---------------------------------------------------------->
<tr>
<td>Graduation </td>
<td>

 <div class="col-md-4"> 
<select id="Graduation Date" name="grad_month" class="form-control" required>
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 </div>
 <div class="col-md-4"> 
<select name="Year" id="grad_date" class="form-control" required>
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</div>
</td>
</tr>
 

 
<!----- Skills -------------------------------------------------------- -->
<tr>
<td>Skills</td>
<td><div class="col-md-10"><textarea name="Skills" rows="4" class="form-control" placeholder="Something you're good at" style="resize: none"></textarea></div></td>
</tr>
 
<!----- Interest-------------------------------------------------------- -->
<tr>
<td>Interest</td>
<td><div class="col-md-10"><textarea name="Interest" rows="4" class="form-control" placeholder="Something you like to do or would like to learn" style="resize:none"></textarea></div></td>
</tr>


 

<!----- Submit and Reset --------------------------------------------  -->
<tr>
<td colspan="2" align="center">
<div class="col-md-10"> <input type="submit" class="btn  btn-success" value="Submit">
</div>
</td>
</tr>
</table>
</div>
<div class="col-sm-3">
</div>
 
</form>
                    </div>
                  </div>
              </div>
			  
        </div>
     </div>
        
    <!-- services end -->   

    <!-- portfilio start -->
    <div class="portfolio" id="menu-3" style="display: none;" >
        <div class="container">
            <div class="col-md-3 col-sm-6 templatemo_leftgap">
              <div class="templatemo_insideportfolio templatemo_botgap">
                  <div class="templatemo_portfoliotext">
                    <h2>Portfolio</h2>
                    <div class="clear"></div>
                    Suspendisse condimentum metus neque, at adipiscing metus venenatis eu. Mauris sit amet erat laoreet, ullamcorper justo sit amet, vehicula purus. Nulla sagittis pulvinar erat, sit amet venenatis lacus fringilla vitae.</div>
              </div>
                <div class="templatemo_portfolioback">
                    <div class="templatemo_link"><a class="show-1 templatemo_homeportfolio" href="#">Go Back</a></div>
                </div>
                
            </div>
            <div class="col-md-3 col-sm-6 templatemo_leftgap">
                        <div class="templatemo_botgap templatemo_portfotopgap gallery-item">
                            <img src="images/portfolio/templatemo_portfolio01.jpg" alt="gallery 1">
                            <div class="overlay">
                                <a href="images/portfolio/templatemo_portfolio01.jpg" data-rel="lightbox" class="fa fa-arrows-alt"></a>
                            </div>
                        </div>              
                <div class="templatemo_botgap templatemo_topgap gallery-item">
                   <img src="images/portfolio/templatemo_portfolio02.jpg" alt="gallery 2">
                   <div class="overlay">
                                <a href="images/portfolio/templatemo_portfolio02.jpg" data-rel="lightbox" class="fa fa-arrows-alt"></a>
                            </div>
                </div>
                <div class="templatemo_botgap templatemo_topgap gallery-item">
                   <img src="images/portfolio/templatemo_portfolio03.jpg" alt="gallery 3">
                   <div class="overlay">
                                <a href="images/portfolio/templatemo_portfolio03.jpg" data-rel="lightbox" class="fa fa-arrows-alt"></a>
                            </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 templatemo_leftgap">
                <div class="templatemo_botgap templatemo_topgap gallery-item">
                     <img src="images/portfolio/templatemo_portfolio04.jpg" alt="gallery 4">
                     <div class="overlay">
                                <a href="images/portfolio/templatemo_portfolio04.jpg" data-rel="lightbox" class="fa fa-arrows-alt"></a>
                            </div>
                </div>
                <div class="templatemo_botgap templatemo_topgap gallery-item">
                   <img src="images/portfolio/templatemo_portfolio05.jpg" alt="gallery 5">
                   <div class="overlay">
                                <a href="images/portfolio/templatemo_portfolio05.jpg" data-rel="lightbox" class="fa fa-arrows-alt"></a>
                            </div>
                </div>
                <div class="templatemo_botgap templatemo_topgap gallery-item">
                   <img src="images/portfolio/templatemo_portfolio06.jpg" alt="gallery 6">
                   <div class="overlay">
                                <a href="images/portfolio/templatemo_portfolio06.jpg" data-rel="lightbox" class="fa fa-arrows-alt"></a>
                            </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 templatemo_leftgap">
                <div class="templatemo_botgap templatemo_topgap gallery-item">
                     <img src="images/portfolio/templatemo_portfolio07.jpg" alt="gallery 7">
                     <div class="overlay">
                                <a href="images/portfolio/templatemo_portfolio07.jpg" data-rel="lightbox" class="fa fa-arrows-alt"></a>
                            </div>
                </div>
                <div class="templatemo_botgap templatemo_topgap gallery-item">
                   <img src="images/portfolio/templatemo_portfolio08.jpg" alt="gallery 8">
                   <div class="overlay">
                                <a href="images/portfolio/templatemo_portfolio08.jpg" data-rel="lightbox" class="fa fa-arrows-alt"></a>
                            </div>
                </div>
                <div class="templatemo_botgap templatemo_topgap gallery-item">
                   <img src="images/portfolio/templatemo_portfolio09.jpg" alt="gallery 9">
                   <div class="overlay">
                                <a href="images/portfolio/templatemo_portfolio09.jpg" data-rel="lightbox" class="fa fa-arrows-alt"></a>
                            </div>
                </div>
            </div>
    </div>
    </div>
     <!-- portfolio end -->
    <!-- testimonial start -->
    <div class="content testimonial" id="menu-4">
                    <div class="container">
            <div class="row templatemo_bordergapborder">
            <!--vertical Tabs-->
            <div id="cmt">
            <div class="col-md-3 col-sm-12 templatemo_leftgap_about">
            <ul class="resp-tabs-list templatemo_testitab">
                <li>Testimonials</li>
                <li>Special Awards</li>
                <li>Recognitions</li>
            </ul>
            <div class="templatemo_aboutlinkwrapper">
            <div class="templatemo_link"><a class="show-1 templatemo_hometestimonial" href="index.html">Go Back</a></div>
            </div>
            </div>
            <div class="resp-tabs-container templatemo_testicontainer">
                <div>
                    <div class="templatemo_col50 templatemo_rightgap_about">
                        <div class="templatemo_graybg templatemo_botgap">
                         <div class="templatemo_frame">
                        <h2>Testimonials</h2>
                        <p>Aliquam accumsan, mauris ut hendrerit vehicula, elit massa facilisis nulla, ut auctor risus massa non elit. Vestibulum commodo, mauris quis accumsan pretium, mauris erat porttitor nibh, a eleifend ante elit eu velit. Sed molestie fringilla tellus ut venenatis. Nam ut eros augue. Nullam scelerisque enim eget ornare rutrum. Proin dignissim eget arcu a posuere. Sed ut lacinia enim, et adipiscing purus.<br><br>
                        Etiam vitae elit euismod dui <a href="#">elementum</a> dapibus sed eleifend purus. Maecenas eleifend arcu arcu, vitae interdum erat sollicitudin vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                        </div>
                    </div>
                    <div class="templatemo_col50 templatemo_leftgap templatemo_botgap"><img src="images/templatemo_testimonial1.jpg" alt="testimonial image"></div>
                </div>
                <div>
                    <div class="templatemo_col50 templatemo_rightgap_about">
                        <div class="templatemo_graybg templatemo_botgap">
                        <div class="templatemo_frame">
                        <h2>Special Awards</h2>
                        <p>Suspendisse eu nisl sit amet purus varius pellentesque quis id mi. Ut ac sodales massa. Suspendisse placerat malesuada ligula, et bibendum justo convallis in. Duis imperdiet nibh non sodales porttitor. Donec <a href="#">pellentesque</a> mollis ante, a bibendum turpis congue at. Maecenas ligula augue, pellentesque ac porttitor eu, facilisis at nisl.<br><br>
                        Duis nulla leo, posuere sit amet nibh nec, lacinia ullamcorper turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam aliquam facilisis metus, eget semper nisi mollis blandit. Vestibulum metus neque, vestibulum nec tempus vitae, viverra sit amet odio.</p>
                        </div>
                        </div>
                    </div>
                    <div class="templatemo_col50 templatemo_leftgap templatemo_botgap"><img src="images/templatemo_testimonial2.jpg" alt="testimonial image"></div>
                </div>
                <div>
                    <div class="templatemo_col50 templatemo_rightgap_about">
                        <div class="templatemo_graybg templatemo_botgap">
                        <div class="templatemo_frame">
                        <h2>Recognitions</h2>
                        <p>Quisque convallis neque eu nunc dictum, eget vehicula ipsum rhoncus. Fusce a egestas mauris, dapibus fermentum ligula. Donec ac scelerisque sem. Morbi mollis augue non nunc tincidunt, sit amet volutpat nisi commodo. <a href="#">Suspendisse</a> justo nisl, fringilla vehicula augue ut, mattis mattis lacus.<br><br>
                        Maecenas at urna non dolor sagittis suscipit. Nulla lacinia orci eu felis cursus ultricies. Vestibulum non leo feugiat, posuere mi sit amet, tristique nulla. Suspendisse dui est, sagittis ac pulvinar vel, venenatis ac nisi. Maecenas ac purus viverra, tincidunt dui at, rutrum lorem.</p>
                        </div>
                        </div>
                    </div>
                    <div class="templatemo_col50 templatemo_leftgap templatemo_botgap"><img src="images/templatemo_testimonial3.jpg" alt="testimonial image"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 templatemo_leftgap templatemo_aboutlinkwrapper1">
                    <div class="templatemo_aboutback templatemo_botgap">
                    <div class="templatemo_link"><a class="show-1 templatemo_hometestimonial" href="#">Go Back</a></div>
                </div>
                </div>
    </div>
            </div>

    </div>
     <!-- testimonial end -->
     <!-- about start -->
    <div class="content about" id="menu-5">
        <div class="container">
            <div class="row templatemo_bordergapborder">
            <!--vertical Tabs-->
            <div id="ab">
            <div class="col-md-3 col-sm-12 templatemo_leftgap_about">
            <ul class="resp-tabs-list templatemo_tab">
                <li>Our Team</li>
                <li>Our History</li>
                <li>Our Vision</li>
            </ul>
            <div class="templatemo_aboutlinkwrapper">
            <div class="templatemo_link"><a class="show-1 templatemo_homeabout" href="#">Go Back</a></div>
            </div>
            </div>
            <div class="resp-tabs-container templatemo_aboutcontainer">
                <div>
                    <div class="templatemo_col50 templatemo_rightgap_about">
                        <div class="templatemo_graybg templatemo_botgap">
                         <div class="templatemo_frame">
                        <h2>Our Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.<br><br>
                        Quisque vitae malesuada risus. Quisque at consequat erat. Cras sed fermentum ipsum. Maecenas aliquet commodo dui vel dapibus. Cras quis mi non nisl posuere vestibulum vitae id ipsum. Pellentesque mollis sem non facilisis aliquam. Curabitur eu fermentum odio.</p>
                        </div>
                        </div>
                    </div>
                    <div class="templatemo_col50 templatemo_leftgap templatemo_botgap"><img src="images/templatemo_about.jpg" alt="about image"></div>
                </div>
                <div>
                    <div class="templatemo_col50 templatemo_rightgap_about">
                        <div class="templatemo_graybg templatemo_botgap">
                        <div class="templatemo_frame">
                        <h2>Our History</h2>
                        <p>Pellentesque id ullamcorper justo. Vestibulum imperdiet justo vitae lacus pulvinar, ut tempus lacus porta. Nulla eget tellus elit. Proin ipsum mi, dictum nec massa quis, malesuada feugiat nisl. Nam tempus at eros ut volutpat.<br><br> 
                        Feel free to download our templates for your websites. Aenean consectetur, libero non dapibus posuere, odio quam fringilla diam, et rutrum felis tortor gravida massa. Aenean tincidunt dolor id augue consectetur, eget suscipit lectus facilisis. Integer eleifend augue non euismod viverra.</p>
                        </div>
                        </div>
                    </div>
                    <div class="templatemo_col50 templatemo_leftgap templatemo_botgap"><img src="images/templatemo_team.jpg" alt="history image"></div>
                </div>
                <div>
                    <div class="templatemo_col50 templatemo_rightgap_about">
                        <div class="templatemo_graybg templatemo_botgap">
                        <div class="templatemo_frame">
                        <h2>Our Vision</h2>
                        <p>We provide <a href="#">mobile website templates</a> for everyone. Suspendisse eget iaculis velit, at ullamcorper justo. Nulla mi elit, mollis sit amet eros eget, tempus accumsan diam. Nunc blandit nisl eu massa ultrices, eget adipiscing purus posuere. Maecenas sapien libero, tempor eu pulvinar in, blandit vitae sem.<br><br>
                        Vestibulum pellentesque turpis orci, sit amet varius velit aliquet id. In fringilla nisi id lorem scelerisque, vitae elementum quam porta. Vestibulum bibendum egestas velit, id mollis lacus euismod nec. Duis fringilla dui sit amet felis eleifend auctor. Duis rhoncus, nulla eget egestas consequat, justo purus elementum ipsum, ut blandit quam libero sit amet metus.</p>
                        </div>
                        </div>
                    </div>
                    <div class="templatemo_col50 templatemo_leftgap templatemo_botgap"><img src="images/templatemo_vision.jpg" alt="vision image"></div>
                </div>
            </div>
        </div>
            <div class="col-sm-12 templatemo_leftgap templatemo_aboutlinkwrapper1">
                    <div class="templatemo_aboutback templatemo_botgap">
                    <div class="templatemo_link"><a class="show-1 templatemo_homeabout" href="#">Go Back</a></div>
                </div>
                </div>
    </div>
            </div>
    </div>
    <!-- about end -->
    <!-- contact start -->
    <div class="content contact" id="menu-6">
        <div class="container">
            <div class="row templatemo_bordergapborder">
                <div class="col-md-3 col-sm-12 templatemo_leftgap">
                    <div class="templatemo_mainimg templatemo_botgap"><img src="images/templatemo_contact1.jpg" alt="contact image"></div>
                    <div class="templatemo_maincontact templatemo_botgap">
                    <div class="templatemo_linkcontact"><a class="show-1 templatemo_homecontact" href="#">Go Back</a></div>
                </div>
                </div>
                
                <div class="templatemo_col37 col-sm-12 templatemo_leftgap">
                    <div class="templatemo_graybg templatemo_paddinggap">
                    <h2>Contact Us</h2>
                    <div class="clear"></div>
                        <form role="form">
                          <div class="templatemo_form">
                            <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name" maxlength="40">
                          </div>
                          <div class="templatemo_form">
                            <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" maxlength="40">
                          </div>
                           <div class="templatemo_form">
                            <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" maxlength="60">
                          </div>
                          <div class="templatemo_form">
                              <textarea name="message" class="form-control" id="message" placeholder="Your Message..."></textarea>
                          </div>
                          <div class="templatemo_form"><button type="button" class="btn btn-primary">Send</button></div>
                        </form>
                  </div>
              </div>
                <div class="templatemo_col37 col-sm-12 templatemo_leftgap templatemo_topgap">
                    <div class="templatemo_graybg templatemo_paddinggap">
                        <h2>Our Location</h2>
                        <div class="clear"></div>
                        <div class="templatemo_contactmap">
                                <div id="templatemo_map"></div>                        
                        </div>
                        <div class="templatemo_address">
                            24-66 Nam auctor elementum dolor 10220<br>
                            Tel: 010-020-0340 Email: info@company.com
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
        <!-- contact end --> 
    
    </div>
    
        <!-- logo start -->
   
    <!-- logo end -->  
   <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
                
            }
        });

        $('#ab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
        });
        

        $('#cmt').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
        });
    });
</script>
<!-- templatemo 405 matrix -->
 

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