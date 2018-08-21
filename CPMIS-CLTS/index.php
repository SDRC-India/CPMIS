<?php

include 'db.php';



$numer_rescued = mysql_num_rows(mysql_query("select * from child_basic_detail",$conn));

$number_rehabilitated = mysql_num_rows(mysql_query("select * from child_basic_detail where pstatus='Y'",$conn));

$number_investigation = mysql_num_rows(mysql_query("select * from child_basic_detail where pstatus='N'",$conn));

$number_card_generation = mysql_num_rows(mysql_query("select * from child_basic_detail where is_card_print!=0",$conn));


//$evnt=mysql_query("select * from event_management",$conn);


/*while($ro6=mysql_fetch_array($evnt)) {
	
	$evnt_time=$ro6['ev_time'];
	$evnt_date=$ro6['ev_date'];
	$evnt_url=$ro6['ev_url'];
	$evnt_title=$ro6['ev_title'];
	
}
*/


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'header_top.php'; ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    
    <body>

   
    <div id="preloader">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
    </div>
   
   
   <?php include 'top_area.php'; ?>
     
    
    <?php include 'header.php'; ?>
  
        
       
        
        <div class="slider-area">
            <div class="single-slide">
                <div class="slide-bg slide-1"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="slide-text-table">
                                <div class="slide-text-cell">
                                    <h2 class="animated">Help The <span>Child</span></h2>
                                    <h2 class="animated">Make <span>Better</span> World</h2>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                </div>
            </div>  
            <div class="single-slide">
                <div class="slide-bg slide-2"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="slide-text-table">
                                <div class="slide-text-cell">
                                    <h2 class="animated">Children Need  <span> Education</span></h2>
                                    <h2 class="animated">For Brighter <span>Future</span></h2>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                </div>
            </div>         
        </div>
        
        <!--<div class="upcoming-event-area wow fadeInUp">
            <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="upcoming-event-wrapper">
                    <div class="upcoming-event">
                        <div class="upcoming-event-top">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="upcoming-event-title">
                                        <div class="upcoming-event-icon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <h3>Upcoming Event</h3>
                                        
                   
                                        <p><i class="fa fa-clock-o"></i> <?php echo $evnt_time; ?><i class="fa fa-calendar"></i> <?php echo $evnt_date; ?></p>
                                    </div>
                                </div>
                                
                                <div class="col-md-7">
                                    <div class="upcoming-event-heading">
                                        <h2><a href="<?php echo $evnt_url; ?>"><?php echo $evnt_title; ?></a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>-->
        
    </section>
    
    
    <section class="about-us section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                         <img src="img/CPMIS_LOGO.png">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-5 wow fadeInUp">
                    <div class="about-photo">
                        <div class="left-frame"></div>
                        <div class="right-frame"></div>
                        <img class="img-responsive" src="img/about.jpg" alt="">
                    </div>
                    
                    <!--<div class="our-stats">
                        <div class="total-events">
                            <h2>34 <span>Events</span></h2>
                        </div>  
                        <div class="total-donation-stats">
                            <p><span class="counter">2434</span> Child tracked</p>
                            <p><span class="counter"></span> </p>
                        </div>    
                    </div>-->
                </div>
                
                <div class="col-md-7 wow fadeInUp">
                    <div class="about-text">
                        <!--<h2>Lorem ipsum dolor sit amet</h2>-->
                        <p>The State Child Protection Society (SCPS), Bihar is the nodal body at the State level to implement and 

monitor the Integrated Child Protection Scheme (ICPS). The SCPS is mandated to seek routine data 

from District Child Protection Units (DCPU), Child Care Institutions (CCI), Juvenile Justice Boards (JJB) 

and statutory bodies.</p>

<p>
UNICEF Bihar has supported Department of Social Welfare, Govt. of Bihar to create a systematic and 

centralized recording and reporting online system for Juvenile Justice Board (JJBs), Child Welfare 

Committee (CWCs), Special Juvenile Police Unit (SJPUs) and Child Care Institutions (CCIs) running in 

state  to enabling the timely data and accurate consolidation of feedback.
</p>
                        
                   <p>
                   Child Protection Management Information System (CPMIS) is a user friendly, web-enabled

information management and monitoring system. The system enables access to data for key 

indicators through a DevInfo interface as well as for download as quarterly factsheets. Besides, an 

offline of DevInfo has also been developed to enable use of the system in places without access to 

internet connectivity.
                   </p>
                   
                   <p>
                   Data is presently available for 246 indicators across one quarter of 2013 and four quarters of 2014. 

Data is available consolidated at the state level as well as for ...<a href="about.php" style="color:#F00">Read More</a>
                   
                   </p>
                                              
                    </div>
                </div>
            </div>
        </div>
				<!-- <div class="header-area new">
					<div class="container">
						 <div class="row">
						     <div class="col-md-6 col-md-offset-5" style="color:#FFF;">
							NGO,Mukhia and Middle Men &nbsp;&nbsp;<a href="reg_ngo_mukhia_men.php"><button class="btn btn-info" style="margin-bottom:3px;">Login</button><br>
</a>
						 </div>
							</div>
					</div>
				</div>-->
    </section>
    
    
    
    
    
    
    
   <!-- <section class="call-to-action section-padding">
        <div class="cta-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><span>Want to Donate?</span> It’s time to show your huminity</h2>
                    <a href="donate-now.html" class="cta-btn">Donate Now</a>
                </div>
            </div>
        </div>
    </section>-->
    
    <!--<div style="text-align:center; width:100%; background:#110c09;">
    <img src="img/quickstat.png" width="1350" height="497">
    
    </div>-->
   <!-- start-->
   
  <!-- end-->
    
    
    <!--<img src="img/quickstat.png" width="1350" height="497"> -->
    
	<!-- Start of Quick Stats -->

<div class="container-fluid quick-start-bg">
<div class="container">
    <div class="row"> 
   <div class="col-md-12 quick-start">
   
   <h1> Quick Stats </h1>
   
   <div class="col-md-4 col-sm-4 col-xs-12">
   <div class="quick-start-in">
   <div class="quick-rnd rnd-1"></div>
   <span class="yellow-text"><?php echo $numer_rescued; ?></span>
   <br>
   <span class="white-text">Child Rescued</span>
   </div>
   </div>
   
   
   <div class="col-md-4 col-sm-4 col-xs-12">
   <div class="quick-start-in">
   <div class="quick-rnd rnd-2"></div>
   <span class="yellow-text"><?php echo $number_investigation; ?></span>
   <br>
   <span class="white-text">Child Investigation (Ongoing)</span>
   </div>
   </div>
   
   <div class="col-md-4 col-sm-4 col-xs-12">
   <div class="quick-start-in">
   <div class="quick-rnd rnd-3"></div>
   <span class="yellow-text"><?php echo $number_card_generation; ?></span>
   <br>
   <span class="white-text">Entitlement Card Generated</span>
   </div>
   </div>
   
    
   </div>
    </div>
    </div>
    </div>
    
    <!-- End of Quick Stats -->   
   <?php include 'footer.php'; ?>