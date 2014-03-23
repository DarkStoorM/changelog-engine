<?php
	/* Parameters passed by new changelog_db($param);
	 * params set in changelog-settings.php
	 * $param[0] = host
	 * $param[1] = user
	 * $param[2] = password
	 * $param[3] = database name */
	class changelog_db
	{
		private 	$host;
		private 	$user;
		private 	$pass;
		private 	$db_name;
		public 		$link	= null;
		
		public function __construct($param)
		{
			$this->host=$param[0];
			$this->user=$param[1];
			$this->pass=$param[2];
			$this->db_name=$param[3];
			$sql=mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);
			if(!$sql)
			{
				if(DEBUG)
				{
					die("Error while connecting to the database: ".mysqli_error($sql));
				}
			}
			$this->link = $sql;
		}
	}