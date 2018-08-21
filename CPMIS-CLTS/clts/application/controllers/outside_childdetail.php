
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Outside_childdetail extends MY_Controller
{
          function __construct()
          {
              //parent::__construct();
              parent:: __construct();
              /*cache control*/
		    $this->output->set_header("Expires: Tue, 01 Jan 2000 00:00:00 GMT"); 
			$this->output->set_header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
			$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0"); 
			$this->output->set_header("Cache-Control: post-check=0, pre-check=0", false); 
			$this->output->set_header("Pragma: no-cache");
		    //$this->output->set_header("Expires: 0"); 
              $this->load->library('session');
              $this->load->database();
			  
              //loading the data
          }
          
        public function index($type,$from,$to,$param1="",$param2="",$param3="")
        {
        	
          if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }
		 
		 $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('mis_reports_model');
          $this->load->model('child_rescued_model');
		  //To get the account_role_id
           $role=$this->mis_reports_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
            $staff_id=$rolep['staff_id'];
          endforeach;
          
          $data['path']="./uploads/rescued_child_outside/";
          
          $data['btn_show']=true;
          $data['info']="New Rescued Child";
          $data['url']= base_url()."index.php?outside_childdetail/addnew";
          $data['details_url']= base_url()."index.php?outside_childdetail/view";
          $this->data['title']="Report Details";  
          $data['default']="uploads/images.png";
          
          $data['data_list']=$this->child_rescued_model->get_rescued_outsidechilds($roles_id,$dist_id,$stat_id,$staff_id);
          		  
          $this->data['main_content_view'] = $this->load->view('backend/staff/outside_childdetails.php',$data, TRUE);
          $this->generate_data('backend/index', $this->data );
		     
		  }
		  
		  public function addnew()
		  {		  	
		  	$category="SC";//don't remove this
		  	if ($this->session->userdata('staff_login') != 1)
		  	{
		  		$this->session->set_userdata('last_page' , current_url());
		  		redirect(base_url(), 'refresh');
		  	}
		  	$ses_ids=$this->session->userdata('login_user_id');
		  	$this->load->model('child_rescued_model');
		  	$role=$this->child_rescued_model->get_role_id($ses_ids);
		  	foreach($role as $rolep):
		  	$roles_id=$rolep['account_role_id'];
		  	$dist_id=$rolep['district_id'];
		  	$state_id=$rolep['state_id'];
		  	//$block_id=$rolep['block'];
		  	endforeach;
		  	
		  	$this->data['title']="Rescued Child Registration Form";
		  	$child_list['default']="uploads/user.jpg";
		  	$child_list['default_inspect']="uploads/images.png";
		  	$child_data['upload_path']="./uploads/rescued_child_outside/";
		  	$child_list['role_id']=$roles_id;
		  	$child_list['state_id']=$state_id;
		  	$child_list['states_list']=$this->child_rescued_model->get_states_list();
		  	$child_list['states_list_outside']=$this->child_rescued_model->get_states_outsidechild($state_id);
		  	$child_list['states_list_inside']=$this->child_rescued_model->get_states_bihar();
		  	$child_list['district_bihar']=$this->child_rescued_model->get_districts_list('IND010');	
		  	$child_list['blocks_list']=$this->child_rescued_model->get_block_lists('IND010028');
		  	$child_list['district_list']=$this->child_rescued_model->get_districts_list($state_id);
		  	$this->data['main_content_view'] = $this->load->view('backend/staff/outside_rescue_child',$child_list, TRUE);
		  	$this->generate_data('backend/index', $this->data );
		  	
		  }
		  
		  
		  public function create_outside_rescued($param1="",$param2="")
		  {
		  	if ($this->session->userdata('staff_login') != 1)
		  	{
		  		$this->session->set_userdata('last_page' , current_url());
		  		redirect(base_url(), 'refresh');
		  	}
		  	$this->load->model('child_rescued_model');
		  	$ses_ids=$this->session->userdata('login_user_id');
		  		$this->child_rescued_model->create_child_outsiderescued($ses_ids);	 
		  	
		  		$data['btn_show']=true;
		  		$data['info']="New Rescued Child";
		  		$data['url']= base_url()."index.php?outside_childdetail/addnew";
		  		
		  	$this->data['title']="Rescued Child List";
		  	$this->data['main_content_view'] = $this->load->view('backend/staff/outside_childdetails.php',$data, TRUE);
		  	$this->generate_data('backend/index', $this->data );

		  }
		  
		  public function view($param1="",$param2="")
		  {
		  	if ($this->session->userdata('staff_login') != 1)
		  	{
		  		$this->session->set_userdata('last_page' , current_url());
		  		redirect(base_url(), 'refresh');
		  	}
		  	$ses_ids=$this->session->userdata('login_user_id');
		  	$this->load->model('child_rescued_model');
		  	$role=$this->child_rescued_model->get_role_id($ses_ids);
		  	foreach($role as $rolep):
		  	$roles_id=$rolep['account_role_id'];
		  	$dist_id=$rolep['district_id'];
		  	$state_id=$rolep['state_id'];
		  	endforeach;
		  	//dont know why it is required
		  
		  	///
		  	$this->data['title']="Child Detail";
		  	$child_data['view_child_data']	=	$this->child_rescued_model->get_outsidechild_data($param1);
		  	$child_data['default']="uploads/user.jpg";
		  	$child_data['upload_path']="./uploads/rescued_child_outside/";
		  	$child_data['upload_path_bonded']="./uploads/rescued_child_outside/child_bonded_labour";
		  	$child_data['upload_path_lbr']="./uploads/rescued_child_outside/child_labour";
		  	$child_data['upload_path_age']="./uploads/rescued_child_outside/age_lbr";
		  	$child_data['upload_path_othr']="./uploads/rescued_child_outside/other";
		  	$child_data['roll_id']=$roles_id ;
		  	
		  	//print_r(  $child_data);
		  	$this->data['main_content_view'] = $this->load->view('backend/staff/child_outsiderescue.php', $child_data, TRUE);
		  	$this->generate_data('backend/index', $this->data );
		  	
		  }
		  
		  
		  
		 }
