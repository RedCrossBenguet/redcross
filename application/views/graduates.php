<table id = "myTableGrad">
            <tr>
				<th>Name</th>
				<th>Age</th>
				<th>Educ'l Qual.</th>
				<th>Knowledge 75/100</th>
				<th>COA Number</th>
            </tr>  
</table>
		 
		<div id="sidebar2" class="sidebar">   
             <input type="text" name="s" id="s" size="17" value="" /> 
             <input type="submit" name="sbm" value="Search"/>
             <button disabled="disabled" id="view" style="display:none;">View Details</button>
             <form action="<?php echo base_url() . 'index.php/pagination/index/donate' ?>">
             	<input type="submit" disabled="disabled" id="donate" style="display:none;" value="Donate"></input>
             </form>
		</div>
		
				
     
        