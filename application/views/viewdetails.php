<?php
	$id = $_GET['donor_id'];
	$tempid=$id;
	$info = $this->Blood_Model->get_info($id);
?>
	<table id="tblView" align="center" cellpadding="20" width="500">
			<tbody>
				<tr>
					<td>NAME:</td> 
					<td><?php echo $info->sur_name?>, <?php echo $info->first_name?></td>
						</tr>
				<tr>
					<td>Birthdate:</td> 
					<td><?php echo $info->birthdate?></td>
						</tr>
				<tr>
					<td>Age:</td>
					<td> <?php echo $info->age?></td>
						</tr>
				<tr>		
					<td>Civil Status:</td> 
					<td><?php echo $info->civil_status?></td>
						</tr>
				<tr>
					<td>Gender:</td> 
					<td><?php echo $info->sex?></td>
						</tr>
				<tr>
					<td>Address:</td> 
					<td><?php echo $info->street?>, <?php echo $info->barangay?>, <?php echo $info->municipality?>, <?php echo $info->province?></td>
						</tr>
				<tr>
					<td>Zip Cpde:</td> 
					<td><?php echo $info->zip_code?></td>
						</tr>
				<tr>
					<td>Office Address:</td> 
					<td><?php echo $info->office_address?></td>
						</tr>
				<tr>
					<td>Student No. :</td>
					<td><?php echo $info->idNoStudent?></td>
						</tr>
				<tr>
					<td>Company No. :</td>
					<td><?php echo $info->idNoCompany?></td>
						</tr>
				<tr>
					<td>SSS No. :</td>
					<td><?php echo $info->idNoSSS?></td>
						</tr>
				<tr>
					<td>PRC:</td>
					<td><?php echo $info->idNoPrc?></td>
						</tr>
				<tr>
					<td>Driver's License:</td> 
					<td><?php echo $info->idNoDrivers?></td>
						</tr>
				<tr>
					<td>Other No. :</td>
					<td><?php echo $info->idNoOthers?></td>
						</tr>
				<tr>
					<td>Nationality:</td>
					<td><?php echo $info->nationality?></td>
						</tr>
				<tr>
					<td>Religion:</td> 
					<td><?php echo $info->religion?></td>
						</tr>
				<tr>
					<td>Education:</td> 
					<td><?php echo $info->education?></td>
						</tr>
				<tr>
					<td>Occupation:</td>
					<td> <?php echo $info->occupation?></td>
						</tr>
				<tr>
					<td>Telephone No. :</td>
					<td><?php echo $info->telephone_no?></td>
						</tr>
				<tr>
					<td>Cellphone No. :</td>
					<td><?php echo $info->cellphone_no?></td>
						</tr>
				<tr>
					<td>Email:</td> 
					<td><?php echo $info->email_add?></td>
				</tr>
				<tr>
					<td>Remarks: </td>
					<td><?php echo $info->remarks?></td>
				</tr>
				<br>
				
	  <form action="<?php echo base_url().'index.php/pagination/index/donate'?>">
	  		<?php $_SESSION['don_id'] = $tempid?>	  		
		   	<input id="btnDonate" type="submit" id="donate" value="DONATE"></input>
	  </form>
	  </table>