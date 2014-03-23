<?php
	require("changelog-settings.php");
	
	/* DB connection is optional
	 * Leave the require() and new instance commented if you use own DB connection */ 
	// require("changelog-dbconnect.php");
	// $CL = new changelog_db($param);
	
	require("changelog-functions.php");
	$changelog = new changelog($settings);