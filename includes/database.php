<?php
require_once("new_config.php");


class Database {

	public $connection;
	public $db;
	
	public function open_db_connection(){

		
		$this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

		if ($this->connection->connect_errno) {

			die("Database connection failed badly " . $this->connection->connect_error);

		}

		return $this->connection;
	}
#the construct method will automatically run the database class...
	function __construct(){

		$this->db = $this->open_db_connection();

	}


	#query method

	public function query($sql){

		// $result = mysqli_query($this->connection, $sql);
		$result = $this->db->query($sql);

		$this->confirm_query($result);

		return $result;
	}

	#confirm query

	private function confirm_query($result){
		if (!$result) {	
			die("Query failed" . $this->db->error);
		}
	}


	#escape string

	public function escape_string($string){

		
		 return $this->db->real_escape_string($string);
		 
	}


	public function fetch($result){
		$find = mysqli_fetch_array($result);
		return $find;
	}

	public function the_insert_id(){
		return mysqli_insert_id($this->db);
	}
}

$database = new Database();





















?>