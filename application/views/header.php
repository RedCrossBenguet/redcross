<!DOCTYPE HTML>

<html>
    <head>
        <title><?php echo $title ?></title>
       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">      
       <script>
  
        //window.onload = addRowHandlers;
        function addRowHandlers() {
            var table = document.getElementById("myTable");
            var rows = table.getElementsByTagName("tr");
            for (i = 0; i < rows.length; i++) {
                var currentRow = table.rows[i];
                var createClickHandler = function(row) 
                                            {
                                                return function() { 
                                                                        var cell = row.getElementsByTagName("td")[0];
                                                                        var id = cell.innerHTML;
                                                                      //  alert("id:" + id);
                                                                        document.getElementById("view").disabled = false;
                                                                        document.getElementById("view").style.display = "block";
                                                                        document.getElementById("donate").disabled = false;
                                                                        document.getElementById("donate").style.display = "block";
                                                                 };
                                            }
        
                currentRow.onclick = createClickHandler(currentRow);
            }
        }
        </script>
    </head>
    <body>
        <div id="header">
        	<div id="picture">
            	<div id="headerTitle">Red-E: Electronic Information System</div>
            	<div id="headerSubtext">Benguet Chapter</div>
    		</div>
				<div class = "logout">
					<a href="<?php echo base_url() ?>index.php/log/logout">Log Out</a>
       			 </div>
		</div>
	<div id = "container">
