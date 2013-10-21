<div id="release">
	<h2>Blood Details</h2>
		<label>Requester's Name: </label>
		<input type="text" name="req_name" value="<?php echo set_value('req_name'); ?>"/><br />
		
		<label>Age: </label>
		<input type="text" name="age" value="<?php echo set_value('age'); ?>"/>&nbspMust be above 18<br />
		
		<label>Requesting Physician: </label>
		<input type="text" name="req_phys" value="<?php echo set_value('req_phys'); ?>"/><br />
		
		<label>Hospital: </label>
		<input type="text" name="hosp" value="<?php echo set_value('hosp'); ?>"/><br />
		
		<label>Serial No: </label>
		<input type="text" name="serial_num" value="<?php echo set_value('serial_num'); ?>"/><br />
		
		<label>Release Date: </label>
		<input type="date" name="rel_date" value="<?php echo set_value('rel_date'); ?>"/><br />
</div>

<div id="releaseButton">
	<input type="submit" value="Back">
	<input type="submit" value="Save">
<div/>