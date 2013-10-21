        	    <table id = "myTable">
                    <tr>
						<th>Donor ID</th>
						<th>Name</th>
						<th>Age</th>
						<th>Address</th>
                        <th>Contact No</th>      
                    </tr>
 
                    <?php
                    foreach($results as $data) {
                    ?>
                    <tr>
                        <td><?php echo $data->donor_id?></td>
                        <td><a href="<?php echo base_url().'index.php/pagination/index/viewdetails?donor_id='.$data->donor_id?>">
                        <?php echo $data->first_name?> <?php echo $data->sur_name ?></a></td>     
                        <td><?php echo $data->age?></td>
                        <td>No.<?php echo $data->no?> Brgy.<?php echo $data->barangay?>, <?php echo $data->municipality?> <?php echo $data->province?></td>
                        <td><?php echo $data->telephone_no?></td>

                    </tr>
                    
                    
                    <?php
                    }
                    ?>
                    
            	 </table>
				<div id="sidebar2" class="sidebar">   
		             <input type="text" name="s" id="s" size="19" value="" /> 
		             <input type="submit" name="sbm" value="Search"/>
		             <button disabled="disabled" id="view" style="display:none;">View Details</button>
		             <form action="<?php echo base_url() . 'index.php/pagination/index/donate' ?>">
		             	<input type="submit" disabled="disabled" id="donate" style="display:none;" value="Donate"></input>
		             </form>
        		</div>
				
				
     
        
        