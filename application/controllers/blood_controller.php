<?php 

class Blood_Controller extends CI_Controller {

   public function __construct()
   {
      	//session_start();
		parent::__construct();
	 	//	$this->load->library('session');
	  	$this->load->model("Blood_Model");
		//$this->session->set_userdata('username', $this->session->flashdata('username'));
		
	  	if(!$_SESSION['username']){
	  		redirect(base_url().'index.php/login');
	  }
   }

	public function add_Donor()
	{
		
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Add Donor';
	
		$data2 = array(
						array(
						 'field'   => 'surname', 
	                     'label'   => 'surname', 
	                     'rules'   => 'required'
						 ),
						array(
						 'field'   => 'firstname', 
	                     'label'   => 'first name', 
	                     'rules'   => 'required'
					 	),
						array(
						 'field'   => 'middlename', 
	                     'label'   => 'middle name', 
	                     'rules'   => 'required'
						 ),
						array(
						 'field'   => 'birthday', 
	                     'label'   => 'birthday', 
	                     'rules'   => 'required'
						 ),
						array( 
						'field'   => 'age', 
	                     'label'   => 'age', 
	                     'rules'   => 'xss_clean|numeric|max_length[3]'
						 ),
						array(
						 'field'   => 'civilstatus', 
	                     'label'   => 'civil status', 
	                     'rules'   => 'xss_clean|alpha'
						 ),
						array(
						 'field'   => 'sex', 
	                     'label'   => 'sex', 
	                     'rules'   => 'xss_clean|alpha|max_length[1]'
						 ),
						array(
						 'field'   => 'number', 
	                     'label'   => 'number', 
	                     'rules'   => 'xss_clean|numeric'
						 ),
						array( 
						 'field'   => 'street', 
	                     'label'   => 'street', 
	                     'rules'   => 'xss_clean'
						 ),
						array(
						 'field'   => 'barangay', 
	                     'label'   => 'barangay', 
	                     'rules'   => 'required'
						 ),
						array(
						 'field'   => 'municipality', 
	                     'label'   => 'municipality', 
	                     'rules'   => 'required'
						 ),
						array(
						 'field'   => 'province', 
	                     'label'   => 'province', 
	                     'rules'   => 'required'
						 ),
						array(
						 'field'   => 'zipcode', 
	                     'label'   => 'zipcode', 
	                     'rules'   => 'xss_clean|numeric'
						 ),
						array(
						 'field'   => 'oaddress', 
	                     'label'   => 'office address', 
	                     'rules'   => 'xss_clean'
						 ),
						array(
						 'field'   => 'nationality', 
	                     'label'   => 'nationality', 
	                     'rules'   => 'xss_clean|alpha'
						 ),
						array(
						 'field'   => 'religion', 
	                     'label'   => 'religion', 
	                     'rules'   => 'xss_clean'
						 ),
						array(
						 'field'   => 'education', 
	                     'label'   => 'education', 
	                     'rules'   => 'xss_clean|alpha'
						 ),
						array(
						 'field'   => 'occupation', 
	                     'label'   => 'occupation', 
	                     'rules'   => 'xss_clean|alpha'
						 ),
						array(
						 'field'   => 'telephoneNo', 
	                     'label'   => 'telephone number', 
	                     'rules'   => 'xss_clean|numeric'
						 ),
						array(
						 'field'   => 'cellphoneNo', 
	                     'label'   => 'cellphone number', 
	                     'rules'   => 'xss_clean|required|numeric'
						 ),
						array(
						 'field'   => 'emailadd', 
	                     'label'   => 'E-mail address', 
	                     'rules'   => 'xss_clean|valid_email'
						 ),
						array(
						 'field'   => 'idnostudent', 
	                     'label'   => 'Student ID number', 
	                     'rules'   => 'xss_clean|alpha_dash'
						 ),
						array(
						 'field'   => 'idnocompany', 
	                     'label'   => 'Company ID number', 
	                     'rules'   => 'xss_clean|alpha_dash'
						 ),
						array(
						 'field'   => 'idnoprc', 
	                     'label'   => 'PRC ID number', 
	                     'rules'   => 'xss_clean|alpha_dash'
						 ),
						array(
						 'field'   => 'idnodrivers',
						 'label'   => 'Driver License',
						 'rules'   => 'xss_clean|alpha_dash'
						),
						array(
						 'field'   => 'idnosss', 
	                     'label'   => 'SSS ID number', 
	                     'rules'   => 'xss_clean|alpha_dash'
						 ),
						
						array(
						 'field'   => 'idnoothers', 
	                     'label'   => 'Other ID number', 
	                     'rules'   => 'xss_clean|alpha_dash'
						 )
						
				);
			$this->form_validation->set_rules($data2);
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('/header', $data);
	            $this->load->view('/navigation', $data);
				$this->load->view('/addDonor', $data);
	            $this->load->view('/footer', $data);
			}else{
				$this->Blood_Model->add_donor();
    	        $data['title'] = ucfirst('donor');
    	        $data["results"] = $this->Blood_Model->get_donors(20, 'donor');
    	
                $this->load->view('/header', $data);
                $this->load->view('/navigation', $data);
                $this->load->view('/sideBar', $data);
    	        $this->load->view("donor", $data);
                $this->load->view('/footer', $data);
				echo '<script> alert("success") </script>';	
				redirect(base_url()."index.php/pagination/index/donor");
			}

	}
	
	public function add_Blood(){
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Donate Blood';
		$data2 = array(
						array(
						 'field'   => 'bloodtype', 
	                     'label'   => 'Blood Type', 
	                     'rules'   => 'required|max_length[2]'
						 ),
						array(
						 'field'   => 'serial_no', 
	                     'label'   => 'Serial No.', 
	                     'rules'   => 'required|numeric|max_length[8]'
					 	),
						array(
						 'field'   => 'extractionDate', 
	                     'label'   => 'Extraction Date', 
	                     'rules'   => 'required'
						 )
						 ,
						array(
						 'field'   => 'expirationDate', 
	                     'label'   => 'Expiration Date', 
	                     'rules'   => 'required'
						 )
				);
			$this->form_validation->set_rules($data2);
			
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('/header', $data);
	            $this->load->view('/navigation', $data);
				$this->load->view('/donate', $data);
	            $this->load->view('/footer', $data);
			}else{
				$this->Blood_Model->add_blood();
    	        $data['title'] = ucfirst('donor');
    	        $data["results"] = $this->Blood_Model->get_donors(20, 'donor');
    	
                $this->load->view('/header', $data);
                $this->load->view('/navigation', $data);
                $this->load->view('/sideBar', $data);
    	        $this->load->view("donor", $data);
                $this->load->view('/footer', $data);
				echo '<script> alert("success") </script>';						
			}
	}
}

