<h4></h4>
<?php //print_r($first_title)?>
<?php print_r($type)?>

<div class="row">
<div class="col-md-6">
			<div class="form-group">
			<label class="" for="">Select Reports</label>


			<form class="form-inline"  id="myform" name="" method="post" action="<?php echo base_url(); ?>index.php?monthly_report">
			  
				<select name="type" id="" class="form-control dist"  data-validate="required" >
                 <option <?php if($type=="entitlement_card_getnerated") echo "selected" ;?> value="entitlement_card_getnerated">Entitlement Card Generated Time Period</option>
				 <option  <?php if($type=="investigation") echo "selected" ;?> value="investigation">Investigation Time Period</option>
				 <option  <?php if($type=="inside_state") echo "selected" ;?> value="inside_state">Child Rescued Inside State</option>
				 <option  <?php if($type=="outside_state") echo "selected" ;?> value="outside_state">Child Rescued Outside State</option>

                </select>
			
			
			</div>
			</div>
			<div class="col-md-6"></div>
</div>
	
<div class="row">
	<?php //echo $past_date=date('Y-m-d', strtotime(date('Y-m')." -1 month"));?>
		<div class="col-md-2">
			<div class="form-group">
			<label >Districts</label>
		  
				<select name="district" id="" class="form-control dist"  data-validate="required">
				<option value="">Select Districts</option>
                  <?php foreach($district_list as $crow2):  ?>
                   
                  <option <?php if($selected_dist==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>" <?php if($district_id==$crow2['area_id']){ echo 'selected'; }  ?>><?php echo $crow2['area_name']; ?></option>
                  <?php    endforeach;?>

                </select>
			</div>
		</div>
		<div class="col-md-4 " >
		
           	<label for="datepicker" >From</label>
           	 
                <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control " name="from_date" id="dob"  value="<?php echo $from;?>"  data-validate="required"  >
                	</div>
            
            </div>
		   <div class="col-md-4">
        		
           	<label for="datepicker"> To</label>
           	
                <div class="input-group date" id="datepickerTo"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" name="to_date" id="dob"  value="<?php echo $to;?>"  data-validate="required"  >
                </div>
                
		  </div>
		   
  			<div class="col-md-2" >
        
  			<button style="margin-top:20px;" type="submit" class="btn btn-info">Submit</button>
  			</div>


	</form>

</div>
</br>
<div class="text-center bg-header"><h4 ><?php echo $first_title;?></h4></div>
<div class="row">

    <!--user widgets-->
    <div class="col-md-4 col-sm-6">
        <div class="widget-2 user-2">
            <h4><?php echo $box_one_title; ?></h4>
            <img src="assets/images/<?php echo $box_one_img; ?>" alt="users">
            <h3><?php  echo $monthly_report['rescued']?></h3>
        </div>
    </div>
    <!--clients widget-->
    <div class="col-md-4 col-sm-6">
        <div class="widget-2 clients-2">
            <h4><?php echo $box_2_title;?></h4>
			
            <img width="45px" height="57px" src="assets/images/<?php echo $box_2_img; ?>" alt="users">
			<h3><?php  if($type=="inside_state" || $type=="outside_state"){?>
			<form action="<?php echo base_url(); ?>index.php?monthly_report/report_details" method="post" style="margin-bottom:0px;"> 
				<input type="hidden" name="from_date" value="<?php echo $from?>">
				<input type="hidden" name="to_date" value="<?php echo $to?>">
				<input type="hidden" name="type" value="<?php echo $type?>">
	
	
			<?php  echo '<input class="btn_details" style="background:none;border:none;padding:0;" type="submit" value="'.$monthly_report['card'].'"  />' ;
				?>
				</form>
			<?php }else{ echo $monthly_report['card']; }?></h3>
        </div>
    </div>
  

    <!--Old projects widget-->
    <div class="col-md-4 col-sm-6">
        <div class="widget-2 old-project-2">
            <h4><?php echo $box_3_title; ?></h4>
            <img  width="45px" height="57px" src="assets/images/<?php echo $box_3_img;?>" alt="users">
            <h3><?php
                 echo ROUND((($monthly_report['card']/$monthly_report['rescued']))*100);
                ?>%</h3>
        </div>
    </div>
</div>
<?php if($second_title){  ?>
<div class="text-center bg-header">
<h4><?php echo $second_title;  ?><h4></div>
<div class="row" >

    <!--user widgets-->
    <div class="col-md-4 col-sm-6">
        <div class="widget-2 user-2">
            <h4><?php echo $box_4_title?></h4>
			
            <img src="assets/images/<?php echo $box_4_img;?>" alt="users">
            <h3><form action="<?php echo base_url(); ?>index.php?monthly_report/report_details" method="post" style="margin-bottom:0px;"> 
				<input type="hidden" name="from_date" value="<?php echo $from?>">
				<input type="hidden" name="to_date" value="<?php echo $to?>">
				<input type="hidden" name="type" value="<?php echo $type?>">
	                
			<?php echo '<input class="btn_details" style="background:none;border:none;padding:0;" type="submit" value="'.$monthly_report['data14'].'"  />' ;
				
				?>
				</form></h3>
        </div>
    </div>
    <!--clients widget-->
    <div class="col-md-4 col-sm-6">
        <div class="widget-2 clients-2">
            <h4><?php echo $box_5_title;?></h4>
            <img src="assets/images/<?php echo $box_5_img;?>" alt="users">
            <h3><form action="<?php echo base_url(); ?>index.php?monthly_report/report_details" method="post" style="margin-bottom:0px;"> 
				<input type="hidden" name="from_date" value="<?php echo $from?>">
				<input type="hidden" name="to_date" value="<?php echo $to?>">
				<input type="hidden" name="type" value="<?php echo $type?>">
	
	
			<?php echo '<input class="btn_details" style="background:none;border:none;padding:0;" type="submit" value="'.$monthly_report["data21"].'"  />' ;?>
				</form></h3>
        </div>
    </div>
   

    <!--Old projects widget-->
    <div class="col-md-4 col-sm-6">
        <div class="widget-2 old-project-2 ">
            <h4><?php echo $box_6_title;?></h4>
            <img src="assets/images/<?php echo $box_6_img;?>" alt="users">
            <h3 >
			<form action="<?php echo base_url(); ?>index.php?monthly_report/report_details" method="post" style="margin-bottom:0px;"> 
				<input type="hidden" name="from_date" value="<?php echo $from?>">
				<input type="hidden" name="to_date" value="<?php echo $to?>">
				<input type="hidden" name="type" value="<?php echo $type?>">
	
	
			<?php  echo '<input class="btn_details" style="background:none;border:none;padding:0;" type="submit" value="'.$monthly_report["ldata21"].'"  />' ;
				?>
				</form>
				
				</h3>
        </div>
    </div>
	
	
</div>
<?php }  ?>
<form action="<?php echo base_url(); ?>index.php?monthly_report/report_details" method="post"> 
	<input type="hidden" name="from_date" value="<?php echo $from?>">
	<input type="hidden" name="to_date" value="<?php echo $to?>">
	<input type="hidden" name="type" value="<?php echo $type?>">
	<input type="submit" value="View All" class="btn btn-info col-md-offset-5" />
	
	</form>

<script>
	var FromEndDate = new Date();
$('#datepicker').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true,
"setDate": new Date()
});
</script>
	<script>
var FromEndDate1 = new Date();
$('#datepickerTo').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate1,
autoclose: true,
date:FromEndDate1
});
</script>
