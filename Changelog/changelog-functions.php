<?php
	class changelog
	{
		public $description_length = null;
		
		// Store needed settings
		public function __construct($settings)
		{
			global $settings;
			
			$this->description_length=$settings["description_length"];
		}
		
		/* Load the form from a different file.
		 * Changed to different file because of adding styles, changing form fields order */
		public function form()
		{
			include("changelog-form.php");
		}
		
		// This is the only method you should call to submit your form
		public function submit()
		{
			if(isset($_POST["submit_change"]))
			{
				$this->check_submit_form();
			}
		}
		
		// Method that validates our form
		public function check_submit_form()
		{
			$description=$this->clean_up($_POST["description"]);
			if(!empty($description))
			{
				if(strlen($description)<$this->description_length)
				{
					// Do something
				}
				else
				{
					$this->show_error("DESC_LENGTH");
				}
			}
			else
			{
				$this->show_error("EMPTY");
			}
		}
		
		// Cleaning up method that adds escaping, cleaning, and probably more if needed (to be changed)
		public function clean_up($str)
		{
			$str=trim($str);
			
			$to_replace=array("'",'"');
			$replace_with=array("\'", "\"");
			$str=str_ireplace($to_replace, $replace_with, $str);
			
			return $str;
		}
		
		// Error-throwing method
		public function show_error($code)
		{
			global $settings;
			echo $settings["errors"][$code];
		}
	}