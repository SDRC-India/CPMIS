
<!-------------------menubar on the top of act edit pages---------------------->


<div class="col-md-12">
<div id="menu1" role="tablist">
<ul class="nav nav-tabs">
<li class="<?php if($lab_tab_active)echo 'active';?> "><a href="<?php echo $lab_tab_link;?>">

					<span><?php echo $lab_tab_name?></span>
				</a>
</li>

<li class="<?php if($wag_tab_active) echo 'active';?> "><a href="<?php echo $wag_tab_link;?>">

					<span><?php echo $wag_tab_name?></span>
				</a>
</li>

	</li>
	<?php  //if($pstatus == 'N'){?>
    <li class="<?php if($ipc_tab_active)echo 'active';?> "><a href="<?php echo $ipc_tab_link;?>">

    					<span><?php echo $ipc_tab_name?></span>
    				</a>
    </li>

    <li class="<?php if($other_tab_active)echo 'active';?> "><a href="<?php echo $other_tab_link;?>">

              <span><?php echo $other_tab_name?></span>
            </a>
    </li>
	<li class="<?php if($uplodfir_tab_active)echo 'active';?> "><a href="<?php echo $uplodfir_tab_link;?>">

              <span><?php echo $FIR_tab_name?></span>
            </a>
    </li>
	<?php //} ?>

</ul>
</div>
</div>
<!------------------end---------------------------------------------------------->



<style>
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
color:#0054A5;
}
.nav > li > a:hover, .nav > li > a:focus {
  text-decoration: none;
  background-color: #0054A5;
  color:#fff;
}
.nav-tabs > li > a{
  display: inline-block;
  margin-bottom: -1px;
  border: 1px solid #eee;
}
</style>
