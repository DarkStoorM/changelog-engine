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
		
		public function check_submit_form()
		{
			global $settings;
			
			$description=$this->clean_up($_POST["description"]);
			if(!empty($description))
			{
				if(strlen($description)<$settings["description_length"])
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
		
		public function clean_up($str)
		{
			$str=trim($str);
			
			$to_replace=array("'",'"');
			$replace_with=array("\'", "\"");
			$str=str_ireplace($to_replace, $replace_with, $str);
			
			return $str;
		}
	}