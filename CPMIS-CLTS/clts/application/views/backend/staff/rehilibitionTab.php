<!------------------------------tab menu start----------------------------->

<div class="col-md-12">
<div id="menu1" role="tablist">
<ul class="nav nav-tabs">
<li class="<?php if($lrd_tab_active)echo 'active';?> "><a href="<?php echo $lrd_tab_link;?>">

			<span> <?php echo $lrd_tab_name?></span></a>
</li>

<?php if($ed_tab_link):?>
<li class="<?php if($ed_tab_active) echo 'active';?> "><a href="<?php echo $ed_tab_link;?>">
			<span> <?php echo $ed_tab_name?></span></a>
</li>
<?php endif;?>
<?php if($rd_tab_link):?>
<li class="<?php if($rd_tab_active)echo 'active';?> "><a href="<?php echo $rd_tab_link;?>">

			<span> <?php echo $rd_tab_name?></span></a>
</li>
<?php endif;?>
<?php if($ud_tab_link):?>
<li class="<?php if($ud_tab_active)echo 'active';?> "><a href="<?php echo $ud_tab_link;?>">

			<span> <?php echo $ud_tab_name?></span></a>
</li>
<?php endif;?>
<?php if($revd_tab_link):?>
<li class="<?php if($revd_tab_active)echo 'active';?> "><a href="<?php echo $revd_tab_link;?>">

			<span> <?php echo $revd_tab_name?></span></a>
</li>
<?php endif;?>
<?php if($head_tab_link):?>
<li class="<?php if($head_tab_active)echo 'active';?> "><a href="<?php echo $head_tab_link;?>">

			<span> <?php echo $head_tab_name?></span></a>
</li>
<?php endif;?>
<?php if($scstw_tab_link):?>
<li class="<?php if($scstw_tab_active)echo 'active';?> "><a href="<?php echo $scstw_tab_link;?>">

			<span> <?php echo $scstw_tab_name?></span></a>
</li>
<?php endif;?>
<?php if($fcs_tab_link):?>
<li class="<?php if($fcs_tab_active)echo 'active';?> "><a href="<?php echo $fcs_tab_link;?>">

			<span> <?php echo $fcs_tab_name?></span></a>
</li>
<?php endif;?>
<?php if($mw_tab_link):?>
<li class="<?php if($mw_tab_active)echo 'active';?> "><a href="<?php echo $mw_tab_link;?>">

			<span> <?php echo $mw_tab_name?></span></a>
</li>
<?php endif;?>
<?php if($sw_tab_link):?>
<li class="<?php if($sw_tab_active)echo 'active';?> "><a href="<?php echo $sw_tab_link;?>">

			<span> <?php echo $sw_tab_name?></span></a>
</li>
<?php endif;?>
<?php if($rs_tab_link):?>
<li class="<?php if($rs_tab_active)echo 'active';?> "><a href="<?php echo $rs_tab_link;?>">

			<span> <?php echo $rs_tab_name?></span></a>
</li>
<?php endif;?>
<?php if($cm_relief_tab_link):?>
<li class="<?php if($cm_relief_tab_active)echo 'active';?> "><a href="<?php echo $cm_relief_tab_link;?>">

			<span> <?php echo $cm_relief_tab_name?></span></a>
</li>
<?php endif;?>
</ul>
</div>
</div>
<!---------------------------tabmenu end------------------------------->
<style>
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
color:#0054A5;
}
.nav > li > a:hover, .nav > li > a:focus {
  text-decoration: none;
  background-color: #0054A5;
  color:#fff;
}
.nav-tabs > li {
  display: inline-block;
  margin-bottom: -1px;
  width: 89px;
}
.nav > li > a:active{

  text-decoration: none;
  background-color: #0054A5;
  color:#fff;
}
.nav-tabs > li > a{
  display: inline-block;
  margin-bottom: -1px;
  border: 1px solid #eee;
}
.nav > li > a {
    position: relative;
    display: block;
    padding: 11px 6px;
}
</style>
