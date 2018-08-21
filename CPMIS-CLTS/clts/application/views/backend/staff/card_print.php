     
<?php
header( 'Content-Type: text/html; charset=utf-8' ); 
//print_r($card_print_data);
$schems=array();
foreach ($card_print_data as $row):

    if($row['is_mgnrega']=='Yes') {
			
			$arr=array("sc_name"=>"MGNREGA","sc_dept"=>"RURAL DEVELOPEMENT DEPARTMENT");
			array_push($schems,$arr);
			}
	if($row['is_sgsy']=='Yes') {
			
			$arr=array("sc_name"=>"SGSY","sc_dept"=>"RURAL DEVELOPEMENT DEPARTMENT");
			array_push($schems,$arr);
			}
if($row['is_iay']=='Yes') {
			
			$arr=array("sc_name"=>"IAY","sc_dept"=>"RURAL DEVELOPEMENT DEPARTMENT");
			array_push($schems,$arr);
			}
if($row['is_sjsry']=='Yes') {
			
			$arr=array("sc_name"=>"SJSRY","sc_dept"=>"URBAN DEVELOPEMENT DEPARTMENT");
			array_push($schems,$arr);
			} 
if($row['is_jnrum']=='Yes') {
			
			$arr=array("sc_name"=>"JNRUM","sc_dept"=>"URBAN DEVELOPEMENT DEPARTMENT");
			array_push($schems,$arr);
			} 			
endforeach;
//print_r($schems);
foreach ($card_print_data as $row):?>
		<style>
		@media print {
		tr.Heading {
			background-color: #1a4567 !important;
			-webkit-print-color-adjust: exact; 
		}}

		@media print {
			.Heading th {
			color: white !important;
		}}
		
		</style>
			<script>
			$(function() {

					var str = "<?php echo $row['postal_address']; ?>";
					str_orig="";
					if(str)
					{
						var b = str.match(/(.{1,40})/g);

						console.log(b);

					 for(var i=0;i<b.length;i++)
					 {
							str_orig=str_orig + b[i]+'\n';
					 }
					}

				$('#card_table tr').each(function() {
						 $(this).find("#address").html("<strong>Permanent address:</strong>"+str_orig);

			 });
				 });
				</script>
<!-------------------------start of card print--------------------------------->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?card_list">View</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Card Printing - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body">
        <div id="printable">
        
		<div  style="color:#fff!important; background-image: url('<?php echo base_url();?>assets/images/entitle_card_bg.jpg');padding:10px;" >
		 <table class="table"  >
		 <thead>
			
			
			<tr style="background:#d7473e" class="Heading">
			<td colspan="1" ><img src="<?php echo base_url();?>assets/images/bihar_logo_red.jpg"></td>
			<td  colspan="3" 	><h1 style="color:#fff">पात्रता पत्र </h1>
			<h3 style="color:#fff">(Entitlement Card)</h3>
			</td>
			</tr>
			<tr >
			<td colspan="4"> <div style="border:1px solid #ccc;background:#fff;padding:5px;" ><span style="font-size:25px;">नाम  : <?php echo $row['child_name']; ?></span > </div>
			</td>
			</tr>
			<tr style="border-top:none!important;">
			<td colspan="2" style="width:50%;" ><div style="border:1px solid #ccc;background:#fff;padding:5px; " ><span style="font-size:25px;">बाल श्रम से  विमुक्ति की तिथि   :</br>
				 <?php echo $row['rescued_date']; ?>
			</span > 
			</div>
			</td>
			<td colspan="2" style="width:50%;"  ><div style="border:1px solid #ccc;background:#fff;padding:5px;" ><span style="font-size:25px;">विमुक्ति   का स्थान   : </br>
			   <?php
			if($row['place_of_rescue']){
				echo $row['place_of_rescue'];
				}else{
				echo $row['place_of_rescue_out'];
				}
				?>
			</span ></div> 
			</td>
			</tr>
			<tr style="border-top:none!important;">
			<td colspan="2" style="width:50%;" ><div style="border:1px solid #ccc;background:#fff;padding:5px; " ><span style="font-size:25px;">बच्चे का  ID सं॰ (CLTS): <?php echo $row['child_id']; ?></span ></div>
			</td>
			<td colspan="2" style="width:50%;" ><div style="border:1px solid #ccc;background:#fff;padding:5px;" ><span style="font-size:25px;">बच्चे का आधार कार्ड संख्या   :  <br/><?php echo $adhar_card; ?></span ></div> 
			</td>
			</tr>
			<tr style="border-top:none!important;">
			<td colspan="2" style="width:50%;" ><div style="border:1px solid #ccc;background:#fff;padding:5px; " ><span style="font-size:25px;">आयु     :  <?php
			if($row['isdob']=='Yes'){
				echo $age = date_diff(date_create($row['dob']), date_create('now'))->y;
				}else{
				echo $age = intval($row['year']);
				}
				?>
			</span > </div>
			</td>
			<td colspan="2" style="width:50%;"  ><div style="border:1px solid #ccc;background:#fff;padding:5px;" ><span style="font-size:25px;">लिंग :  <?php echo $row['sex']; ?></span ></div> 
			</td>
			</tr>
			<tr >
			<td colspan="4"> <div style="border:1px solid #ccc;background:#fff;padding:5px;" ><span style="font-size:25px;">पिता का   नाम  :  <?php echo $row['father_name']; ?></span > </div>
			</td>
			</tr>
			<tr >
			<td colspan="4"> <div style="border:1px solid #ccc;background:#fff;padding:5px;" ><span style="font-size:25px;"> माता  का  नाम  :  <?php   echo $row['mother_name']; ?></span > </div>
			</td>
			</tr>
			<tr >
			<td colspan="4"> <div style="border:1px solid #ccc;background:#fff;padding:5px;" ><span style="font-size:25px; text-transform:uppercase">स्थायी पता (मोबिईल  नं॰ के साथ  ):</br> 
			   <?php echo $row['postal_address']; ?>
			   Panchyat- <?php if($row['panchayat_name']){echo $row['panchayat_name'];}  else {echo 'NA ,';} ?>
			   Police Sation-<?php  if($row['police_station_name']){echo $row['police_station_name'].',';}else{ echo 'NA ,';}?>
			   Pincode-<?php if( $row['pincode']) {echo $row['pincode'].',';} else {echo "NA ," ;}?>
			   Block-<?php echo $row['block'].',';?>
			   Dist-<?php echo $row['district'].',';?>
			   State-<?php echo $row['state'];?>
			</span > 
			</div>
			</td>
			</tr>
			<tr >
			<td colspan="4"> 
			<div style="border:1px solid #ccc;background:#d7473e;color:#fff; padding:5px; text-align:center;" >
			<img src="<?php echo base_url();?>assets/images/camera-icon.png" height="50px" width="50px">
			<p  style="font-size:25px; ">बच्चे का परिवार के साथ सयुंक्त फोटो यहाँ सलंग्न करे</p>
			<p  style="font-size:25px; ">(सहायक निर्देशक ,जिला बाल संरक्षण इकाई द्वारा अभिप्रमाणित मुहर सहित )</p>
                <br/>
                <br/>
                <br/>
              
			</div>
			</td>
			</tr>
			<tr>
            <tr>
			</table>
			</div >
			<div style="color:#fff!important; background-image: url('<?php echo base_url();?>assets/images/entitle_card_bg2.jpg') ;padding:10px;">
			<table class="table">
			<td colspan="4"> <div style="border:1px solid #ccc;background:#d7473e;padding:5px;color:#fff; font-size:25px;" >लाभ दिए जाने वाले योजनाओं   की   विवरणी  </div>
			</td>
			</tr>
			<tr>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >क्र॰
                                                             सं॰ </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                  विभाग का नाम  </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                योजना का नाम </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                  अभ्युक्ति    </div>
			</td>
			</tr>
			<tr>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                          &nbsp;&nbsp;&nbsp;    </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                          &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                               &nbsp;&nbsp;&nbsp;   </div>
			</td>
			</tr>
			<tr>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                          &nbsp;&nbsp;&nbsp;    </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                          &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                               &nbsp;&nbsp;&nbsp;   </div>
			</td>
			</tr>
			<tr>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                          &nbsp;&nbsp;&nbsp;    </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                          &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                               &nbsp;&nbsp;&nbsp;   </div>
			</td>
			</tr>
			<tr>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                          &nbsp;&nbsp;&nbsp;    </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                          &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                               &nbsp;&nbsp;&nbsp;   </div>
			</td>
			</tr>
			<tr>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                          &nbsp;&nbsp;&nbsp;    </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                          &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                               &nbsp;&nbsp;&nbsp;   </div>
			</td>
			</tr>
			<tr>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                          &nbsp;&nbsp;&nbsp;    </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                          &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                               &nbsp;&nbsp;&nbsp;   </div>
			</td>
			</tr>
			<tr>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                          &nbsp;&nbsp;&nbsp;    </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                          &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                               &nbsp;&nbsp;&nbsp;   </div>
			</td>
			</tr>
			<tr>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                          &nbsp;&nbsp;&nbsp;    </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                          &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                               &nbsp;&nbsp;&nbsp;   </div>
			</td>
			</tr>
			<tr>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                          &nbsp;&nbsp;&nbsp;    </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                          &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                               &nbsp;&nbsp;&nbsp;   </div>
			</td>
			</tr>
			<tr>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                          &nbsp;&nbsp;&nbsp;    </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                                &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                          &nbsp;&nbsp;&nbsp; </div>
			</td>
			<td colspan="1">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
                                               &nbsp;&nbsp;&nbsp;   </div>
			</td>
			</tr>
			
			<td colspan="4">
			<div style="border:1px solid #ccc;background:#fff;padding:5px;color:#d7473e; font-size:25px;" >
			उक्त बच्चे को  बाल श्रम से विमुक्त कराया गया हे । बच्चे को उसके परिवार में पुनर्वसन  हेतु बाल कल्याण समिति ................... (किशोर न्याय अधिनियम ,२०१५ की धारा २७ के तहत् देखरेख एवं संरक्षण वाले बच्चों हेतु जिला स्तर पर विधिक इकाई के रूप में गठित तथा दण्ड प्रक्रिया संहिता  ,१९७३ (१९७४ का २ ) द्वारा प्रथम श्रेणी न्यायिक न्यायाधीश के समकक्ष  शक्तिया  प्राप्त  ) के द्वारा उपोरोक्त वर्णित योजनाओं  में बच्चे एबं उसके परिवार को जाँचोपरांत लाभ देने की अनुशंसा  की गयी हे ।
<br/><br/> &nbsp;उत: उपोरोक्त वर्णित  विभागों के योजनाओं  से अनूरोध है कि संबंधित  योजनाओं  का लाभ देने हेतु त्वरित कार्रवाई की जाये
                                                              </div>
			</td>
			</tr>
			<tr>
			<td colspan="2" >
			<div style="border:1px solid #ccc;background:#fff;color:#d7473e;padding:0px !important; font-size:25px;" >
			
			<br/>
			<br/>
			<br/>
			<br/>
			जारी होने की तिथि 
                                                              </div>
			</td>
			<td colspan="2">
			<div style="border:1px solid #ccc;background:#fff;color:#d7473e; padding:0px !important;  font-size:25px; text-align:center" >
			
                           <br/>हस्ताक्षर <br/>	सहायक निर्देशक<br/> जिला बाल संरक्षण इकाई  <br/>मुहर                                 </div>
			</td>
			</tr>
        </table>
        </div>
		</div>
	 	<div class="form-group top-margin" >
    	<div class="col-sm-offset-5 col-sm-7">
		  <button type="submit" class="btn btn-info" id='prnt'> <i class="entypo-print"></i>Print</button>
		  <button type="button" class="btn btn-info" id="cancel-button">Cancel</button>
		  <span id="preloader-form"></span>
	  	</div>
 	 	</div>

  
</div>
<!---------------------------end-------------------------------------------------->
<?php endforeach;?>
<script>
    $(document).ready(function () {

        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
            $(this).ajaxSubmit(options);
            return false;
        });

		    $('#prnt').on('click', function() {

	           $.print("#printable");

				});

    });
    function validate_project_add(formData, jqForm, options) {
   $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }
   function show_response_project_add(responseText, statusText, xhr, $form) {
        $('#preloader-form').html('');
        toastr.success("Project added successfully", "Success");
        document.getElementById("submit-button").disabled = false;
    }

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

</script>
