<?php
	require("changelog-settings.php");
	
	/* DB connection is optional
	 * Leave the require() and new instance commented if you use own DB connection */ 
	// require("changelog-dbconnect.php");
	// $CL = new changelog_db($param);
	
	require("changelog-functions.php");
	/* PROVIDE YOUR MYSQLI LINK ARGUMENT!
	 * If you are using your own MySQLI connection, replace given $link argument.
	 * or if you use connection from this file, use:
	 * 	$CL->link
	 */
	$changelog = new changelog($link);