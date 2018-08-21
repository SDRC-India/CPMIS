

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Notification_model extends CI_Model {
      function __construct()
      {
          parent::__construct();
          $this->load->database();

      }
      //show child rescued for various departments
        public function getProjects($role_id)
        {
                      $project="";
                        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
                        foreach($role as $rolep):
                          $roles_id=$rolep['account_role_id'];
                          $dist_id=$rolep['district_id'];
                          $stat_id=$rolep['state_id'];
                        endforeach;
                        if($roles_id==2 ) {
                            $this->db->where('ls_notified' , 'N')->where('district_id',$dist_id)->where('account_role_id',5);
                            $this->db->order_by('child_id' , 'desc');
                            $projects	=	$this->db->get('child_basic_detail')->result_array();
                          }
                          if($roles_id==6 || $roles_id==7) {
                            $this->db->where('ls_activate','Y')->where('pstatus','N')->where('district_id',$dist_id)->where('cwc_notified','N');
                            $this->db->order_by('child_id' , 'desc');
                            $projects	=	$this->db->get('child_basic_detail')->result_array();
                          }

                    return  $projects;
        }
        //Child rescued Registered by CWC
        public function getPorjectsCwc($role_id)
        {
                        $projectsCwc="";
                        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
                        foreach($role as $rolep):
                        $roles_id=$rolep['account_role_id'];
                        $dist_id=$rolep['district_id'];
                        $stat_id=$rolep['state_id'];
                        endforeach;
                            $this->db->where('pstatus','N')
                               ->where('district_id',$dist_id)
                               ->where('ls_notified','N')
                               ->where('account_role_id',7);
                          $this->db->order_by('child_id' , 'desc');
                          $projectsCwc	=	$this->db->get('child_basic_detail')->result_array();
                    return  $projectsCwc;
        }
        //new child transfered form other districts
        public function getFrwrdCwc($role_id)
        {
                         $frwrdcwc="";
                        $role = $this->db->get_where('staff',array('staff_id'=>$role_id))->result_array();
                        foreach($role as $rolep):
                        $roles_id=$rolep['account_role_id'];
                        $dist_id=$rolep['district_id'];
                        $stat_id=$rolep['state_id'];
                        endforeach;

                      //child_rescued by CWC
                      $sql_trsfr="Select child_id from final_order where transfer_to='" .$dist_id . "' and child_id in(Select child_id from child_basic_detail where cwc_for_notified ='N')";
                      $frwrdcwc=$this->db->query($sql_trsfr)->result_array();

                    return  $frwrdcwc;
        }


}
