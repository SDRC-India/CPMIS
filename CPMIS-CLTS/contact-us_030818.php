<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPMIS | Child Protection Management Information System</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

   
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate.css">
    
    <!-- Font awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Boxer css -->
    <link rel="stylesheet" href="css/jquery.fs.boxer.min.css">
        
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Multiple colors css -->
    <link rel="stylesheet" href="css/multiple-colors.css">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    
    <body class="page">

        
    
          <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="header-top-left">
                      
                        </div>
                    </div>
                    
                    <div class="col-md-6 text-right">
                        <?php include 'socialicon.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="logo">
                             <!--<h1><a href="index.html" style=" font-family:Arial, Helvetica, sans-serif">CPMIS</a></h1>-->
							 <h1><a href="index.php">
							<img src="img/CPMIS_logo_white-6.png"></a></h1>
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>                          
                        </div>
                    </div>
                    
                    <div class="col-md-10">
                         <?php include 'menu.php'; ?>
                    </div>
                </div>
            </div>
            
            <span style="display:none" id="countdown_dashboard"></span>
        </div>
    

    
    <section class="recent-causes section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcroumb">
                        <p><a href="index.php">Home</a> / Contact us</p>
                    </div>
                    
                    <div class="inner-page-title">
                        <h2>Contact us</h2>
                        <p class="page-subtitle">- Get in touch with us </p>
                    </div>
                </div>
            </div>
            
        </div>
        <div id="map-canvas"></div>
        <!-- Google Maps API -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 16,
                scrollwheel: false,
                center: new google.maps.LatLng(25.6080374, 85.1430429)
              };

              var map = new google.maps.Map(document.getElementById('map-canvas'),
                  mapOptions);


              var marker = new google.maps.Marker({
                position: map.getCenter(),
                icon: 'img/map-marker.png',
                map: map
              });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>           
        <div class="container">    
            <div class="row">
                <div class="col-md-12">
                    
                  <form  action="" class="contact-form" id="contactform"  method="post">
                        <div class="row">
                            <div class="col-md-6">
								 
                                <p><input type="text" id ="name" placeholder="Name" name="name" required="required" onkeyup="check(this.value)"></p>
							<div style="margin-top: -10px; margin-bottom: 21px;"><span id="errorname" style ="color:red"></span></div>
                                <p><input type="text" id ="email" placeholder="Email" name="email" required="required" onkeyup="checkmail(this.value)"></p>
								<div style="margin-top: -10px; margin-bottom: 21px;"><span id="erroremail" style ="color:red"></span></div>
                                <p><input type="text" id ="subject" placeholder="Subject" name="subject" required="required" onkeyup="checksubject(this.value)"></p>
								<div style="margin-top: -10px; margin-bottom: 21px;"><span id="errorsubject" style ="color:red"></span></div>
								
                            </div>
                            <div class="col-md-6">
							<textarea rows="10" cols="30" placeholder="Message" id="message" name="message" onkeyup="checkmessage(this.vale)"></textarea>
                               
								<span id="errormessage" style ="color:red"></span>
                            </div>
							
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LeN5Q4TAAAAACdGui_cUPe8_ASi4tWnr764bn_y"></div>
                        <p class="text-center"><input type="button" value="Send Feedback" id="submit" onClick="myFunction(event)" class="btn-sm btn-bordered btn-success"></p>
						<div id ="success" class=" alert alert-success fade in" style="display:none">
    					
    				 Your message has been sent successfully.
						</div>
						
   
                    </form>
                    	
						<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
					<script type="text/javascript">
					function check(){
								 var name=document.getElementById("name").value;
								 
								if(name !="")
				               {
					          document.getElementById("errorname").innerHTML="" ;
				
				            return false ;
				                }
				              else{
				                 document.getElementById("errorname").innerHTML="Please specify name" ;
				                  }
							}
							  
							 function checkmail(){
								 var email=document.getElementById("email").value;
								 
								if(email !="")
				               {
					          document.getElementById("erroremail").innerHTML="" ;
				
				            return false ;
				                }
				              else{
				                 document.getElementById("erroremail").innerHTML="Please specify name" ;
				                  }
							} 
							  
							  function checksubject(){
								  
								     if(subject !="")
				{
					document.getElementById("errorsubject").innerHTML="" ;
				
				return false ;
				}
				else{
				document.getElementById("errorsubject").innerHTML="Please specify Subject" ;
				}
								  
							  }
							  
							  
							  function checkmessage(){
						 if(message!="")
				         {
							 document.getElementById("errormessage").innerHTML="" ;
				
				  return false ;
				        }
				 else{
				 document.getElementById("errormessage").innerHTML="Please specify Subject" ;
				     }
								  
							  }
							  
							 function myFunction(event) {
								
							
							  
					            var name=document.getElementById("name").value;
								var email =document.getElementById("email").value;
								var subject =document.getElementById("subject").value;
								var message =document.getElementById("message").value;
								//alert(message);
								var re = /(\w+)\@(\w+)\.[a-zA-Z]/g;
				                var testEmail = re.test(email);
								if(name=="")
				                {
				           document.getElementById("errorname").innerHTML="Please specify name" ;
				           return false ;
				               }
				                else{
				               document.getElementById("errorname").innerHTML="" ;
				                    }
						
				               if(!testEmail)
				                       {
				             document.getElementById("erroremail").innerHTML="Please specify valid email" ;
				              return false ;
				                 }
				             else{
				           document.getElementById("erroremail").innerHTML="" ;
				              }


          if(subject=="")
				{
				document.getElementById("errorsubject").innerHTML="Please specify Subject" ;
				return false ;
				}
				else{
				document.getElementById("errorsubject").innerHTML="" ;
				}
          if(message=="")
				{
				document.getElementById("errormessage").innerHTML="Please specify Message" ;
				return false ;
				}
				else{
				document.getElementById("errormessage").innerHTML="" ;
				}				
								
								// AJAX code to submit form.
								var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;
								$.ajax({
								type: "POST",
								url: "send.php",
								data: dataString,
								cache: false,
								success: function(data) {
									
									if(data){
								$('#success').show();
								 $('#success').delay(5000).fadeOut(400) ;
									}
								
								
								}
								});
							
							 }  
							
							</script> 
					
				
				
				
				
						<style>
						input:focus { 
							border: yellow;
						}
						</style>
                    
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-info-left">
								<h3>Contact Details</h3>
                                    <p>
   									<!--<a href="contact_pdf/ADCPUs Contacts  Details.pdf" style="color:black;" target="_blank">ADCPU Contact  Details</a><br/>
									<a href="contact_pdf/LRD  Contacts Details.pdf" style="color:black;" target="_blank">LRD  Contact Details</a>-->
									</p>
                                </div>
                            </div>
                            
                           




                            <div class="col-md-6">
                                <div class="contact-info-right">
                                    <p><i class="fa fa-map-marker"></i> 
									State Child Protection Society<br/>
									2nd Floor, Apna Ghar<br/>
									Behind Lalit Bhawan<br/>
									Bailey Road
									 <br/>Patna-800023</p>

												
                                    <p><i class="fa fa-phone-square"></i> 0612-2545033</p>
                                    <p><i class="fa fa-envelope"></i> scpsbihar@gmail.com</p>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
 
     <?php include 'footer.php'; ?>

    <!-- jQuery and plugins -->
    <script src="js/vendor/jquery.1.11.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.lwtCountdown-1.0.js"></script>
    <script src="js/jflickrfeed.min.js"></script>
    <script src="js/jquery.fs.boxer.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Activating WOW Animation only for modern browser-->
    <!--[if !IE]><!-->
        <script type="text/javascript">new WOW().init();</script>
    <!--<![endif]-->		

    <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
    <!--[if gte IE 9]>
        <script type="text/javascript">new WOW().init();</script>
    <![endif]-->		 

    <!--Opacity & Other IE fix for older browser-->
    <!--[if lte IE 8]>
        <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
    <![endif]-->	 
    
    <script src="js/main.js"></script>
    
    <!-- Color change function -->
    <script src="js/color-change-function.js"></script>
  </body>
</html>
<script>
  /*(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99602158-2', 'auto');
  ga('send', 'pageview');  */

</script>