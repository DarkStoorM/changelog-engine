<?php

	// Settings for FB connection if needed
	$param[0]=""; // Host
	$param[1]=""; // User
	$param[2]=""; // Password
	$param[3]=""; // Database
	
	define("DEBUG",1); // 1/0
	
	// Additionally show errors while debug is enabled
	if(defined('DEBUG');
		error_reporting(E_ALL); // Just show everything
	
	$show_date = false;
	$description_lenght = 100;
	
	$settings = array("show_date" => $show_date,
		"description_lenght" => $description_lenght);