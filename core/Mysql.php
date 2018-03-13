<?php 

class Mysql  
{
	private $hostname;
	private $username;
	private $password;
	private $databases;
	private $charset;
	private $port;
	private $mysqlconn;

	public function __construct($hostname, $username, $password, $databases, $port = 3306,$charset) {
		$this->hostname = $hostname . ':' . $port;
		$this->username = $username;
		$this->password = $password;
		$this->databases = $databases;
		$this->charset = $charset;

		$this->connection();
	}

	public function __destruct () {
		//$this->colseConnection();
	}

	public function connection () {
		//$this->colseConnection();

		$this->mysqlconn = mysqli_connect($this->hostname, $this->username, $this->password, $this->databases);
		if (! $this->mysqlconn) {
			$this->error = 'Could not connect to server:' . mysqli_connect_errno();
			return false; 
		}

		return true;
	}

	/*public function colseConnection () {
		return mysqli_close($this->mysqlconn);
	}*/
}