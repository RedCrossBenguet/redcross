<?php
$id = $_GET['donor_id'];
$tempid=$id;
$info = $this->Blood_Model->get_info($id);
?>

<form action="<?php echo base_url().'index.php/pagination/index/donate'?>">
		<?php $_SESSION['don_id'] = $tempid?>	  		
   	<input id="btnDonate" type="submit" id="donate" value="DONATE"></input>
</form>
	<fieldset id="donordetails">
		<legend>Donor Information</legend>	
			<div><label class="donordetailslabel" for="Name"><div id="fieldhead">Name:</div><?php echo $info->sur_name?>, <?php echo $info->first_name?></label></div>
			<div><label class="donordetailslabel" for="Birthdate"><div id="fieldhead">Birthdate: </div><?php echo $info->birthdate?></label></div>
			<div><label class="donordetailslabel" for="Age"><div id="fieldhead">Age: </div><?php echo $info->age?></label></div>
			<div><label class="donordetailslabel" for="Civil Status"><div id="fieldhead">Civil Status: </div><?php echo $info->civil_status?></label></div>
			<div><label class="donordetailslabel" for="Gender"><div id="fieldhead">Gender: </div><?php echo $info->sex?></label></div>
			<div><label class="donordetailslabel" for="Address"><div id="fieldhead">Address: </div><?php echo $info->street?>, <?php echo $info->barangay?>, <?php echo $info->municipality?>, <?php echo $info->province?></label></div>
			<div><label class="donordetailslabel" for="Zip Code"><div id="fieldhead">Zip Code: </div><?php echo $info->zip_code?></label></div>
			<div><label class="donordetailslabel" for="Office Address"><div id="fieldhead">Office Address: </div><?php echo $info->office_address?></label></div>
			
			<div><label class="donordetailslabel" for="Nationality"><div id="fieldhead">Nationality: </div><?php echo $info->nationality?></label></div>
			<div><label class="donordetailslabel" for="Religion"><div id="fieldhead">Religion: </div><?php echo $info->religion?></label></div>
			<div><label class="donordetailslabel" for="Education"><div id="fieldhead">Education: </div><?php echo $info->education?></label></div>
			<div><label class="donordetailslabel" for="Occupation"><div id="fieldhead">Occupation: </div><?php echo $info->occupation?></label></div>
			<div><label class="donordetailslabel" for="Telephone No"><div id="fieldhead">Telephone No: </div><?php echo $info->telephone_no?></label></div>
			<div><label class="donordetailslabel" for="Cellphone No"><div id="fieldhead">Cellphone No: </div><?php echo $info->cellphone_no?></label></div>
			<div><label class="donordetailslabel" for="Email"><div id="fieldhead">Email: </div><?php echo $info->email_add?></label></div>
			<div><label class="donordetailslabel" for="Remarkds"><div id="fieldhead">Remarkds: </div><?php echo $info->remarks?></label></div>
	</fieldset>