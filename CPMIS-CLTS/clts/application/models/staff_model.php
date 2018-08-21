
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Staff_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }

        public function get_staff_list()
        {
          $this->db->select('*,dchild_area_detail.area_name as district_name, schild_area_detail.area_name as state_name')
                ->join('child_area_detail as dchild_area_detail','staff.district_id= dchild_area_detail.area_id')
                ->join('child_area_detail as schild_area_detail','staff.state_id= schild_area_detail.area_id')
                ->order_by('staff_id' , 'desc');
                return $this->db->get('staff')->result_array();
        }
        //create staff
        function create_staff() {
            $data['name'] = $this->input->post('name');
    	    $data['state_id'] = $this->input->post('category');
    		$data['district_id'] = $this->input->post('choices');
            $data['account_role_id'] = $this->input->post('account_role_id');
            $data['user_name'] = $this->input->post('user_name');
            $data['password'] = sha1($this->input->post('password'));
            $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('phone');
            $data['skype_id'] = $this->input->post('skype_id');
            $data['facebook_profile_link'] = $this->input->post('facebook_profile_link');
            $data['linkedin_profile_link'] = $this->input->post('linkedin_profile_link');
            $data['twitter_profile_link'] = $this->input->post('twitter_profile_link');
            $this->db->insert('staff', $data);
            $staff_id = mysql_insert_id();
            // email notification check
            if ($this->input->post('notify_check') == 'yes')
                $this->email_model->notify_email('new_staff_account_opening', $staff_id, $this->input->post('password'));
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/staff_image/' . $staff_id . '.jpg');
        }
        //update staff
        function update_staff($staff_id) {
            $data['name'] = $this->input->post('name');
        		$data['state_id'] = $this->input->post('category');
        		$data['district_id'] = $this->input->post('choices');
            $data['account_role_id'] = $this->input->post('account_role_id');
            $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('phone');
            $data['skype_id'] =  trim($this->input->post('skype_id'));
            $data['facebook_profile_link'] = trim($this->input->post('facebook_profile_link'));
            $data['linkedin_profile_link'] =  trim($this->input->post('linkedin_profile_link'));
            $data['twitter_profile_link'] =  trim($this->input->post('twitter_profile_link'));
            $this->db->where('staff_id', $staff_id);
            $this->db->update('staff', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/staff_image/' . $staff_id . '.jpg');
        }
        ///delete staff
        function delete_staff($staff_id) {
            $this->db->where('staff_id', $staff_id);
            $this->db->delete('staff');
        }
        public function get_staff_data($staff_id)
        {

          return  $this->db->get_where('staff' , array('staff_id' => $staff_id))->result_array();
        }



}
