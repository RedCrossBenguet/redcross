<div id="announcementSidebar">
	<form action="<?php echo base_url() ?>index.php/pagination/index/announcement" method="post">
		<input type="submit" name="sbm" value="Back"/>
	</form>
</div>

<div><label for="Title">Title<br/><input type="text" name="Title" value="<?php echo set_value('Title'); ?>"/><?php echo form_error('Title'); ?></div>
<div><label for="Service">Service<br/>
			<select name="service"><option name="service" value="BloodService"/>Blood Service</option>
			<option name="service" value="SafetyService"/>Membership</option>
			<option name="service" value="Membership"/>Safey Service</option>
			<option name="service" value="VolunteerService"/>Volunteer Service</option></select></div> 	
<div><label for="Content">Content<br/><input type="text" name="Content" value="<?php echo set_value('Content'); ?>"/><?php echo form_error('Content'); ?></div>	

<form action="<?php echo base_url() ?>index.php/pagination/index/saveannouncement" method="post">
	<input type="submit" name="sbm" value="Save"/>
</form>