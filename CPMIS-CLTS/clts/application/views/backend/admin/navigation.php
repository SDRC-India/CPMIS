<div class="sidebar-menu">
  <header class="logo-env" >
    <!-- logo -->
    <div class="logo" style=""> <a href="<?php echo base_url();?>"> <img src="assets/images/CLTS_LOGO.png"  style="width:228px;"/> </a> </div>
  </header>
  <div class="sidebar-user-info"> </div>
  <div style="border-top:1px solid rgba(135,135,136,0.2);"></div>
  <ul id="main-menu" class="">
    <!-- DASHBOARD
    <li class=<?php /*?>"<?php if ($page_name == 'dashboard') echo 'active'; ?> "> <a href="<?php echo base_url(); ?>index.php?admin/dashboard"> <i class="entypo-gauge"></i> <span><?php echo get_phrase('dashboard'); ?><?php */?></span> </a> </li>-->
    <!-- STAFF -->
    <li class="<?php if ($page_name == 'staff' || $page_name == 'account_role') echo 'opened active has-sub'; ?> "> <a href="#" > <i class="entypo-user"></i> <span><?php echo get_phrase('staff'); ?></span> </a>
      <ul>
        <li class="<?php if ($page_name == 'staff') echo 'active'; ?> "> <a href="<?php echo base_url(); ?>index.php?admin/staff"> <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_staffs'); ?></span> </a> </li>
        <li class="<?php if ($page_name == 'account_role') echo 'active'; ?> "> <a href="<?php echo base_url(); ?>index.php?admin/account_role"> <span><i class="entypo-dot"></i> <?php echo get_phrase('staff_account_permission'); ?></span> </a> </li>
      </ul>
    </li>
    <!-- ACCOUNT -->
    <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> "> <a href="<?php echo base_url(); ?>index.php?admin/manage_profile"> <i class="entypo-lock"></i> <span><?php echo get_phrase('account'); ?></span> </a> </li>
   
   <!-- police station -->
   <!-- <li class="<?php //if ($page_name == 'add_policestation') echo 'active'; ?> "> <a href="<?php //echo base_url(); ?>index.php?admin/add_policestation"> <i class="entypo-eye"></i> <span><?php //echo get_phrase('add_policestation'); ?></span> </a> </li>-->
    <li class="<?php if ($page_name == 'manage_policestation') echo 'active'; ?> "> <a href="<?php echo base_url(); ?>index.php?admin/policestation_list"> <i class="entypo-lifebuoy"></i> <span><?php echo get_phrase('manage_police_station'); ?></span> </a> </li>
  <!-- schemes list -->
    <li class="<?php if ($page_name == 'manage_scheme') echo 'active'; ?> "> <a href="<?php echo base_url(); ?>index.php?admin/scheme_list"> <i class="entypo-drive"></i> <span><?php echo get_phrase('scheme'); ?></span> </a> </li>
  <!-- IPC sections list -->
    <li class="<?php if ($page_name == 'ipc_sections') echo 'active'; ?> "> <a href="<?php echo base_url(); ?>index.php?admin/ipc_section"> <i class="entypo-flag"></i> <span><?php echo get_phrase('IPC_section'); ?></span> </a> </li>
 <!-- IPC sections list -->
    <li class="<?php if ($page_name == 'wages') echo 'active'; ?> "> <a href="<?php echo base_url(); ?>index.php?admin/wages"> <i class="entypo-cloud"></i> <span><?php echo get_phrase('wages'); ?></span> </a> </li>
 <!-- caste sections list -->
    <li class="<?php if ($page_name == 'caste') echo 'active'; ?> "> <a href="<?php echo base_url(); ?>index.php?admin/caste"> <i class="entypo-chat"></i> <span><?php echo get_phrase('caste'); ?></span> </a> </li>
 <!-- panchayat sections list -->
    <li class="<?php if ($page_name == 'panchayat_name') echo 'active'; ?> "> <a href="<?php echo base_url(); ?>index.php?admin/panchayat_name"> <i class="entypo-address"></i> <span><?php echo get_phrase('Manage_Panchayat'); ?></span> </a> </li>
 <!-- pincode sections list -->
    <li class="<?php if ($page_name == 'pincode_list') echo 'active'; ?> "> <a href="<?php echo base_url(); ?>index.php?admin/pincode_list"> <i class="entypo-bell"></i> <span><?php echo get_phrase('pincode_list'); ?></span> </a> </li>
 
  </ul>
</div>
