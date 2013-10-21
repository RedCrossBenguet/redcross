<?php

class Login_model extends CI_Model {
	function __construct()
	{
		
   }

   public function verify_user($uname, $password)
   {
      $q = $this
            ->db
            ->where('username', $uname)
            ->where('password', $password)
            ->limit(1)
            ->get('user');

      if ( $q->num_rows > 0 ) {
         // person has account with us
         return $q->row();
      }
	  
	  foreach( $q->result() as $row){
	  	$userdetail=$row;
	  }
	  
	  return $userdetail;
	  
      return false;
   }
}

