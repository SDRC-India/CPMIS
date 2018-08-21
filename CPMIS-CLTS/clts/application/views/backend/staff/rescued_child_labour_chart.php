<style>
li {
    list-style: none; 
}
.entypo-right-circled{
display:none;

}
</style>
<?php //print_r($rescued_child[38]);?>
<?php 

$type='rescued_child' ;
include("dashboard_header.php") ;
?>
 <h1 style="text-align:center;" >Rescued Child Labourer Registered By</h1>
<div class="col-md-12">
<div class="col-md-6">
<div class="content">
 
  
  <svg id="donut-chart" style="margin-left:305px;"></svg>
</div>
</div>
<div class="col-md-6">
<ul>
<span class="LS"></span>    
<li>LS</li>
<span class="LEO"></span>    
<li>LEO</li>
<span class="CWC"></span>    
<li>CWC</li>

</ul>
</div>
</div>


<script src="//cdnjs.cloudflare.com/ajax/libs/d3/4.7.2/d3.min.js"></script>
<script src="assets/js/d3pie.min.js"></script>


<script>
var seedData = [{
  "label": <?php echo $rescued_child[38][1];?>,
  "value": <?php echo $rescued_child[38][1];?>,
  "link": ""
},
{
  "label": <?php echo $rescued_child[38][2];?>,
  "value": <?php echo $rescued_child[38][2];?>,
  "link": ""
},
{
	"label": <?php echo $rescued_child[38][3];?>,
	 "value": <?php echo $rescued_child[38][3];?>,
  "link": ""
}];

// Define size & radius of donut pie chart
var width = 350,
    height = 350,
    radius = Math.min(width, height) / 2;

// Define arc colours
var colour = d3.scaleOrdinal(d3.schemeCategory20);

// Define arc ranges
var arcText = d3.scaleOrdinal()
  .range([0, width]);

// Determine size of arcs
var arc = d3.arc()
  .innerRadius(radius - 130)
  .outerRadius(radius - 10);

// Create the donut pie chart layout
var pie = d3.pie()
  .value(function (d) { return d["value"]; })
  .sort(null);

// Append SVG attributes and append g to the SVG
var svg = d3.select("#donut-chart")
  .attr("width", width)
  .attr("height", height)
  .append("g")
    .attr("transform", "translate(" + radius + "," + radius + ")");

// Define inner circle
svg.append("circle")
  .attr("cx", 0)
  .attr("cy", 0)
  .attr("r", 100)
  .attr("fill", "#fff") ;

// Calculate SVG paths and fill in the colours
var g = svg.selectAll(".arc")
  .data(pie(seedData))
  .enter().append("g")
  .attr("class", "arc")
		
  // Make each arc clickable 
  .on("click", function(d, i) {
    window.location = seedData[i].link;
  });

	// Append the path to each g
	g.append("path")
  	.attr("d", arc)
  	.attr("fill", function(d, i) {
    	return colour(i);
  	});

	// Append text labels to each arc
	g.append("text")
  	.attr("transform", function(d) {
    	return "translate(" + arc.centroid(d) + ")";
  	})
  	.attr("dy", ".35em")
  	.style("text-anchor", "middle")
  	.attr("fill", "#fff")
		.text(function(d,i) { return seedData[i].label; })
  
g.selectAll(".arc text").call(wrap, arcText.range([0, width]));

// Append text to the inner circle
svg.append("text")
  .attr("dy", "-0.5em")
  .style("text-anchor", "middle")
  .attr("class", "inner-circle")
  .attr("fill", "#36454f")
  .text(function(d) { return ''; });

svg.append("text")
  .attr("dy", "1.0em")
  .style("text-anchor", "middle")
  .attr("class", "inner-circle")
  .attr("fill", "#36454f")
  .text(function(d) { return ''; });

// Wrap function to handle labels with longer text
function wrap(text, width) {
  text.each(function() {
    var text = d3.select(this),
        words = text.text().split(/\s+/).reverse(),
        word,
        line = [],
        lineNumber = 0,
        lineHeight = 1.1, // ems
        y = text.attr("y"),
        dy = parseFloat(text.attr("dy")),
        tspan = text.text(null).append("tspan").attr("x", 0).attr("y", y).attr("dy", dy + "em");
    console.log("tspan: " + tspan);
    while (word = words.pop()) {
      line.push(word);
      tspan.text(line.join(" "));
      if (tspan.node().getComputedTextLength() > 90) {
        line.pop();
        tspan.text(line.join(" "));
        line = [word];
        tspan = text.append("tspan").attr("x", 0).attr("y", y).attr("dy", ++lineNumber * lineHeight + dy + "em").text(word);
      }
    }
  });
}
</script>