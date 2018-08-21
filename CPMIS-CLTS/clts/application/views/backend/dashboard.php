<br><br>
<?php include("notification.php"); ?>
<div class="row">



	<div class="col-sm-3">
		<a href="<?php echo base_url();?>index.php?admin/staff">
			<div class="tile-stats tile-green">
				<div class="icon"><i class="entypo-user"></i></div>
				<h3><?php echo get_phrase('manage_staffs');?></h3>
			</div>
		</a>
	</div>

	<div class="col-sm-3">
		<a href="<?php echo base_url();?>index.php?admin/message">
			<div class="tile-stats tile-aqua">
				<div class="icon"><i class="entypo-mail"></i></div>
				<h3><?php echo get_phrase('view_messages');?></h3>
			</div>
		</a>
	</div>


</div>

<div class="row">





</div>





<div class="row">

	<!-- pending running projects -->
	<?php
	$this->db->where('progress_status <' , 100);
	$this->db->order_by('project_id' , 'desc');
	$projects	=	$this->db->get('project' )->result_array();
	?>
	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					<i class="entypo-paper-plane"></i>
					CLTS <?php echo get_phrase('pending_projects');?> (<?php echo count($projects);?>)
				</div>
				<div class="panel-options">
					<a href="<?php echo base_url();?>index.php?admin/project" class="btn btn-default tooltip-primary"
						data-toggle="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('view_projects');?>">
							<i class="entypo-right-open-mini"></i></a>
				</div>
			</div>

			<div class="panel-body with-table">
				<table class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th><div><?php echo get_phrase('project');?></div></th>
							<th><div><?php echo get_phrase('client');?></div></th>
							<th><div><?php echo get_phrase('progress');?></div></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($projects as $row):
						?>
						<tr>
							<td>
								<a href="<?php echo base_url();?>index.php?admin/project_monitor/<?php echo $row['project_id'];?>">
									<?php echo $row['title'];?>
				               </a>
				           	</td>
							<td><?php echo $this->db->get_where('client' ,
									array('client_id'=>$row['client_id']))->row()->name;?>
				                    </td>
							<td>
				            	<?php
								$status = 'info';
								if ($row['progress_status'] == 100)$status = 'success';
								if ($row['progress_status'] < 50)$status = 'danger';
								?>

				              <div class="progress progress-striped <?php if ($row['progress_status']!=100)echo 'active';?> tooltip-primary"
				                      style="height:3px !important; cursor:pointer;"  data-toggle="tooltip"  data-placement="top"
				                          title="" data-original-title="<?php echo $row['progress_status'];?>% completed" >
				                  <div class="progress-bar progress-bar-<?php echo $status;?>"
				                  	role="progressbar" aria-valuenow="<?php echo $row['progress_status'];?>"
				                    		aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row['progress_status'];?>%">
				                      <span class="sr-only">40% Complete (success)</span>
				                  </div>
				              </div>
				           </td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>




</div>
</div>
<script>

var chart = AmCharts.makeChart("bar_chartdiv", {
    "theme": "none",
    "type": "serial",
	"startDuration": 2,
    "dataProvider": [
	<?php
		$this->db->select_sum('amount');
		$this->db->group_by('project_id');
		$this->db->order_by('timestamp' , 'desc');
		$this->db->select('timestamp, project_id, payment_method');

		$timestamp_start	=	strtotime('-29 days', time());
		$timestamp_end		=	strtotime(date("m/d/Y"));
		$this->db->where('timestamp >=' , $timestamp_start);
		$this->db->where('timestamp <=' , $timestamp_end);
		$payments	=	$this->db->get('payment')->result_array();
		foreach ($payments as $row):
			?>
				{
                    "project": "<?php echo substr($this->db->get_where('project',array('project_id' => $row['project_id']))->row()->title , 0,50);?>",
                    //"project" : 'g',
                    "amount": <?php echo $row['amount'];?>,
                    "color": "#455064",
                    "temp" : ' ',
                },
	<?php endforeach;?>
	],
    "graphs": [{
        "balloonText": "[[project]]: <b><?php echo $currency_symbol;?>[[value]]</b>",
        "colorField": "color",
        "fillAlphas": 1,
        "lineAlpha": 0.1,
        "type": "column",
        "valueField": "amount"
    }],
    "depth3D": 0,
	"angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "temp",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 0
    }
});
</script>



<script language="javascript">

	// calculator custom functions
	var oper=""
	var num =""

	function displaynum(n) {
		document.form1.t1.value = document.form1.t1.value + n
	}

	function operator(op) {
		oper = op
		num= document.form1.t1.value
		document.form1.t1.value = ""
	//document.form1.t1.value += oper
	}
	 //code for equals starts here
	 function equals() {
	 	doesthejob( eval(num) , eval(document.form1.t1.value ), oper)
	 }
	 //a sub-function of equals
	 function doesthejob(n1,n2, op) {
	 	if (op == "+" )
	 		document.form1.t1.value = n1 + n2
	 	else if ( op == "-" )
	 		document.form1.t1.value = n1- n2
	 	else if (op == "*")
	 		document.form1.t1.value = n1 * n2
	 	else if (op =="/")
	 		document.form1.t1.value = n1/n2
	 	else if (op=="nCr" )
	 		document.form1.t1.value = fact2(n1)/ fact2(n1 - n2) / fact2(n2)
	 	else if (op =="nPr")
	 		document.form1.t1.value = fact2(n1) / fact2(n1-n2)
	 }
	 //code for equals ends here

	function fact2(n) {    // fact2() for nCr & nPr
		if (errorchecking(n) ==false)
			return

		var answer = 1
		for (i = n; i >=2; i--){
			answer = answer*i
		}
		return answer
	}

	function fact() {
		n = Number(document.form1.t1.value)
		if (errorchecking(n) ==false)
			return
		var answer = 1
		for (i = n; i >=2; i--){
			answer = answer*i
		}
		document.form1.t1.value = answer
	}

	function errorchecking(n) {
		if ( n < 0) {
			alert("Number shouldn't be negative" )
			return false
		}
		var mod = n%1
		if (!mod ==0) {
			alert("The number should be an integer" )
			return false
		}
	}

	function prime(n) {
		if (errorchecking(n) == false)
			return
		var b = true
		for ( i = 2; i<= n/2; i ++ ) {
			if (n % i == 0 ) {
				document.form1.t1.value = "Not prime; its first divided by " + i
				b = false
				break
			}
		}
		if (b)
			document.form1.t1.value = "Is prime"
	}

	function negation() {
		document.form1.t1.value = document.form1.t1.value * -1
	}

	function reset() {
		document.form1.t1.value = ""
		num = ""
	}
</script>
