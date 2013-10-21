<nav>
	<?php if($_SESSION['service'] == 'blood'){ ?>
	<ul>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/home">Home</a></li>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/donor">Donor</a></li>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/blood">Blood</a></li>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/reports">Reports</a></li>
		
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/otherservices">Other Services</a>
			<ul>
				<li><a href="<?php echo base_url() ?>index.php/pagination/index/membership">Membership</a></li>
				<li><a href="<?php echo base_url() ?>index.php/pagination/index/volunteer">Volunteer</a>
					<ul>
						<li><a href="<?php echo base_url() ?>index.php/pagination/index/143volunteer">143</a></li>
						<li><a href="<?php echo base_url() ?>index.php/pagination/index/chaptervolunteer">Chapter</a></li>		
			 		</ul>	
			 	</li>
				<li><a href="#">Safety Service</a>
					<ul>
						<li><a href="<?php echo base_url() ?>index.php/pagination/index/trainee">Trainee</a></li>
						<li><a href="<?php echo base_url() ?>index.php/pagination/index/graduates">Graduates</a></li>		
			 		</ul>
		 		</li>
 			</ul>
		</li>
	</ul>
	<?php } else if ($_SESSION['service'] == 'safety'){ ?>
	<ul>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/home">Home</a></li>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/trainee">Trainee</a></li>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/graduates">Graduates</a></li>
				<li><a href="<?php echo base_url() ?>index.php/pagination/index/reports">Reports</a></li>
		
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/otherservices">Other Services</a>
			<ul>
				<li><a href="<?php echo base_url() ?>index.php/pagination/index/blood">Blood</a></li>
				<li><a href="<?php echo base_url() ?>index.php/pagination/index/membership">Membership</a></li>
				<li><a href="<?php echo base_url() ?>index.php/pagination/index/volunteer">Volunteer</a>
					<ul>
						<li><a href="<?php echo base_url() ?>index.php/pagination/index/143volunteer">143</a></li>
						<li><a href="<?php echo base_url() ?>index.php/pagination/index/chaptervolunteer">Chapter</a></li>		
			 		</ul>
				</li>	
 			</ul>
		</li>
	</ul>	
	<?php } else if ($_SESSION['service'] == 'volunteer'){?>
	<ul>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/home">Home</a></li>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/143volunteer">143</a></li>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/chaptervolunteer">Chapter</a></li>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/reports">Reports</a></li>
		
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/otherservices">Other Services</a>
			<ul>
				<li><a href="<?php echo base_url() ?>index.php/pagination/index/blood">Blood</a></li>
				<li><a href="<?php echo base_url() ?>index.php/pagination/index/membership">Membership</a></li>
				<li><a href="#">Safety Service</a>
					<ul>
						<li><a href="<?php echo base_url() ?>index.php/pagination/index/trainee">Trainee</a></li>
						<li><a href="<?php echo base_url() ?>index.php/pagination/index/graduates">Graduates</a></li>		
			 		</ul>
		 		</li>
 			</ul>
		</li>
	</ul>
	<?php } else if ($_SESSION['service'] == 'membership') { ?>
	<ul>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/home">Home</a></li>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/membership">Membership</a></li>
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/reports">Reports</a></li>
		
		<li><a href="<?php echo base_url() ?>index.php/pagination/index/otherservices">Other Services</a>
			<ul>
				<li><a href="<?php echo base_url() ?>index.php/pagination/index/blood">Blood</a></li>
				<li><a href="<?php echo base_url() ?>index.php/pagination/index/volunteer">Volunteer</a>
					<ul>
						<li><a href="<?php echo base_url() ?>index.php/pagination/index/143volunteer">143</a></li>
						<li><a href="<?php echo base_url() ?>index.php/pagination/index/chaptervolunteer">Chapter</a></li>		
			 		</ul>	
			 	</li>
				<li><a href="#">Safety Service</a>
					<ul>
						<li><a href="<?php echo base_url() ?>index.php/pagination/index/trainee">Trainee</a></li>
						<li><a href="<?php echo base_url() ?>index.php/pagination/index/graduates">Graduates</a></li>		
			 		</ul>
		 		</li>
 			</ul>
		</li>
	</ul>
	<?php } else if ($_SESSION['service'] == 'admin') { ?>
		<div id="adminMenu">
			<a href="<?php echo base_url() ?>index.php/pagination/index/accounts" id='accountMgmt'></a>
			<a href="<?php echo base_url() ?>index.php/pagination/index/addeditannouncement" id='newsAndAnnoun'></a>
			<a href="<?php echo base_url() ?>index.php/pagination/index/blood" id='bsMgmt'></a>
			<a href="<?php echo base_url() ?>index.php/pagination/index/volunteer" id='volMgmt'></a>
			<a href="<?php echo base_url() ?>index.php/pagination/index/membership" id='memMgmt'></a>
			<a href="<?php echo base_url() ?>index.php/pagination/index/dbMgmt" id='dbaseMgmt'></a>
		</div>
	<?php } ?>		
</nav>

