
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Account_role_model extends CI_Model {
  function __construct()
  {
      parent::__construct();
      $this->load->database();

  }
  public function get_account_role()
    {
      return   $this->db->order_by('account_role_id' , 'desc')->get('account_role' )->result_array();

    }
    public function get_account_role_data($account_role_id)
      {
        return	$this->db->get_where('account_role' , array('account_role_id' => $account_role_id))->result_array();

      }
  ////////account_roles/////////////
  function create_account_role() {
      $checked_permissions = $this->input->post('permission');
      $total_checked_values = count($checked_permissions);
      $permissions = '';
      for ($i = 0; $i < $total_checked_values; $i++) {
          $permissions .= $checked_permissions[$i] . ",";
      }
      $data['account_permissions'] = $permissions;
      $data['name'] = $this->input->post('name');
      $this->db->insert('account_role', $data);
  }

  function update_account_role($account_role_id) {
      $checked_permissions = $this->input->post('permission');
      $total_checked_values = count($checked_permissions);
      $permissions = '';
      for ($i = 0; $i < $total_checked_values; $i++) {
          $permissions .= $checked_permissions[$i] . ",";
      }
      $data['account_permissions'] = $permissions;
      $data['name'] = $this->input->post('name');
      $this->db->where('account_role_id', $account_role_id);
      $this->db->update('account_role', $data);
  }

  function delete_account_role($account_role_id) {
      $this->db->where('account_role_id', $account_role_id);
      $this->db->delete('account_role');
  }




}
