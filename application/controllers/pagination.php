<?php 
 
class Pagination extends CI_Controller {
	
	public function __construct() {
	    parent:: __construct();
	    $this->load->helper("url");
	    $this->load->model("Blood_Model");
		//session_start();
		if(!$_SESSION['username']){
            redirect(base_url().'index.php/log');
      }
	 	//$this->load->library('session');
		
	}

	public function index($page = 'home') {       
       // redirect(base_url('login'));
    	//session_destroy();
        if(isset($_SESSION['username'])){
      		//$this->session->set_flashdata('username', $this->session->userdata('username'));
            
    		if ($page == 'donor'){
    	        $data['title'] = ucfirst($page);
    	        $page = ($this->uri->segment(2))? $this->uri->segment(2) : 0;
    	        $data["results"] = $this->Blood_Model->get_donors();
    	
                $this->load->view('/header', $data);
                $this->load->view('/navigation', $data);
                $this->load->view('/sideBar', $data);
    	        $this->load->view("donor", $data);
                $this->load->view('/footer', $data);
    		} elseif ($page == 'blood') {
				$data['title'] = ucfirst($page);
				$page = ($this->uri->segment(2))? $this->uri->segment(2) : 0;
    	        $data["results"] = $this->Blood_Model->get_blood();
    			
                $this->load->view('/header', $data);
                $this->load->view('/navigation', $data);
    	        $this->load->view("blood", $data);
                $this->load->view('/footer', $data);
			}else {
    				if ( ! file_exists('application/views/'.$page.'.php'))
            		{
            			// Whoops, we don't have a page for that!
            			show_404();
            		}
            	
            		$data['title'] = ucfirst($page); // Capitalize the first letter
            		$data['d_id']= $this->input->post('donor_id2');
            		$this->load->view('/header', $data);
            		$this->load->view('/navigation', $data);
            		$this->load->view('/'.$page, $data);
            		$this->load->view('/footer', $data);
    		}
		}else{
			//$this->session->sess_destroy();
			session_destroy();
			redirect(base_url()."index.php/log");}
	}
}
