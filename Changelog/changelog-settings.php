<?php

	// Settings for FB connection if needed
	$param[0]=""; // Host
	$param[1]=""; // User
	$param[2]=""; // Password
	$param[3]=""; // Database
	
	define("CH_DEBUG",1); // 1/0
	
	// Additionally show errors while debug is enabled
	if(defined('CH_DEBUG'))
		error_reporting(E_ALL); // Just show everything
	
	$description_length = 100;
	$error_codes = array("EMPTY" => "Empty description.",
		"DESC_LENGTH" => "Your description is too long. Your maximum length is: ".$description_length,
		"INVALID_TYPE" => "Invalid change type.");
	
	$settings = array("description_length" => $description_length,
		"errors" => $error_codes);