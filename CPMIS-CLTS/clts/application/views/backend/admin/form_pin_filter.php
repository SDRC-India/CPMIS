<form  action="<?php echo base_url(); ?>index.php?admin/pincode_list" method="post" >
				<div class="col-md-2">
					<div class="form-group">
					<label ><b>Districts:</b></label>		  
						<select name="district" id="district" class="form-control dist"  data-validate="required">
						<option value="">Select Districts</option>              
						  <?php foreach($districtpin_list as $crow2):  ?>                  
						  <option <?php if($selected_dist==$crow2["area_id"]){echo "selected";}?> value="<?php echo $crow2["area_id"];?>" ><?php echo $crow2["area_name"] ; ?></option>
						  <?php    endforeach ; ?>
						</select>
					</div>
				</div>
				<div class="col-md-2">      
						<button type="submit" style="margin-top:20px;" class="btn btn-info">Submit</button>
				</div>
</form>
<br><br><br><br><br>