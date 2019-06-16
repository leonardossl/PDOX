<?php
/*
* This is the start file
* by Philip Brown
*/
class Database{
	private $host = DB_USER;
	private $user = DB_NAME;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;

	private $dbh;
	private $error;

	public function __construct(){
		//Set DSN
		$dsn - 'mysql:host='.$this->host.';dbname='.$this->dbname;
		//Set Options
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);
		//create a new PDO instance
		try{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
		}
		//Catch any errors
		catch(PDOException $e){
			$this->error = $e->getMessage();
		}
	}
	
}