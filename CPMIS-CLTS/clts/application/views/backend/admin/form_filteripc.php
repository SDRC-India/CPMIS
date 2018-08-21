<?php echo form_open('admin/ipc_section/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit14', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm1'));?>
<div class="form-group">
	<div class="col-sm-4">
	<select name="rng" id="rng" class="form-control"  >
		<option value="1-100">0-100</option>
		<option <?php if($rngname=="100-200"){ ?> selected="selected" <?php } ?> value="100-200">101-200</option>
		<option <?php if($rngname=="200-300"){ ?> selected="selected" <?php } ?> value="200-300">201-300</option>
		<option <?php if($rngname=="300-400"){ ?> selected="selected" <?php } ?> value="300-400">301-400</option>
		<option <?php if($rngname=="400-500"){ ?> selected="selected" <?php } ?> value="400-500">401-500</option>
		<option <?php if($rngname=="500-600"){ ?> selected="selected" <?php } ?> value="500-600">501-600</option>
	</select>
	</div>
		<div class="col-sm-7 paddingnl">
			<button type="submit" class="btn btn-info" id="submit-button1" ><?php echo get_phrase('Search IPC Section');?></button>
			<span id="preloader-form"></span>
		</div>
	</div>
<?php echo form_close();?>
<br>