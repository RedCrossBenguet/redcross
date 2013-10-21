<div id="announcementSidebar">
	<form action="<?php echo base_url() ?>index.php/pagination/index/addannouncement" method="post">
		<input type="submit" name="sbm" value="Add"/>
	</form>
	<form action="<?php echo base_url() ?>index.php/pagination/index/editannouncement" method="post">
		<input type="submit" name="sbm" value="Edit"/>
	</form>
	<form action="<?php echo base_url() ?>index.php/pagination/index/deleteannouncement" method="post">
		<input type="submit" name="sbm" value="Delete"/>
	</form>
</div>

<table id = "myTable">
    <tr>
		<th>Title</th>
		<th>Content</th>
		<th>Date Posted</th>
		<th>Service</th>
    </tr>  
</table>