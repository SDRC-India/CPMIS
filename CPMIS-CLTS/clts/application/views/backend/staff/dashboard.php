

<!-- actulal view part--->
<div class="row" class="dash_content">

   <div class="col-md-12 chat_area" style="text-align:center;margin-top:-40px;">
    <h1 class="dash_content_header1" >Cumulative Statistics</h1>
    <h4>As on <?php echo date("d-m-Y");?></h4>
    <!--chart loads here-->
  

  </div>
  <div class="col-md-6 chat_area">
  <div id="chart"></div>
  </div>
  <!-------------------------------start of the table-------------------------------------------------->
   <div class="col-md-6 chat_area tbldashbord"  >
   <table width="100%"  class='table ' cellspacing="5" cellpadding="8" border="2px" class="paddingtbl"  bordercolor="#0054A5">
     <tr>
       <td width="40%"  align="left" style="border-top: 1px solid #0054A5 !important ; ">Data</td>
       <td width="19%"  align="center" class="table_head" style="border-top: 1px solid #0054A5 !important; ">CURRENT MONTH</td>
       <td width="24%" align="center" class="table_head"  style="border-top: 1px solid #0054A5 !important; ">LAST MONTH</td>
       <td width="17%"  align="center" class="table_head" style="border-top: 1px solid #0054A5 !important; ">TREND</td>
     </tr>
      <tr>
  <?php $j=1;
  foreach ($dashboard as $dashboardData) : ?>

          <?php if($dashboardData[0]!== NULL){?>
        <td align="left" class="table_data" ><p> <?php echo $j." ".$trend_names[$j-1] ?></p> </td>
        <td align="center" valign="middle" class="table_data1"><?php echo  $dashboardData[0]; ?></td>
        <td align="center" valign="middle"  class="table_data1" ><?php echo  $dashboardData[1]; ?></td>
        <td align="center" valign="middle"  class="table_data1" >

          <div class="<?php if($dashboardData[0]>$dashboardData[1] ){ echo  'green'; } else if($dashboardData[0]<$dashboardData[1] ) { echo 'red';  }?>" > <?php

              if($dashboardData[0]==$dashboardData[1])
              {
                echo $dashboardData[2]."%";
              }
            else{
              echo  $dashboardData[0]-$dashboardData[1]."(". $dashboardData[2]."%)";
            } ?></span> </div>
          </td>
      </tr>
    <?php  $j++;
      }
    ?>
    <?php
  endforeach;?>

    </table>
  </div>
</div>
<!-- *************************    end of the table    ***********************------------->
<!-------------------------notification modal start------------------------------>

<div class="modal fade" id="memberModal" >
  <div class="modal-dialog">
    <div class="modal-content modallarge" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <?php  echo $notification['mtitle'] ;?> </h4>
      </div>
      <div class="modal-body ">
        <p>You have total
          <?php if (count($notification['notification1']) > 0):?>
          <span class="badge badge-info"><?php echo count($notification['notification1']);?></span>
          <?php endif;?>
          <?php echo $notification['text1']; ?>
        </p>
        <?php if (count($notification['notification1']) > 0 ):?>
          <span class="badge badge-info"><?php echo count($notification['notification1']);?></span>
          <?php endif;?>
          <ul class="size1">
              <li class="top">

                <?php echo count($notification['notification1']);?> <?php echo $notification['text2']['url_name']?>

              </li>
              <ul class="dropdown-menu-list scroller" style="font-size:19px;">
                <?php foreach($notification['notification1'] as $row): ?>
                <li>

                  <a href="<?php echo base_url();?>index.php?<?php echo $notification['text2']['url_link1'].$row['child_id'].$notification['text2']['url_link2'];?>"> <span class="task"> <span class="desc"><?php echo $row['child_id'];?></span> </span> </a>

                </li>
                <?php endforeach;?>
              </ul>
          </ul>

              <ul class="size1">
                <?php if($notification['notification2']!="" ){ ?>
                <li class="top"> <?php echo count($notification['notification2']); echo $notification['text3']['url_name']; ?>
                      </li>

                  <?php foreach($notification['notification2'] as $row): ?>

                <ul>
                  <li>

                      <a href="<?php echo base_url();?>index.php?<?php echo $notification['text3']['url_link1'].$row['child_id'].$notification['text3']['url_link2'];?>"> <span class="task"> <span class="desc"><?php echo $row['child_id'];?></span> </span> </a>

                  </li>
                </ul>
              <?php endforeach;}?>
              </ul>
              <ul class="size1">
                  <li class="top">
        		<p class="size"><?php echo count($notification['notification3']);?> <?php echo $notification['text4']['url_name'] ?>

        			</li>
        			<ul class="dropdown-menu-list scroller" style="font-size:19px;">
                    <?php foreach($notification['notification3']as $row): ?>
                    <li>

                      <a href="<?php echo base_url();?>index.php?<?php echo $notification['text4']['url_link1'].$row['child_id'].$notification['text4']['url_link2'];?>"> <span class="task"> <span class="desc"><?php echo $row['child_id'];?></span> </span> </a>

            			  </li>
        			   <?php endforeach;?>
                  </ul>
            </ul>
      </div>
      <div class="modal-footer"> </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-------------------------------------end-------------------------------------------------->
<?php if($notification){  ?>
<script type="text/javascript">
$("#cwc_show").hide();
    $(window).load(function(){
        $('#memberModal').modal('show');
    });
$("#show_id").click(function() {
    $("#cwc_show").show();
});
</script>

<?php } ?>

<!--bar chart script-->
<script>
// The new data variable.
var data = [
{letter: "Child rescued", frequency: <?php echo $dashboard['child_rescue'] ?>},
{letter: "Transfered to others", frequency: <?php echo $dashboard['trs_to_val']; ?>},
{letter: "Transfered from others", frequency: <?php echo $dashboard['trs_from_val']; ?>},
{letter: "Child Investigation (Ongoing)", frequency: <?php echo $dashboard['totsdd']; ?>},
{letter: "Entitlement Card Generated", frequency: <?php echo $dashboard['entitled_list_val']; ?>}
];

var margin = {top: 20, right: 20, bottom: 50, left: 40},
/* width = 960 - margin.left - margin.right,
height = 500 - margin.top - margin.bottom;
*/

 width = 420;
height = 300;

var formatPercent = d3.format(".0%");

var x = d3.scale.ordinal()
.rangeRoundBands([0, width], .1);

var y = d3.scale.linear()
.range([height, 0]);

var xAxis = d3.svg.axis()
.scale(x)
.orient("bottom");

var yAxis = d3.svg.axis()
.scale(y)
.orient("left")
//.ticks(d3.max(data, function(d) { return d.frequency; }));
.ticks(5);


var tip = d3.tip()
.attr('class', 'd3-tip')
.offset([-100, 0])
.html(function(d) {
return "<strong>Frequency:</strong> <span style='color:red'>" + d.frequency + "</span>";
})

var svg = d3.select("#chart").append("svg")
.attr("width", width + margin.left + margin.right)
.attr("height", height + margin.top + margin.bottom)
.append("g")
.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

svg.call(tip);

// The following code was contained in the callback function.
x.domain(data.map(function(d) { return d.letter; }));
y.domain([0, d3.max(data, function(d) { return d.frequency; })]);



function wrap(text, width) {
text.each(function() {
var text = d3.select(this),
   words = text.text().split(/\s+/).reverse(),
   word,
   cnt=0,
   line = [],
   lineNumber = 0,
   lineHeight = 1.1,
   y = text.attr("y"),
   dy = parseFloat(text.attr("dy")),
   tspan = text.text(null).append("tspan").attr("x", 0).attr("y", y).attr("dy", dy + "em");
while (word = words.pop()) {
cnt++;
 line.push(word);
 tspan.text(line.join(" "));
 if (tspan.node().getComputedTextLength() > width*1) {
   line.pop();

   if(cnt!=1)
    {
    tspan.text(line.join(" "));
    line = [word];
    }
   else
    word='';
   tspan = text.append("tspan").attr("x", 0).attr("y", y).attr("dy", ++lineNumber * lineHeight + dy + "em").text(word);
//
 }
}
});
}

svg.append("g")
.attr("class", "x axis")
.attr("transform", "translate(0," + height + ")")
.call(xAxis)
.selectAll("text")
.style("text-anchor","middle")
.attr("font-size","12px")
.call(wrap,x.rangeBand());

svg.append("g")
.attr("class", "y axis")
.call(yAxis)
.append("text")
.attr("transform", "rotate(-90)")
.attr("y", -40)
.attr("x", -120)
.attr("dy", ".71em")
.style("text-anchor", "end") .attr("font-size","12px").text("Number");


var bar = svg.selectAll(".bar")
.data(data)
.enter().append("rect")
.attr("class", "bar")
.attr("x", function(d) { return x(d.letter)+13; })
.attr("width", x.rangeBand()-20)
.attr("y", function(d) { return y(d.frequency); })
.style("fill", function(d){
	if(d.letter=="Child Investigation (Ongoing)")
	{
		return "#52BE80";
	}
	else if(d.letter=="Entitlement Card Generated")
	{
		return "#064C04";
	}
	else if(d.letter=="Child rescued")
	{
		return "#D6390B";
	}
	else if(d.letter=="Transfered to others")
	{
		return "#0B83D6";
	}
	else if(d.letter=="Transfered from others")
	{
		return "#C44A23";
	}
	/*else{
		return "#ffa500";
	}*/
	
})
.attr("height", function(d) { return height - y(d.frequency); })
.on('mouseover', showPopover)
.on('mouseout', removePopovers);


svg.selectAll(".bartext")
.data(data)
.enter()
.append("text")
.attr("class", "bartext")
.attr("text-anchor", "middle")
.attr("fill", "#000")
.attr("x", function(d) {
return x(d.letter) + x.rangeBand()/2 ;;
})
.attr("y", function(d) {
return y(d.frequency)-3 ;;
})
.text(function(d){
 return d.frequency;
});



function type(d) {
d.frequency = +d.frequency;
return d;
}



function removePopovers() {
$('.popover').each(function() {
$(this).remove();
});
}

function showPopover(d) {
$(this).popover(
{
title : '',
placement : 'auto top',
container : 'body',
trigger : 'manual',
html : true,
content : function() {
return "<span style='color:#009cff'>" + "Name : "
+ "</span>" + "<span style='color:red'>"
+ d.letter + "</span>" + "<br/>"
+ "<span style='color:#009cff'>"
+ "Data Value : " + "</span>"
+ "<span style='color:red'>" + d.frequency
+ "</span>";

}
});
$(this).popover('show');
}

</script>
