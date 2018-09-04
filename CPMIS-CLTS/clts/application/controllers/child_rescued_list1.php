
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the Child _rescue
*By Godti Satyanarayan
*addnew() to add register mew rescued child  information(only view )
*edit() to update the information of rescued child(only view )
*view() to view the details record of crescued child(only view )
*ChilldRescuedRecord() actuial database operations for child rescued (new record ,update)
*/

class Child_rescued_list extends MY_Controller
{
          function __construct()
          {
              //parent::__construct();
              parent:: __construct();
              /*cache control*/
              $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
              $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
              $this->output->set_header('Pragma: no-cache');
              $this->load->library('session');
              $this->load->database();
              //loading the data
          }
      public function index()
        { 
          if ($this->session->userdata('staff_login') != 1)
          {
            $this->session->set_userdata('last_page' , current_url());
            redirect(base_url(), 'refresh');
          }
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('child_rescued_model');
          //Toget the account_role_id
          $role=$this->child_rescued_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $stat_id=$rolep['state_id'];
          endforeach;
            $child_list=array();
            $child_list['btn_show']=false;
            if($roles_id==2 || $roles_id==5 || $roles_id==7 || $roles_id==13)
            {
                $child_list['btn_show']=true;
                $child_list['info']="New Child Registration";
                $child_list['url']= base_url()."index.php?child_rescued_list/addnew";
            }

            $child_list['path']="./uploads/child_image/";
            $child_list['default']="uploads/user.jpg";
            $child_list["details_url"]=base_url()."index.php?child_rescued_list/view/";
            $child_list["details_order_url"]=base_url()."index.php?child_rescued_list/vieworder/";
            //added on 11-10-17 for labour act
            $child_list["details_labour_url"]=base_url()."index.php?child_rescued_list/viewlabour/";
            //ended on 11-10-17 for labour act
            $child_list["edit_url"]=base_url()."index.php?child_rescued_list/edit/";
            $child_list['counter']=1;
            $child_list['role_id']=$roles_id;
            $child_list['data_list']=$this->child_rescued_model->get_rescued_childs($roles_id,$dist_id,$stat_id);

           $this->data['title']="List of rescued children";
          $this->data['main_content_view'] = $this->load->view('backend/staff/child_list.php',$child_list, TRUE);
          $this->generate_data('backend/index', $this->data );

        }
        //add new record of child
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
          $child_list['role_id']=$roles_id;
          $child_list['state_id']=$state_id;
          $child_list['district_id']=$dist_id;
          $child_list['states_list']=$this->child_rescued_model->get_states_list();
          //code by poojashree
          //inside and outside details
          $child_list['states_list_outside']=$this->child_rescued_model->get_states_list_outside();
          $child_list['states_list_inside']=$this->child_rescued_model->get_states_bihar();
          
          $child_list['district_list']=$this->child_rescued_model->get_districts_list($state_id);
          $child_list['blocks_list']=$this->child_rescued_model->get_block_lists($dist_id);
          $child_list['castes_list']=$this->child_rescued_model->get_castes_list_default($category);
		  $child_list['workinvoice_list']=$this->child_rescued_model->get_workinvoice();
          $child_list['police_station_list']=$this->child_rescued_model->get_police_station_list($dist_id);
          $child_list['pincode_list']=$this->child_rescued_model->get_pincode_list($dist_id);
          if($roles_id==2 || $roles_id==5 || $roles_id==7 || $roles_id==13)
          {
          $this->data['main_content_view'] = $this->load->view('backend/staff/child_rescued.php',$child_list, TRUE);
          $this->generate_data('backend/index', $this->data );
          }else{
          	
          	redirect(base_url() . 'index.php?login', 'refresh');
          }

        }


        //view details record of child
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
          if($param2==3){
      	$this->child_rescued_model->cwc_for_notified($param1);

      		}else {
      			if($param2 == 2){
      				$this->child_rescued_model->cwc_notified($param1);
              //print_r($param2);
      			}else{
      				if($param2 == 1){
                  //print_r($param2);
      			       $this->child_rescued_model->ls_notified($param1);
      				}
      			}
      		}
          ///
          $this->data['title']="Child Detail";
          $child_data['view_child_data']	=	$this->child_rescued_model->get_child_data($param1);
          $child_data['default']="uploads/user.jpg";
          $child_data['upload_path']="./uploads/child_image/";

            //print_r(  $child_data);
          $this->data['main_content_view'] = $this->load->view('backend/staff/child_detail.php', $child_data, TRUE);
          $this->generate_data('backend/index', $this->data );

        }

        //pooja
        
        
        //view details record of child
        public function vieworder($param1="",$param2="")
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
        	if($param2==3){
        		$this->child_rescued_model->cwc_for_notified($param1);
        		
        	}else {
        		if($param2 == 2){
        			$this->child_rescued_model->cwc_notified($param1);
        			//print_r($param2);
        		}else{
        			if($param2 == 1){
        				//print_r($param2);
        				$this->child_rescued_model->ls_notified($param1);
        			}
        		}
        	}
        	///
        	$this->data['title']="Child Detail";
        	$child_data['view_child_data']	=	$this->child_rescued_model->get_child_data($param1);
        	$child_data['default']="uploads/user.jpg";
        	$child_data['upload_path']="./uploads/child_image/";
        	
        	//print_r(  $child_data);
        	$this->data['main_content_view'] = $this->load->view('backend/staff/child_detail_order_after_production.php', $child_data, TRUE);
        	$this->generate_data('backend/index', $this->data );
        	
        }
        
        
        //pooja
        
        //added by pooja
        //dtails child for all child rescued
        
        //view details record of child
        public function vieworder_rescuechild($param1="",$param2="")
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
        	if($param2==3){
        		$this->child_rescued_model->cwc_for_notified($param1);
        		
        	}else {
        		if($param2 == 2){
        			$this->child_rescued_model->cwc_notified($param1);
        			//print_r($param2);
        		}else{
        			if($param2 == 1){
        				//print_r($param2);
        				$this->child_rescued_model->ls_notified($param1);
        			}
        		}
        	}
        	///
        	$this->data['title']="Rescued Child Detail";
        	$child_data['view_child_data']	=	$this->child_rescued_model->get_child_data($param1);
        	$child_data['default']="uploads/user.jpg";
        	$child_data['upload_path']="./uploads/child_image/";
        	
        	//print_r(  $child_data);
        	$this->data['main_content_view'] = $this->load->view('backend/staff/child_detail_rescued_district.php', $child_data, TRUE);
        	$this->generate_data('backend/index', $this->data );
        	
        }
     
        //added by pooja
        
        //view details record of child
        public function view_track($param1="",$param2="")
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
        	if($param2==3){
        		$this->child_rescued_model->cwc_for_notified($param1);
        		
        	}else {
        		if($param2 == 2){
        			$this->child_rescued_model->cwc_notified($param1);
        			//print_r($param2);
        		}else{
        			if($param2 == 1){
        				//print_r($param2);
        				$this->child_rescued_model->ls_notified($param1);
        			}
        		}
        	}
        	///
        	$this->data['title']="Child Detail";
        	$child_data['view_child_data']	=	$this->child_rescued_model->get_child_data($param1);
        	$child_data['default']="uploads/user.jpg";
        	$child_data['upload_path']="./uploads/child_image/";
        	
        	
        	//print_r(  $child_data);
        	$this->data['main_content_view'] = $this->load->view('backend/staff/child_detail_track.php', $child_data, TRUE);
        	$this->generate_data('backend/index', $this->data );
        	
        }
        
 
        //edit the child record
        public function edit($param1="")
        {
          if ($this->session->userdata('staff_login') != 1)
      		{
      			$this->session->set_userdata('last_page' , current_url());
      			redirect(base_url(), 'refresh');
      		}
          $this->load->model('child_rescued_model');
          $ses_ids=$this->session->userdata('login_user_id');
          $this->load->model('child_rescued_model');
          $role=$this->child_rescued_model->get_role_id($ses_ids);
          foreach($role as $rolep):
            $roles_id=$rolep['account_role_id'];
            $dist_id=$rolep['district_id'];
            $state_id=$rolep['state_id'];
          endforeach;
              $this->data['title']="Edit Child Rescued";
      		  $child_data['edit_child_data']	=	$this->child_rescued_model->get_child_data($param1);
      		  $child_data['default']="uploads/user.jpg";
      		  $child_data['default_inspect']="uploads/images.png";
      		  $child_data['inspect_path']="./uploads/inspection_report/";
              $child_data['upload_path']="./uploads/child_image/";
              $child_data['role_id']=$roles_id;
              $child_data['state_id']=$state_id;//User Login State
              $child_data['district_id']=$dist_id;//User Login District
              $child_data['states_list']=$this->child_rescued_model->get_states_list();
              $child_data['district_list']=$this->child_rescued_model->get_districts_list($state_id);
              //code by poojashree
              //inside and outside details
              $child_data['states_list_outside']=$this->child_rescued_model->get_states_list_outside();
              $child_data['states_list_inside']=$this->child_rescued_model->get_states_bihar();
           
              $child_data['blocks_list']=$this->child_rescued_model->get_block_lists($dist_id);
				$child_data['workinvoice_list']=$this->child_rescued_model->get_workinvoice();
			  $category=$this->child_rescued_model->get_category($param1);
			  $block=$this->child_rescued_model->get_child_block($param1);//Child Block
			  $child_dist=$this->child_rescued_model->get_child_dist($param1);//Child District
			  
			  //print_r($child_dist);
			  $child_data['castes_list']=$this->child_rescued_model->get_castes_list_default($category[0][category],$category[0][cast]);
			  $child_data['panchayat_lists']=$this->child_rescued_model->get_panchayat_name_list($block[0][block]);
			  $child_data['police_station_list']=$this->child_rescued_model->get_police_station_list($dist_id);
			  //print_r($child_data['police_station_list']);
			  $child_data['pincode_list']=$this->child_rescued_model->get_pincode_list($dist_id);
              $this->data['main_content_view'] = $this->load->view('backend/staff/child_rescued_edit.php', $child_data, TRUE);
              $this->generate_data('backend/index', $this->data );
        }
        public function ChilldRescuedRecord($param1="",$param2="")
        {
                if ($this->session->userdata('staff_login') != 1)
                {
                  $this->session->set_userdata('last_page' , current_url());
                  redirect(base_url(), 'refresh');
                }
              $this->load->model('child_rescued_model');
                  $ses_ids=$this->session->userdata('login_user_id');
                  if ($param1		==	'create')  {
                    $this->child_rescued_model->create_child_rescued($ses_ids);
                    //redirect(base_url(), 'refresh');
                    //added by poojashree
                    //redirect(base_url() . 'index.php?child_rescued_list', 'refresh');
                    //$this->load->view("backend/staff/modal_msg_newReg.php");
                      }
                    //=====================Not changed yet=============================
                   if ($param1 == 'activate') {
                          $this->crud_model->activate_project($param2);
                          redirect(base_url() . 'index.php?staff/report_child/' . $param2, 'refresh');
                      }
                  if ($param1 == 'child_detail_lc_approval') {
                          $this->crud_model->child_detail_lc_approval_active($param2);
                          redirect(base_url() . 'index.php?staff/child_rescued_Before/' . $param2, 'refresh');
                      }
                  //=======================================================================================

                  if ($param1==	'update')
                  {
                    $this->child_rescued_model->update_child_rescued($param2);

                  }



        }
       public function get_castes_list($category)
        {
            $this->load->model('child_rescued_model'); 
               echo $this->child_rescued_model->get_castes_list($category);

            
        }
		public function get_police_station_list($dist)
        {
            $this->load->model('child_rescued_model');
            echo $this->child_rescued_model->get_police_station_list_frnt($dist); 
        }
		//new pabitra
		public function get_police_station_inside($dist)
        {
            $this->load->model('child_rescued_model');
            echo $this->child_rescued_model->get_police_station_inside_frnt($dist); 
        }
		public function get_pincode_list($dist)
        {
                $this->load->model('child_rescued_model');
                echo $this->child_rescued_model->get_pincode_list_frnt($dist);
        }
		public function get_panchayat_name_list($block)
        {
                $this->load->model('child_rescued_model');
				//print_r()
                echo $this->child_rescued_model->get_panchayat_names_frnt($block);
        }
		///down load the fir copy
		public function download_fir()
		{ 
		    $this->load->model('child_rescued_model');
			$data['fir_data']="";
               
				$this->data['main_content_view'] = $this->load->view('backend/staff/fir.php', $data, TRUE);
               $this->_gen_pdf($this->data['main_content_view'] );	
 
		}
		
			//GENRATE PDF FILE
		public function _gen_pdf($html,$paper='A4')
		{
			//this the the PDF filename that user will get to download
			$pdfFilePath = "output_pdf_name.pdf";
			//load mPDF library
			$this->load->library('mpdf/mpdf');
			$mpdf=new mPDF('utf-8',$paper);

			//generate the PDF from the given html
			$mpdf->WriteHTML($html);
			$mpdf->Output("FirCopy.pdf",'D');
		}
		
		//added by pooja 
		//on 11-10-17
		//labour act child details
		public  function viewlabour($param1="",$param2="")
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
			if($param2==3){
				$this->child_rescued_model->cwc_for_notified($param1);
				
			}else {
				if($param2 == 2){
					$this->child_rescued_model->cwc_notified($param1);
					//print_r($param2);
				}else{
					if($param2 == 1){
						//print_r($param2);
						$this->child_rescued_model->ls_notified($param1);
					}
				}
			}
			///
			$this->data['title']="Child Detail";
			$child_data['view_child_data']	=	$this->child_rescued_model->get_child_data($param1);
			$child_data['default']="uploads/user.jpg";
			$child_data['upload_path']="./uploads/child_image/";
			
			//print_r(  $child_data);
			$this->data['main_content_view'] = $this->load->view('backend/staff/child_detail_labour_act_complaiance.php', $child_data, TRUE);
			$this->generate_data('backend/index', $this->data );
		
		}
		  
}
