<?php
	
	define('DB_HOST', 'localhost');
	define('DB_USER', 'thunt');
	define('DB_PASS', 'thunt');
	define('DB_NAME', 'thunt');

	class DbConnect
	{

		private $con;
	 
		function connect()
		{
	 
			$this->con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

			if (mysqli_connect_errno()) 
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}


			return $this->con;
		}
	 
	}
?>

