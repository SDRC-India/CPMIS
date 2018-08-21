<!-- 
@author Swarna (swarnaprava@sdrc.co.in)
 -->
 
 <div class="footerArea" id="footer" >
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-unicef">
                 <div style="margin-top:25px;  color:#fff;">Supported by
                       <a href="http://www.unicef.org" target="_blank"><img src="resources/image/unisef2.png" width="183px" alt="Unicef"></a>  
                 </div>
                </div>
                 <div class="col-md-1" style="text-align:center;"><img src="resources/image/bihar_logo_dark.jpg" width="70"></div>
                 <div class="col-md-4 terms-policy-block" style="text-align:center; margin-top:22px; color:#fff;">
                 <a href="https://www.cpmis.org/terms.php" ng-click="confirmNavigate1()" style="color:#fff;" target="_blank">Terms of Use</a> |<a href="https://www.cpmis.org/disclaimer.php" ng-click="confirmNavigate2()" style="color:#fff;" target="_blank">Disclaimer</a> | <a href="https://www.cpmis.org/privacy-policy.php" ng-click="confirmNavigate3()" style="color:#fff;" target="_blank">Privacy Policy</a> | <a href="https://www.cpmis.org/sitemap.php" ng-click="confirmNavigate4()" style="color:#fff;" target="_blank">Sitemap</a>
                  <br>
                  © copyright 2018 CPMIS              
                 </div>
                 <div class="col-md-2" style="text-align:center; margin-top:25px;"><!--Visitor Count: --></div>
                 
              <div class="col-md-2 footer-sdrc"> 
                <div style="margin-top:22px; color:#fff;">
                 <p>Powered by <a href="http://sdrc.co.in/" target="_blank" style="color:#fea32c; font-size:16px;"><strong>SDRC</strong></a></p>
                </div>               
                </div>
            </div>            
        </div>
    </div>
    
    <!-- -Modal Start termsPage -->
	<div class="modal fade" id="confirmationModalTermsPage" data-keyboard="false" data-backdrop="static"
		tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="col-md-12 modal-content modalView">
				<div class="modal-header succesmodal ">
				<img src="resources/image/svgIcons/confirm_icon.svg" height="25px" />
				<label class="modalMsg">Confirm</label>
				</div>
				<div class="modal-body">
				<h4 class="modal-title" id="myModalLabel">Are you sure you want to leave?</h4>
					<p style="text-align: center">
						<button id="button3id" name="button3id" class="btn btn-info bigbutton"
							type="button" class="close" data-dismiss="modal" aria-hidden="true" 
							onclick="location.href='cpmistermspage'">
							OK</button>
							<button id="button3id" name="button3id" class="btn btn-info bigbutton"
							type="submit" class="close" 
							data-dismiss="modal" aria-hidden="true">Cancel</button>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- --Modal ends for termsPage  -->
    
      
    <!-- -Modal Start disclaimer page -->
	<div class="modal fade" id="confirmationModalDisclaimerPage" data-keyboard="false" data-backdrop="static"
		tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="col-md-12 modal-content modalView">
				<div class="modal-header succesmodal ">
				<img src="resources/image/svgIcons/confirm_icon.svg" height="25px" />
				<label class="modalMsg">Confirm</label>
				</div>
				<div class="modal-body">
				<h4 class="modal-title" id="myModalLabel">Are you sure you want to leave?</h4>
					<p style="text-align: center">
						<button id="button3id" name="button3id" class="btn btn-info bigbutton"
							type="button" class="close" data-dismiss="modal" aria-hidden="true" 
							onclick="location.href='cpmisdisclaimerpage'">
							OK</button>
							<button id="button3id" name="button3id" class="btn btn-info bigbutton"
							type="submit" class="close" 
							data-dismiss="modal" aria-hidden="true">Cancel</button>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- --Modal ends disclaimer page  -->
    
    <!-- -Modal Start privacy page -->
	<div class="modal fade" id="confirmationModalPrivacyPage" data-keyboard="false" data-backdrop="static"
		tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="col-md-12 modal-content modalView">
				<div class="modal-header succesmodal ">
				<img src="resources/image/svgIcons/confirm_icon.svg" height="25px" />
				<label class="modalMsg">Confirm</label>
				</div>
				<div class="modal-body">
				<h4 class="modal-title" id="myModalLabel">Are you sure you want to leave?</h4>
					<p style="text-align: center">
						<button id="button3id" name="button3id" class="btn btn-info bigbutton"
							type="button" class="close" data-dismiss="modal" aria-hidden="true" 
							onclick="location.href='cpmisprivacypage'">
							OK</button>
							<button id="button3id" name="button3id" class="btn btn-info bigbutton"
							type="submit" class="close" 
							data-dismiss="modal" aria-hidden="true">Cancel</button>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- --Modal ends for privacy page  -->
	
	<!-- -Modal Start sitemap page -->
	<div class="modal fade" id="confirmationModalSitemapPage" data-keyboard="false" data-backdrop="static"
		tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="col-md-12 modal-content modalView">
				<div class="modal-header succesmodal ">
				<img src="resources/image/svgIcons/confirm_icon.svg" height="25px" />
				<label class="modalMsg">Confirm</label>
				</div>
				<div class="modal-body">
				<h4 class="modal-title" id="myModalLabel">Are you sure you want to leave?</h4>
					<p style="text-align: center">
						<button id="button3id" name="button3id" class="btn btn-info bigbutton"
							type="button" class="close" data-dismiss="modal" aria-hidden="true" 
							onclick="location.href='cpmissitemappage'">
							OK</button>
							<button id="button3id" name="button3id" class="btn btn-info bigbutton"
							type="submit" class="close" 
							data-dismiss="modal" aria-hidden="true">Cancel</button>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- --Modal ends for sitemap page  -->
    
<!--    	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>  -->
    <script type="text/javascript">
$(function() {
    // this will get the full URL at the address bar
    var url = window.location.href;

    // passes on every "a" tag
    $("#myNavbar a").each(function() {
        // checks if its  same on the address bar
        if (url == (this.href)) {
            $(this).closest("li").addClass("activePage");
//             for making parent of submenu active
//            $(this).closest("li").parent().parent().addClass("activePage");
        }
    });
});        





</script>