<?php

	namespace ONHB\DB;

	use PDO;
	
	class Sql extends PDO
	{
		const HOSTNAME = "127.0.0.1";
		const USERNAME = "root";
		const PASSWORD = "";
		const DBNAME = "onhb";
		private $con;		
		
		function __construct()
		{
			$this->con = new PDO("mysql:dbname=".Sql::DBNAME."; host=".Sql::HOSTNAME, Sql::USERNAME, Sql::PASSWORD);
		}

		private function bindParam($statement, $key, $value)
		{
			$statement->bindParam($key, $value);
		}		
		private function setParams($statement, $parameters = array())
		{
			foreach ($parameters as $key => $value) {
				$this->bindParam($statement, $key, $value);
			}
		}		

		public function query( $rowQuery, $params = array())
		{
			$stmt = $this->con->prepare($rowQuery);
			$this->setParams( $stmt, $params);
			return $stmt->execute();
		}
	}