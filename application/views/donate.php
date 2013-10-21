<?php
	$info = $this->Blood_Model->get_info($_SESSION['don_id']);
?>
	 
<h2>&nbsp;Name: <?php echo $info->sur_name?>, <?php echo $info->first_name?></h2>


<div id="donate">
	<?php echo form_open(base_url().'index.php/Blood_Controller/add_Blood/') ?>
		<input type="hidden" name="donor_id" value="<?php echo $_SESSION['don_id']?>"/>
		<label>Blood Type:</label>
		<select name ="bloodtype" ><option name = "bloodtype" value= "A+"/></option>
			<option name = "bloodtype" value="A-"/>A-</option>
			<option name = "bloodtype" value="B+"/>B+</option>
			<option name = "bloodtype" value="B-"/>B-</option>
            <option name = "bloodtype" value="AB"/>AB</option>
            <option name = "bloodtype" value="O"/>O</option></select><br>
		<label>Component:</label>
		<select name ="component" ><option name = "component" value= "FWB"/> </option>
		</select><br>
		<label>Serial No:</label>
		<input type="text" name="serial_no" value="<?php echo set_value('serial_no'); ?>"/><div class="eState"><?php echo form_error('serial_no'); ?></div>
		<label>Extraction Date:</label>
		<input type="date" name="extractionDate" value="<?php echo set_value('extractionDate'); ?>"/><div class="eState"><?php echo form_error('extractionDate'); ?></div>
		<label>Expiration Date:</label>
		<input type="date" name="expirationDate" value="<?php echo set_value('expirationDate'); ?>"/><div class="eState"><?php echo form_error('expirationDate'); ?></div><br/>
		
		<input type="submit" value="Save">
	</form>
</div>