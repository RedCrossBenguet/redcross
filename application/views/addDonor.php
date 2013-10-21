<div id="donorForm">

<?php echo form_open(base_url().'index.php/blood_controller/add_donor') ?>

	<fieldset>
		<legend>Personal Information</legend>
		<div><label for="Surname">Surname<br/><input type="text" name="surname" value="<?php echo set_value('surname'); ?>"/><?php echo form_error('surname'); ?></div>
		<div><label for="Firstname">FirstName<br/><input type="text" name="firstname" value="<?php echo set_value('firstname');?>"/><?php echo form_error('firstname'); ?></div>
		<div><label for="Middlename">MiddleName<br/><input type="text" name="middlename"  value="<?php echo set_value('middlename');?>"/><?php echo form_error('middlename'); ?></div>
		<div><label for="Birthday">Birthdate<br/><input type="date" name="birthday"  value="<?php echo set_value('birthday');?>"/><?php echo form_error('birthday'); ?></div>
		<div><label for="Age">Age<br/><input type="int" name="age"  value="<?php echo set_value('age');?>"/><?php echo form_error('age'); ?></div>
		<div><label for="CivilStatus">Civil Status<br/>
			<select name="civilstatus"><option name="civilstatus" value="Single"/>Single</option>
			<option name="civilstatus" value="Married"/>Married</option></select></div> 
		<div><label for="Gender">Gender<br/><input type="radio" name="sex" value="M">Male<input type="radio" name="sex" value="F">Female</div>			
	</fieldset>
	
	<fieldset>
		<legend>Address</legend>
		<div><label for="HouseNo">House No<br/><input type="int" name="number"  value="<?php echo set_value('number');?>"/><?php echo form_error('number'); ?></div>
		<div><label for="Street">Street<br/><input type="text" name="street"  value="<?php echo set_value('street');?>"/><?php echo form_error('street'); ?></div>
		<div><label for="Barangay">Barangay<br/><input type="text" name="barangay"  value="<?php echo set_value('barangay');?>"/><?php echo form_error('barangay'); ?></div>
		<div><label for="Town">Town/Municipality<br/><input type="text" name="municipality"  value="<?php echo set_value('town');?>"/><?php echo form_error('town'); ?></div>
		<div><label for="Province">Province/City<br/><input type="text" name="province"  value="<?php echo set_value('province');?>"/><?php echo form_error('province'); ?></div>
		<div><label for="ZipCode">Zip Code<br/><input type="int" name="zipcode"  value="<?php echo set_value('zipcode');?>"/><?php echo form_error('zipcode'); ?></div>	
		<div><label for="OfficeAddress">Office Address<br/><input type="text" name="oaddress"  value="<?php echo set_value('oaddress');?>"/><?php echo form_error('oaddress'); ?></div>			
	</fieldset>
		
	<fieldset>
		<legend>Identification Number</legend>
		<div><label for="Student No.">Student No.<br/><input type="text" name="idnostudent"  value="<?php echo set_value('idnostudent');?>"/><?php echo form_error('idnostudent'); ?></div>	
		<div><label for="Company No.">Company No.<br/><input type="text" name="idnocompany"  value="<?php echo set_value('idnocompany');?>"/><?php echo form_error('idnocompany'); ?></div>
		<div><label for="PRC">PRC<br/><input type="text" name="idnoprc"  value="<?php echo set_value('idnoprc');?>"/><?php echo form_error('idnoprc'); ?></div>
		<div><label for="Driver's License">Driver's License<br/><input type="text" name="idnodrivers"  value="<?php echo set_value('idnodrivers');?>"/><?php echo form_error('idnodrivers'); ?></div>
		<div><label for="SSS No.">SSS No.<br/><input type="text" name="idnosss"  value="<?php echo set_value('idnosss');?>"/><?php echo form_error('idnosss'); ?></div>
		<div><label for="Other No.">Other No.<br/><input type="text" name="idnoothers"  value="<?php echo set_value('idnoothers');?>"/><?php echo form_error('idnoothers'); ?></div>
	</fieldset>
	
	<fieldset>
		<legend>Other Information</legend>
		<div><label for="nationality">Nationality<br/><input type="text" name="nationality" class="textbox" value="<?php echo set_value('nationality');?>"/><?php echo form_error('nationality'); ?></div>
		<div><label for="religion">Religion<br/><input type="text" name="religion" class="textbox" value="<?php echo set_value('religion');?>"/><?php echo form_error('religion'); ?></div>
		<div><label for="education">Education<br/><input type="text" name="education" class="textbox" value="<?php echo set_value('education');?>"/><?php echo form_error('education'); ?></div>
		<div><label for="occupation">Occupation<br/><input type="text" name="occupation" class="textbox" value="<?php echo set_value('occupation');?>"><?php echo form_error('occupation'); ?></div>
		<div><label for="telephoneNo">Telephone No<br/><input type="text" name="telephoneNo" class="textbox" value="<?php echo set_value('telephoneNo');?>"/><?php echo form_error('telephoneNo'); ?></div>
		<div><label for="cellphoneNo">Cellphone No<br/><input type="text" name="cellphoneNo" class="textbox" value="<?php echo set_value('cellphoneNo');?>"/><?php echo form_error('cellphoneNo'); ?></div>
		<div><label for="Email">Email<br/><input type="text" name="emailadd" class="textbox" value="<?php echo set_value('emailadd');?>"/><?php echo form_error('emailadd'); ?></div>
	</fieldset>	
	
	<br><form class="form_wrapper" action="<?php echo base_url() ?>index.php/pagination/index/donor" method="post">
		<input type="submit" name="submit" value="Save" /></form>
		<form class="form_wrapper" action="<?php echo base_url() ?>index.php/pagination/index/donor" method="post">
		<input type="submit" name="submit" value="Cancel" /></form>
	</form>
</div>