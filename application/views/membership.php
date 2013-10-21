<div id="sidebar">
	<form action="<?php echo base_url() ?>index.php/pagination/index/addmember" method="post">
		<input type="submit" name="sbm" value="Add "/>
	</form>
</div>


<table id = "myTable">
    <tr>
		<th>Name</th>
		<th>Contact No.</th>
		<th>Birthdate</th>
		<th>Membership Category</th>
		<th>ID Number</th>
		<th>Effectivity</th>
    </tr>  
</table>

<div id="sidebar2" class="sidebar">   
	 <input type="text" name="s" id="s" size="19" value="" /> 
	 <input type="submit" name="sbm" value="Search"/>
</div>