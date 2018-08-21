<?php //print_r($header_data);?>

<!--<div class="row">
  <div class="col-md-12 col-sm-12 clearfix" style="text-align:left; border-bottom:1px #333 solid; margin-top:-18px; padding:0; height:110px;">
      <a href="http://gov.bih.nic.in/" target="_blank"><img src="assets/images/bihar_logo_red.jpg" alt="Bihar Government" align="left" width="120"></a>
    </div>
    </div>-->
<div class="row">
  <div class="col-md-6 col-sm-6 clearfix" style="text-align:left;">
    <h2 style="font-weight:200;">

    </h2>
    <div class="col-md-2" style="overflow: hidden;">

      <img src="<?php echo $image_url ;?>" alt="" class="img-square img-cust" > 
	</div>
    <div class="col-md-6">
      <div class="sui-normal"> <a href="" class="user-link">
         <span class="welcome_style" ><?php echo get_phrase('welcome');?><br/>
        </span> <span class="name_style">
		          <?php echo $sname[0]->name;?>  
		          <?php echo $sname[0]->location;;?>
	</span> </a> </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 clearfix" style="text-align:right; margin-top:-10px; padding:0; height:101px;">
      <a href="http://gov.bih.nic.in/" target="_blank"><img src="assets/images/bihar_logo_red.jpg" alt="Bihar Government" align="right"></a>
    </div>
  </div>
  <div class="row">  
  <div class="col-md-12 col-sm-12 clearfix col-top">
  <?php if($count_cmrf!=""){ ?>
		   <ul class="list-inline links-list pull-left li_top" >
					<li class="head_name"> CMRF </li>

			   <li class="notifications dropdown li_nxt" ><a href="#" title="Real time Message Counter" class="dropdown-toggle a_link" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" class="noti_badge"><i class="entypo-mail"></i>
				<span class="badge badge-info badge_style count_msg " ><?php echo $count_cmrf[0]['count_cmrf'] ;?></span>
				</a>
				<ul class="dropdown-menu">
				  <li class="top">

					<span class ="count">
							<h4>
							  <?php if($count_cmrf[0]['count_cmrf']>0){ ?>
								<a href ="<?php echo base_url();?>index.php?cmrf_trn_details_ls/Cmrf_sts/<?php echo $count_cmrf[0]['cmrf_id'];?>"> You have 
								 <?php echo $count_cmrf[0]['count_cmrf'];?>  Pending Notifications.</a>
							  <?php  } else {  ?>
								  You have 0 Pending Notifications
							 <?php   }  ?>
							</h4>
					
					</span>

				  </li>
				  </ul>
				  </li>
				
	   </ul>
    
 <?php } ?>
   
	      
		  
		   <?php if($count_msg !=""){ ?>
		   <div class="navbar-inverse">
    <div class="navbar-nav">
		   <ul class="list-inline links-list pull-left li_top" >
					<li class="head_name LC"> <a style='color:#FFF;' href ="<?php echo base_url();?>index.php?comunication/LC">LC</a> </li>

			   <li class="notifications dropdown li_nxt" ><a href="#" title="Real time Message Counter" class="dropdown-toggle a_link" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" class="noti_badge"><i class="entypo-mail"></i>
				<span class="badge badge-info badge_style count_msg " ><?php echo $count_msg[0]['cnt'] ;?></span>
				</a>
				<ul class="dropdown-menu">
				  <li class="top">

					<span class ="count">
							<h4>
							  <?php if($count_msg[0]['cnt']>0){ ?>
								<a href ="<?php echo base_url();?>index.php?comunication/LC"> You have 
								 <?php echo $count_msg[0]['cnt'];?>  Pending Messages.</a>
							  <?php  } else {  ?>
								  You have 0 Pending Messages 
							 <?php   }  ?>
							</h4>
					
					</span>

				  </li>					   
				  </ul>
				 </li>
				
	   </ul>
	   </div>
	   </div>
    
 <?php }?>
 <?php if($count_jlc_msg!=""){ ?>
 <div class="navbar-inverse">
    <div class="navbar-nav">
		   <ul class="list-inline links-list pull-left li_top" >
					<li class="head_name JLCmesg"><a style='color:#fff;' href ="<?php echo base_url();?>index.php?comunication/JLCmesg"> JLC</a> </li>

			   <li class="notifications dropdown li_nxt" ><a href="#" title="Real time Message Counter" class="dropdown-toggle a_link" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" class="noti_badge"><i class="entypo-mail"></i>
				<span class="badge badge-info badge_style count_msg " ><?php echo $count_jlc_msg[0]['cnt'] ;?></span>
				</a>
				<ul class="dropdown-menu">
				  <li class="top">

					<span class ="count">
							<h4>
							  <?php if($count_jlc_msg[0]['cnt']>0){ ?>
								<a href ="<?php echo base_url();?>index.php?comunication/JLCmesg"> You have 
								 <?php echo $count_jlc_msg[0]['cnt'];?>  Pending Messages.</a>
							  <?php  } else {  ?>
								  You have 0 Pending Messages 
							 <?php   }  ?>
							</h4>
					
					</span>

				  </li>					   
					
				  </ul>
				  </li>
				
	   </ul>
	   </div>
	   </div>
    
 <?php } ?>
 <?php if($count_dlc_msg!=""){ ?>
 <div class="navbar-inverse">
    <div class="navbar-nav">
		   <ul class="list-inline links-list pull-left li_top" >
					<li class="head_name DLCmesg"><a style='color:#FFF;'  href ="<?php echo base_url();?>index.php?comunication/DLCmesg"> DLC</a> </li>

			   <li class="notifications dropdown li_nxt" ><a href="#" title="Real time Message Counter" class="dropdown-toggle a_link" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" class="noti_badge"><i class="entypo-mail"></i>
				<span class="badge badge-info badge_style count_msg " ><?php echo $count_dlc_msg[0]['cnt'] ;?></span>
				</a>
				<ul class="dropdown-menu">
				  <li class="top">

					<span class ="count">
							<h4>
							  <?php if($count_dlc_msg[0]['cnt']>0){ ?>
								<a href ="<?php echo base_url();?>index.php?comunication/DLCmesg"> You have 
								 <?php echo $count_dlc_msg[0]['cnt'];?>  Pending Messages.</a>
							  <?php  } else {  ?>
								  You have 0 Pending Messages 
							 <?php   }  ?>
							</h4>
					
					</span>

				  </li>
				  </ul>
				  </li>
				
	   </ul>
	   </div>
	   </div>
    
 <?php } ?>
 <?php if($count_alc_msg!=""){ ?>
 <div class="navbar-inverse">
    <div class="navbar-nav">
		   <ul class="list-inline links-list pull-left li_top" >
					<li class="head_name ALCmesg"><a style='color:#FFF;'  href ="<?php echo base_url();?>index.php?comunication/ALCmesg"> ALC</a> </li>

			   <li class="notifications dropdown li_nxt" ><a href="#" title="Real time Message Counter" class="dropdown-toggle a_link" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" class="noti_badge"><i class="entypo-mail"></i>
				<span class="badge badge-info badge_style count_msg " ><?php echo $count_alc_msg[0]['cnt'] ;?></span>
				</a>
				<ul class="dropdown-menu">
				  <li class="top">

					<span class ="count">
							<h4>
							  <?php if($count_alc_msg[0]['cnt']>0){ ?>
								<a href ="<?php echo base_url();?>index.php?comunication/ALCmesg"> You have 
								 <?php echo $count_alc_msg[0]['cnt'];?>  Pending Messages.</a>
							  <?php  } else {  ?>
								  You have 0 Pending Messages 
							 <?php   }  ?>
							</h4>
					
					</span>

				  </li>
				  </ul>
				  </li>
				
	   </ul>
	   </div>
	   </div>
    
 <?php } ?>
 
    <!-- for cwc-->
    <?php if($header_cwc !=""){?>
   <ul class="list-inline links-list pull-left li_top" >

     <li class="head_name">
       <?php echo $header_text_2['head_name'] ?>
     </li>

     <li class="notifications dropdown li_nxt"> <a href="#" class="dropdown-toggle a_link" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" title="CWC Notificatios" > <i class="entypo-bell"></i>
       <?php if (count($header_cwc) >= 0):?>
       <span class="badge badge-info badge_style"><?php echo count($header_cwc);?></span>
       <?php endif;?>
       </a>
       <ul class="dropdown-menu">
         <li class="top">
           <h4><?php echo count($header_cwc);?><?php echo $header_text_2['url_name'] ?></h4>

         </li>
         <li>
           <ul class="dropdown-menu-list scroller">
             <?php
               foreach($header_cwc as $row):
              ?>
             <li>
               <a  href="<?php echo base_url();?>index.php?<?php echo $header_text_2['url_link1'].$row->child_id.$header_text_2['url_link2'] ?>" class="bell-scroll">   <?php echo $row->child_id ?> </a>
               <?php endforeach;?>
             </li>
           </ul>
          </ul>
        </li>
   </ul>
 <?php }?>
  <?php if($header_data !=""){ ?>
    <ul class="list-inline links-list pull-left li_top" >


      <li class="head_name">
          <?php echo $header_text['head_name'];
        //print_r($header_text);?>

      </li>



      <li class="notifications dropdown li_nxt" ><a href="#" class="dropdown-toggle a_link" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" ><i class="entypo-bell"></i>
        <?php if (count($header_data) >= 0):?>
        <span class="badge badge-info badge_style" ><?php echo count($header_data);?></span>
          <?php endif;?>
        </a>
        <ul class="dropdown-menu">
          <li class="top">

            <h4><?php echo count($header_data);?> <?php echo $header_text['url_name']?></h4>

          </li>
          <li>
            <ul class="dropdown-menu-list scroller">
              <?php
				foreach($header_data as $row):
			  ?>
              <li>
                <a href="<?php echo base_url();?>index.php?<?php echo $header_text['url_link1'].$row->child_id.$header_text['url_link2'];?>" class="bell-scroll"><?php echo $row->child_id;?></a>

              </li>
              <?php  endforeach;?>
            </ul>
          </li>
        </ul>
      </li>
	   </ul>
	      <?php } ?>
    <ul class="list-inline links-list pull-right" style="padding:0px;">

          <li class="log_out"> <a href="<?php echo base_url();?>index.php?login/logout" style="color:#fff;"> Log Out <i class="entypo-logout right"></i> </a>
         </li>
    </ul>
  </div>
  <style type="text/css">
 
 .navbar-inverse .navbar-nav > ul > li:first-child > a{
    color:red;
    text-decoration:none;
}

.navbar-inverse .navbar-nav > ul > li > a.active, .navbar-inverse .navbar-nav > ul > li > a:hover, .navbar-inverse .navbar-nav > ul > li > a:focus {
    
    text-decoration:underline;
}
 
 
 
 
 
</style>
<script>
$(".navbar-inverse .navbar-nav > ul > li > a").click(function() {        
    $(".navbar-inverse .navbar-nav > ul > li > a").removeClass("active"); 
    $(this).addClass("active");          
});
$(document).ready(function(){
	if(window.location.href.split("/")[window.location.href.split("/").length-1] == "ALCmesg"){
			$(".ALCmesg a").addClass("active");
		}
	if(window.location.href.split("/")[window.location.href.split("/").length-1] == "LC"){
		$(".LC a").addClass("active");
	}
	if(window.location.href.split("/")[window.location.href.split("/").length-1] == "DLCmesg"){
		$(".DLCmesg a").addClass("active");
	}
	if(window.location.href.split("/")[window.location.href.split("/").length-1] == "JLCmesg"){
		$(".JLCmesg a").addClass("active");
	}
})

</script> 
  
  
  
  
</div>
<script type="text/javascript">
$(".count").on('click', function (e) {
	
	var count  = $('.count').val();
	//alert("count");
	 $.ajax({
      url: "<?php echo base_url()?>index.php?comunication/getCountMsgdd",
      type: "post",
      data: {count:count},
 
      success: function (response) {
 
        $(".count_msg").html(response);
	
		 
      }
    });
	
	
}); 

</script>