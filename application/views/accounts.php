<div id="accountsSidebar">
	<form action="<?php echo base_url() ?>index.php/pagination/index/addaccounts" method="post">
		<input type="submit" name="sbm" value="Add"/>
	</form>
	<form action="<?php echo base_url() ?>index.php/pagination/index/editaccounts" method="post">
		<input type="submit" name="sbm" value="Edit"/>
	</form>
</div>


<table id = "myTable">
    <tr>
		<th>Username</th>
		<th>Password</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Status</th>
		<th>Service</th>
    </tr>  
</table>