
<style>
h3.head_logo {
    display: none;
}
li {
    list-style: none; 
}
.list-structure{

    padding: 187px 0 0 20px;

}
.child{
    width: 20px;
    height: 20px;
    background-color: #D6390B;
    margin: 0 0px -18px 9px;

}
.child1{
    width: 20px;
    height: 20px;
    background-color: #0B83D6;
    margin: 0 0px -18px 9px;

}
.child2{
    width: 20px;
    height: 20px;
    background-color: #C44A23;
    margin: 0 0px -18px 9px;

}
.child3{
    width: 20px;
    height: 20px;
    background-color: #52BE80;
    margin: 0 0px -18px 9px;

}
.child4{
    width: 20px;
    height: 20px;
    background-color: #064C04;
    margin: 0 0px -18px 9px;

}
.list1{

     padding: 0px 0 0 38px;
     margin-top:5px;
}
</style>
<?php 
//print_r($cumlative_list);
 //echo $dashboard['child_rescue'] ;
include("dashboard_header.php") ;
?>
<!-- actulal view part--->
<div class="row" class="dash_content">
   <div class="col-md-12 chat_area" style="text-align:center;margin-top:10px;">
    <h1 class="dash_content_header1" ><b>Cumulative Statistics</b></h1>
   <!--  <h4>As on <?php echo date("d-m-Y");?></h4>-->
    <!--chart loads here-->
  </div>
  <div class="col-md-8  chat_area">
  <div id="chart" style="padding: 16px 0 0 39px;"></div>
  </div>
  <div class="col-md-4 list-structure">
  <ul>
  <div class="child">
  </div>
  <li class="list1">Child rescued</li>
  <div class="child1">
  </div>
  <li class="list1">Transfered to others</li>
   <div class="child2">
  </div>
  <li class="list1">Transfered from others</li>
   <div class="child3">
  </div>
  <li class="list1">Child Investigation (Ongoing)</li>
   <div class="child4">
  </div>
  <li class="list1">Entitlement Card Generated</li>
  </ul>
  </div>
  <!-------------------------------start of the table-------------------------------------------------->
</div>
<!-- *************************    end of the table    ***********************------------->
<!-------------------------notification modal start------------------------------>
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

 width = 550;
height = 330;

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
.attr("x", -80)
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

<script>
	var FromEndDate = new Date();
$('#from_dt').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true,
"setDate": new Date()
});
</script>
	<script>
var FromEndDate1 = new Date();
$('#to_dt').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate1,
autoclose: true,
date:FromEndDate1
});
</script>
