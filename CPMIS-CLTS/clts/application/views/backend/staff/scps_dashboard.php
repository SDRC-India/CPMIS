

<h2 style="font-weight:100;">Aggregate Data For <?php print_r($area[0]['area_name']) ; ?></h2>
<br />
<form name="frm2" method="post" action="<?php echo base_url();?>index.php?dashboard" >
  <div style="float:left;">
    <h3>District</h3>
  </div>
  <div style="float:left; padding-top:20px; padding-left:10px;">
    <select name="district" onchange="document.frm2.submit()">
      <option value="">--Select District--</option>
      <?php

	foreach($districts as $district):
?>
      <option value="<?php echo $district['area_id']; ?>" <?php if($area[0]['area_id']==$district['area_id']){ echo 'selected'; }  ?>><?php echo $district['area_name']; ?></option>
      <?php
	endforeach;
?>
      <!--code for dcpu-->
      <!--end-->
    </select>
  </div>
  <div style="clear:both;"></div>
</form>
<div class="row">
<!-------------------------------start of the table-------------------------------------------------->
<div class="col-md-6 chat_area" style="text-align:center;margin-top:110px;">
  <table width="100%"  class='table borderless' cellspacing="5" cellpadding="8" style=" padding:5px;">
    <tr>
      <td width="40%" align="left"></td>
      <td width="19%" align="center" class="table_head">CURRENT MONTH</td>
      <td width="24%" align="center" class="table_head">LAST MONTH</td>
      <td width="17%" align="center" class="table_head">TREND</td>
    </tr>
    <tr>
<?php $i=1;$j=1;
foreach ($dashboard as $dashboardData) : ?>

        <?php if($dashboardData[0]!== NULL){?>
      <td align="left" class="table_data" ><p> <?php echo $j." ".$trend_names[$i-1] ?></p> </td>
      <td align="center" valign="middle" class="table_data1"><strong><?php echo  $dashboardData[0]; ?></strong></td>
      <td align="center" valign="middle"  class="table_data1" ><strong><?php echo  $dashboardData[1]; ?></strong></td>
      <td align="center" valign="middle"  class="table_data1" ><strong>

        <div class="<?php if($dashboardData[0]>$dashboardData[1] ){ echo  'green'; } else if($dashboardData[0]<$dashboardData[1] ) { echo 'red';  }?>" > <?php

            if($dashboardData[0]==$dashboardData[1])
            {
              echo $dashboardData[2]."%";
            }
          else{
            echo  $dashboardData[0]-$dashboardData[1]."(". $dashboardData[2]."%)";
          } ?></span> </div>
        </strong></td>
    </tr>
  <?php  $j++;
    }
  ?>
  <?php $i++;
endforeach;?>

  </table>
</div>
</div>
<!-- *************************    end of the table    ***********************------------->
