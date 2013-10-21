<div id="announcementSidebar">
	<form action="<?php echo base_url() ?>index.php/pagination/index/accounts" method="post">
		<input type="submit" name="sbm" value="Back"/>
	</form>
</div>

<div><label for="Username">Username<br/><input type="text" name="Username" value="<?php echo set_value('Username'); ?>"/><?php echo form_error('Username'); ?></div>
<div><label for="Password">Password<br/><input type="text" name="Password" value="<?php echo set_value('Password'); ?>"/><?php echo form_error('Password'); ?></div>	
<div><label for="ConPassowrd">Confirm Password<br/><input type="text" name="ConPassowrd" value="<?php echo set_value('ConPassowrd'); ?>"/><?php echo form_error('ConPassowrd'); ?></div>
<div><label for="LastName">Last Name<br/><input type="text" name="LastName" value="<?php echo set_value('LastName'); ?>"/><?php echo form_error('LastName'); ?></div>	
<div><label for="FirstName">First Name<br/><input type="text" name="FirstName" value="<?php echo set_value('FirstName'); ?>"/><?php echo form_error('FirstName'); ?></div>	
<div><label for="Service">Service<br/>
	<select name="service"><option name="service" value="BloodService"/>Blood Service</option>
	<option name="service" value="Membership"/>Membership</option>
	<option name="service" value="SafetyService"/>Safey Service</option>
	<option name="service" value="VolunteerService"/>Volunteer Service</option></select></div> 	
<div><label for="Service">Status<br/>
	<select name="service"><option name="status" value="Active"/>Active</option>
	<option name="service" value="Inactive"/>Inactive</option></select></div> 	


<form action="<?php echo base_url() ?>index.php/pagination/index/saveaccount" method="post">
	<input type="submit" name="sbm" value="Save"/>
</form>