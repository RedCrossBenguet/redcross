<table id = "myTable">
    <tr>
		<th>Serial No</th>
		<th>Extraction Date</th>
		<th>Expiration Date</th>
        <th>Amount</th>
		<th>Blood Type</th>     
    </tr>
 
    <?php
    foreach($results as $data) {
    ?>
    <tr>
        <td><?php echo $data->serial_no?></td>
        <td><?php echo $data->extraction_date?></td>     
        <td><?php echo $data->expiration_date?></td>
		<td><?php echo $data->amount?></td>
        <td><?php echo $data->blood_type?></td>

    </tr>
    
    
    <?php
    }
    ?>
    
 </table>
   
<div id = "sidebar">
    <form action="<?php echo base_url() ?>index.php/pagination/index/release" method="post" class="button">
        <input type="submit" name="sbm" value="       Release     "/>
     </form>
	<form action="<?php echo base_url() ?>index.php/pagination/index/dispose" method="post" class="button">
		<input type="submit" name="sbm" value="       Dispose     "/>
    </form>
	<form action="<?php echo base_url() ?>index.php/pagination/index/bloodreleases" method="post" class="button">
		<input type="submit" name="sbm" value="Blood Releases"/>
    </form>
</div>   