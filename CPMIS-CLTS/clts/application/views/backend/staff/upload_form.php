<style>
#imagePreview {
    width: 100px;
    height: 100px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>

<?php $this->load->view("backend/staff/modal_success_award.php");?>

<hr />
 
<div style="color:red">
	<?php //echo validation_errors(); ?>
  <?php //if(isset($error)){print $error;}?>
</div>
<?php //echo form_open_multipart('award/file_data');?>
                 <?php echo form_open('award/file_data' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit19', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm'));?>
 <div class="col-md-6">
  <div class="form-group">
    <label for="pic_title">Image Title<span style="color:red;">*</span></label>
    <input type="text" class="form-control" name="pic_title" id="pic_title"  value="<?= set_value('pic_title'); ?>" id="pic_title" data-validate="required" maxlength="60">
    <div id="produced_other_fr_grp"></div>
    <span class="claim_amount_msg color-red"></span>
  </div>
  <div class="form-group">
    <label for="pic_desc">Image Description</label>
    <textarea name="pic_desc" class="form-control" id="pic_desc" maxlength="200"><?= set_value('pic_desc'); ?></textarea>
   <div id="produced_other_fr_grp"></div>
  <span class="claim_amount_msg color-red"></span>
  </div>
  <div class="form-group">
  <div class="col-md-8"><input type="hidden" name="hidename" id="hidename" >
    <label for="pic_file">Select Image<span style="color:red;">*</span></label>
    <input type="file" name="pic_file" class="form-control"  id="pic_file"  onchange="return validate_fileupload_award(this);" data-validate="required" ><p id="showmsg" style="color:red;margin-top: 12px;"></p>
    <div id="size-error" style="color:red;"></div>
    </div>
    <div class="col-md-4">
  <div id="imagePreview">
  <div id="img-id"><img  src="<?php base_url();?>uploads/images1.png" /></div>

  
  </div>
  </div>
   <div id="produced_other_fr_grp"></div>
   
  <span class="claim_amount_msg color-red"></span>
  </div>
  <a href="<?php echo base_url(); ?>index.php?award/" class="btn btn-primary" style="background-color:#0054A5;" >Back</a>
  <button type="submit" id="submit-button" class="btn btn-primary" style="background-color:#0054A5;" >Submit</button>
                <?php echo form_close();?>
                
 </div>
  <div class="col-md-6" style="text-align:right;">
  		 <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?award">Back to List</a> 
  </div>
<script>

function validate_fileupload_award(upload_field)
{
	//alert("1st block");
 var re_text = /\.jpg|\.png|\.jpeg/i;
 var filename = upload_field.value;


 //var imagename = filename.replace("C:\\fakepath\\","");
     if (filename.search(re_text) == -1 && filename !='')
     {
			$("#showmsg").html("File format error...Please provide a jpg/jpeg/png format");
	         document.getElementById("hidename").value = 2;
				
         document.getElementById("submit-button").disabled = true;
         
         return false;
     }
     else{
    	 document.getElementById("hidename").value = '';
			$("#showmsg").html("");
	         document.getElementById("submit-button").disabled = false;

         }
	}



//checking of image size and showing of image before uploading
//poojashree's code
$('#pic_file').bind('change', function() {

	//alert("2nd block");
	$("#img-id").hide();

	
	 //this.files[0].size gets the size of your file.
	 if(this.files[0].size > 2092318){
		 //alert(this.files[0].size);
	$("#size-error").html("File size should be less than 2MB");
	document.getElementById("submit-button").disabled = true;
	 }else{
	$("#size-error").html(" ");
	document.getElementById("submit-button").disabled = false;
	 }
	 var files = !!this.files ? this.files : [];
   //alert(files);
   if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

   if (/^image/.test( files[0].type)){ // only image file
       var reader = new FileReader(); // instance of the FileReader
       reader.readAsDataURL(files[0]); // read the local file

       reader.onloadend = function(){ // set image data as background of div
           $("#imagePreview").css("background-image", "url("+this.result+")");
       }
   }

	 
	});


/*
function validate_fileupload(fileName)
{
	//alert(fileName);
    var allowed_extensions = new Array("png", "jpeg","gif", "jpg");
    var file_extension = fileName.split('.').pop().toLowerCase(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.
    
    for(var i = 0; i <= allowed_extensions.length; i++)
    {
    	//alert(allowed_extensions[i]); 
        if(allowed_extensions[0]==file_extension)
        {
            //alert(ifff);
        	document.getElementById("showmsg").innerHTML="" ; 
            
            document.getElementById("submit-button").disabled = false;
            return true; // valid file extension
        }

        if(allowed_extensions[1]==file_extension)
        {
            //alert(ifff);
        	document.getElementById("showmsg").innerHTML="" ; 
            
            document.getElementById("submit-button").disabled = false;
            return true; // valid file extension
        }

        if(allowed_extensions[2]==file_extension)
        {
            //alert(ifff);
        	document.getElementById("showmsg").innerHTML="" ; 
            
            document.getElementById("submit-button").disabled = false;
            return true; // valid file extension
        }

        if(allowed_extensions[3]==file_extension)
        {
            //alert(ifff);
        	document.getElementById("showmsg").innerHTML="" ; 
            
            document.getElementById("submit-button").disabled = false;
            return true; // valid file extension
        }



        else{
            //alert(elseeeee);
        	document.getElementById("showmsg").innerHTML="Please upload jpg,png and gif" ; 
            document.getElementById("submit-button").disabled = true;
            return false;

            }
    }

}
*/

//checking of image size and showing of image before uploading
//poojashree's code


//success message showing up after image upload
function communication(formData, jqForm, options) {
	//alert("3rd block");
	if(document.getElementById("hidename").value==2){
		return false;
		}	
	if(jqForm[0].pic_title.value.length==0)
	{	
			return false;
		
	}
	if(jqForm[0].pic_desc.value.length==0)
	{
			return false;
		
	}
	if(jqForm[0].pic_file.value.length==0)
	{
			return false;
		
	}
	else{
		$('#loading').show();
		}

	$('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
    document.getElementById("submit-button").disabled = true;  
}

$(window).load(function () {

     var options = {
         beforeSubmit: communication,
           success: show_message1,
         resetForm: false
     };
     $('.ajax-submit19').submit(function () {
        $('body').scrollTop(0);
         $(this).ajaxSubmit(options);
          // location.reload();
         return false;
         
     });
 });
 
  function show_message1(responseText, statusText, xhr, $form) {
	  
	  if(responseText)
	  {
		  console.log(responseText);
	  }
	  $('#preloader-form').html('');
	  //setTimeout(function(){ }, 1000);
	   $('#loading').hide();
      $('#msgModal-1').modal('show');
      document.getElementById("submit-button").disabled = false;
   }
 

  
</script>