<!-- Footer 
<footer class="footer">
	<div class="row">
		<div class="col-md-3">
			<div style="margin-top: 30px;">

				<a href="http://www.unicef.org" target="_blank">Supported by <img
					src="assets/images/unisef2.png"></a>
			</div>

		</div>
		<div class="col-md-4" style="text-align: right;">

			<img src="assets/images/bihar_logo_red.jpg" width="100">
		</div>
		<div class="col-md-5" style="text-align: right;">

			<div style="margin-top: 35px;">
				<p>
					Powered by <a href="http://sdrc.co.in/" target="_blank"
						style="color: #fea32c; font-size: 16px;"><strong>SDRC</strong></a>
				</p>
			</div>

		</div>
	</div>
	<div>
	
	</div>
</footer>-->
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-unicef">
                 <div style="padding: 34px 0px;" >
                      <a href="http://www.unicef.org" target="_blank" ><span style='color:#A9A9A9;'>Supported by</span> <img
					src="assets/images/unisef2.png" style="height:27px;width:181px;"></a>  
                 </div>
                </div>
                 
                 <div class="col-md-5" style="text-align:center;padding: 0px 0px 0px 100px; ">
                 	
                  <img src="assets/images/bihar_logo_red.jpg" >           
                 </div>
                 <div class="col-md-2" style="text-align:center; margin-top:25px;"><!--Visitor Count: --></div>
                 
              <div class="col-md-2 footer-sdrc" style="padding: 34px 0px;text-align: right;"> 
                <p>
					<span style='color:#A9A9A9;'>Powered by </span><a href="http://sdrc.co.in/" target="_blank"
						style="color: #fea32c; font-size: 16px;"><strong>SDRC</strong></a>
				</p>             
                </div>
            </div>            
        </div>
    </footer>
    <script>
/*	$(document).ready(function(){
		setTimeout(function(){
			if($(".page-container").height() < $(".sidebar-menu").height())
				$(".page-container").height($(".sidebar-menu").height());
		},100)
	})
	*/	
</script>
<script>
	$(document).ready(function(){
		setTimeout(function(){
			$(".page-container").css("min-height", $(".sidebar-menu").css("min-height"))
			$(".sidebar-menu #main-menu .root-level").click(function(){
				setTimeout(function(){
					if($(".root-level.has-sub.opened")[0])
						$(".page-container").height($(".sidebar-menu").height());
					else{
						$(".page-container").height("auto");
						}
				},1000)
			})
			},100)
			
		
		})
	
</script>
<script>
	
</script>