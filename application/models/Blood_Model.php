<?php
 
class Blood_Model extends CI_Model
{
    public function __construct() {
            parent::__construct();
    }

    public function record_count() {
            return $this->db->count_all("donor");
    }

    public function get_donors() {
           
            $query = $this->db->get("donor");

            if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) {
                            $data[] = $row;
                    }
                    return $data;
            }
            return false;
   }
	
	public function add_donor(){
		$data = array(
			'sur_name' => $this->input->post('surname'),
			'first_name' => $this->input->post('firstname'),
			'middle_name' => $this->input->post('middlename'),
			'birthdate' => $this->input->post('birthday'),
			'age' => $this->input->post('age'),
			'civil_status' => $this->input->post('civilstatus'),
			'sex' => $this->input->post('sex'),
			'no' => $this->input->post('number'),
			'street' => $this->input->post('street'),
			'barangay' => $this->input->post('barangay'),
			'municipality' => $this->input->post('municipality'),
			'province' => $this->input->post('province'),
			'zip_code' => $this->input->post('zipcode'),
			'office_address' => $this->input->post('oaddress'),
			'nationality' => $this->input->post('nationality'),
			'religion' => $this->input->post('religion'),
			'education' => $this->input->post('education'),
			'occupation' => $this->input->post('occupation'),
			'telephone_no' => $this->input->post('telephoneNo'),
			'cellphone_no' => $this->input->post('cellphoneNo'),
			'email_add' => $this->input->post('emailadd'),
			'idNoStudent' => $this->input->post('idnostudent'),
			'idNoCompany' => $this->input->post('idnocompany'),
			'idNoPrc' => $this->input->post('idnoprc'),
			'idNoDrivers' => $this->input->post('idnodrivers'),
			'idNOSSS' => $this->input->post('idnosss'),
			'idNoOthers' => $this->input->post('idnoothers')
		);
	
		return $this->db->insert('donor', $data);  	     
	}

    public function get_blood() {	
		$this->db->select('serial_no, extraction_date, expiration_date, amount, blood_type');
		$this->db->from('blood');
		$this->db->join('blood_type', 'blood.bloodtype_id = blood_type.bloodtype_id');
		
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) {
                            $data[] = $row;
                    }
                    return $data;
            }
            return false;
			
   }
	
	public function get_info($donor_id){
      $q = $this
            ->db
            ->where('donor_id', $donor_id)
            ->limit(1)
            ->get('donor');

      if ( $q->num_rows > 0 ) {
         // person has account with us
         return $q->row();
      }
	  
	  foreach( $q->result() as $row){
	  	$detail=$row;
	  }
	  
	  return $detail;
	  
      return false;	
	}
	
	public function add_blood(){
		$data = array(
			'serial_no' => $this->input->post('serial_no'),
			'bloodtype_id' => $this->input->post('bloodtype'),
			'comp_id' => $this->input->post('component'),
			'extraction_date' => $this->input->post('extractionDate'),
			'expiration_date' => $this->input->post('expirationDate'),
			'donor_id' => $_SESSION['don_id'],
		);
	
		return $this->db->insert('blood', $data);
	}
	
	public function get_bloodtype($donor_id){
		$q = $this
            ->db
            ->where('donor_id', $donor_id)
            ->limit(1)
            ->get('');

			if($q->row(0)->bloodtype_id != null){
				$query = $this
						->db
						->from('blood')
						->join('blood_type', 'blood.bloodtype_id=blood_type.bloodtype_id')
						->get();
						
				return $query->row(0)-> blood_type;
			} 
	}
	
	
}

?>