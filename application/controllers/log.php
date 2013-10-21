<?php 

class Log extends CI_Controller {

   public function __construct()
   {
      //session_start();
      parent::__construct();
	  // $this->load->library('session');
   }

	public function index()
   {
        if(isset($_SESSION['username']))redirect(base_url());
      $this->load->library('form_validation');
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$data['err']='';
      if ( $this->form_validation->run() !== false ) {
         // then validation passed. Get from db
         $this->load->model('Login_Model');
         $res = $this->Login_Model->verify_user(
                     $this->input->post('username'), 
                     $this->input->post('password')
                  );

         if ( $res !== false ) {
            $tempuser = $this->input->post('username');
			$tempservice = $res->service;
		//	$this->session->set_userdata('username', $tempuser);
			$_SESSION['username'] = $tempuser;
			$_SESSION['service'] = $tempservice;
            redirect(base_url());
           // echo $_SESSION['username']."HELLO";
         }else if($res !== true && strlen($this->input->post('username')) > 0 ){
		     $data['err'] = 'Invalid!';			 
		 }

      }

      $this->load->view('login_view', $data);
   }

   public function logout()
   {
      //$this->session->sess_destroy();
      session_destroy();
	  $data['err']='';
      $this->load->view('login_view', $data);
   }
}

