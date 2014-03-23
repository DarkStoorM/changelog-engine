<?php
	$param[0]=""; // Host
	$param[1]=""; // User
	$param[2]=""; // Password
	$param[3]=""; // Database
	
	/* DB connection is optional
	 * Leave the require() and new instance commented if you use own DB connection */ 
	// require("changelog-dbconnect.php");
	// $CL = new changelog_db($param);
	
	require("changelog-functions.php");