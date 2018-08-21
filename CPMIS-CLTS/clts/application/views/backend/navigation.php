<div class="sidebar-menu">
		<header class="logo-env" >

            <!-- logo -->
			<div class="logo">
				<a href="<?php echo base_url();?>">
					<img src="assets/images/CLTS_LOGO.png"  style="width:228px;"/>
				</a>
			</div>
		</header>
				<?php
		//set menu by godti satyanarayan
				
				function setMenuBar($menu,$role_staff_id)
				{
				
				if (count($menu->arrChilds) > 0)
					{
						echo "<ul id='main-menu' class='border_top' >";

						foreach($menu->arrChilds AS $objItem)
						{
							
							if($role_staff_id==39 && $objItem->menu_name=='Communication')
							{
								
							}
							else{
							echo "<li ><a href='index.php?".$objItem->menu_url."'><i class='".$objItem->icons."'></i>".$objItem->menu_name."</a>";
							setMenuBar($objItem);
							echo "</li>";							
							}

						}
						echo "</ul>";

				}
			}

			setMenuBar($menu,$role_staff_id); 
		?>
</div>

<script  >
//add active class based on url by godti satyanarayan
	$(document).ready(function () {
		 $("#main-menu li a").on("click",function(){
			 
			 if($(this).attr("href")!='index.php?')
			 {	 
			 $('#loading').show();
			 }
		 });
		 
		var url_used="";
		var url = window.location.href.substr(window.location.href
	.lastIndexOf("?")+1);
		var url_cont=url.substr(0,url.indexOf("/"));
		if(url=="dashboard/dcpu")
		{
			url_used=url;
		}
		else{
			if(!url_cont){url_used=url }else{url_used=url_cont}
		}

			 $("#main-menu li a").each(function(){

					 if($(this).attr("href") == 'index.php?'+url_used )
					 {
						 $(this).parent().addClass("active");
						 $(this).parent().parent().parent().addClass("active");
						 
					 }
				 
					 
			 });

	});

</script>
