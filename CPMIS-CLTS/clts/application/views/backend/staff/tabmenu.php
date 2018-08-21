<!----------------start of tab menu------------------>

<div class="col-md-12">
  <div id="menu1" role="tablist">
    <ul class="nav nav-tabs">

      <li class="<?php if($edu_tab_active)echo 'active';?> "><a href="<?php echo $edu_tab_link;?>"> <span><?php echo $edu_tab_name ?></span> </a></li>
      <li class="<?php if($hel_tab_active)echo 'active';?> "><a href="<?php echo $hel_tab_link;?>"> <span><?php echo $hel_tab_name ?></span> </a></li>
      <li class="<?php if($fam_tab_active)echo 'active';?> "><a href="<?php echo $fam_tab_link;?>"> <span><?php echo $fam_tab_name ?></span> </a></li>
      <li class="<?php if($eco_tab_active)echo 'active';?> "><a href="<?php echo $eco_tab_link;?>"> <span><?php echo $eco_tab_name ?></span> </a></li>
      <li class="<?php if($rea_tab_active)echo 'active';?> "><a href="<?php echo $rea_tab_link;?>"> <span><?php echo $rea_tab_name ?></span> </a></li>
      <li class="<?php if($sts_tab_active)echo 'active';?> "><a href="<?php echo $sts_tab_link;?>"> <span><?php echo $sts_tab_name ?></span> </a></li>
      <li class="<?php if($hab_tab_active)echo 'active';?> "><a href="<?php echo $hab_tab_link;?>"> <span><?php echo $hab_tab_name ?></span> </a></li>
      <li class="<?php if($soc_tab_active)echo 'active';?> "><a href="<?php echo $soc_tab_link;?>"> <span><?php echo $soc_tab_name ?></span> </a></li>

      </ul>
  </div>
</div>
<!---------------------------end of tab menu--------------------------->
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
