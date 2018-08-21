<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<?php
/*
*This class is for the award section
*By Poojashree Rout

*/

class Award extends MY_Controller
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
          	$this->load->model('award_model');
          	$data['picture_list'] = $this->award_model->get_all_pics();
          	$data["details_url"]=base_url()."index.php?award/dele_data/";
          	$this->data['title']="List of Awards";
          	
          
          	//code added by pooja for middle man pdf download
          	//On 07.08.17
          	
          	$this->data['main_content_view'] = $this->load->view('backend/staff/award_list.php',$data, TRUE);
          	$this->generate_data('backend/index', $this->data );
          }
	 
         public function file_data(){
         	$this->load->model('award_model');
         	$this->load->library('image_lib');
         	$this->data['title']="Upload Images";
         	//echo "ddd";
          	//validate the form data
         	
          	$this->form_validation->set_rules('pic_title', 'Picture Title', 'required');
          	
          	if ($this->form_validation->run() == FALSE){
          		
          		$this->data['main_content_view'] = $this->load->view('backend/staff/upload_form.php',$data, TRUE);
          		$this->generate_data('backend/index', $this->data );
          	}else{
          		
          		//get the form values
          		
          		$data['pic_title'] = $this->input->post('pic_title');
          		$data['pic_desc'] = $this->input->post('pic_desc');
          	    $data['pic_file'] = $this->input->post('pic_file');
          		
          		
          		//file upload code
          		//set file upload settings
          		$config['upload_path']          = APPPATH. '../assets/uploads/';
          		$config['allowed_types']        = 'gif|jpg|png';
          		$config['max_size']             = '4097152';
          		
          	
          		$this->upload->initialize($config);
          		//$this->load->library('upload', $config);
          		
          		
          		if ( ! $this->upload->do_upload('pic_file')){
          		$error = array('error' => $this->upload->display_errors());
          		
          		//print_r($error);
          		$this->data['main_content_view'] = $this->load->view('backend/staff/upload_form.php',$data, TRUE);
          			$this->generate_data('backend/index', $this->data );
          			
          			
          		}else{
          			
          			//file is uploaded successfully
          			//now get the file uploaded data
          			$upload_data = $this->upload->data();
          			$configer =  array(
          					'image_library'   => 'gd2',
          					'source_image'    =>  $upload_data['full_path'],
          					'maintain_ratio'  =>  TRUE,
          					'width'           =>  900,
          					'height'          =>  400,
          			);
          			$this->image_lib->clear();
          			$this->image_lib->initialize($configer);
          			$this->image_lib->resize();
          			//get the uploaded file name
          			 $data['pic_file'] = $upload_data['file_name'];
          			  
          			//store pic data to the db
          			$data['picture_list2'] = $this->award_model->store_pic_data($data);
          			//print_r($picture_list2);
          			
          			redirect('/award');
          		}
          		//$this->load->view('footer');
          	}
          }
          
          public function dele_data($id,$file){
          	$this->load->model('award_model');
          	//echo $id;
          	$data['id']=$id;
          	$data['picture_list'] = $this->award_model->get_all_pics();
          	
          	$this->data['main_content_view'] = $this->load->view('backend/staff/award_delete.php',$data, TRUE);
          	$this->generate_data('backend/index', $this->data );
          	
          	
          }
	
}
