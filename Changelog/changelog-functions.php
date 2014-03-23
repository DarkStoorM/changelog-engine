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
		
		public function submit()
		{
			if(isset($_POST["submit_change"]))
			{
				$this->check_submit_form();
			}
		}
	}