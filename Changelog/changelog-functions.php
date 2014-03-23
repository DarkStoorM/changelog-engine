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
			$type=$_POST["change_type"];
			if(empty($description))
				$this->show_error("EMPTY");
			elseif(strlen($description)>$this->description_length)
				$this->show_error("DESC_LENGTH");
			elseif(!$this->validate_type($type))
				$this->show_error("INVALID_TYPE");
			else
				$this->update_changelog($type,$description);
		}
		
		// Checking change type just in case
		public function validate_type($type)
		{
			switch($type)
			{
				case "a": return 1; break;
				case "f": return 1; break;
				case "r": return 1; break;
				default: return 0;
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
		
		// Changelog updating method, inserting Description from the paramater
		public function update_changelog($type,$description)
		{
			$this->db("INSERT INTO `changelog`.`changes` (`id`, `type`, `description`, `date`) VALUES (NULL, '".$type."', '".$description."', CURRENT_DATE());");
		}
		
		// Query method
		public function db($query)
		{
			$link = $this->sqlLink;
			$sql=mysqli_query($link,$query);
			
			if($sql)
			{
				return $sql;
			}
			else
			{
				if(DEBUG)
				{
					die("Error while executing query: ".mysqli_error($link));
				}
			}
		}
	}