<?php
	class changelog
	{
		public $description_length = null;
		
		public function __construct($settings)
		{
			global $settings;
			
			$this->description_length=$settings["description_length"];
		}
		
		public function form()
		{
			include("changelog-form.php");
		}
	}