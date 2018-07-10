<?php 
class Model{
	protected $db = array();
	
	public function __construct(){
		$dsn = 'mysql:dbname=example; host=localhost';
		$user = 'root';
		$pass = '';
		
		$this->db = new DB($dsn, $user, $pass);
	}
}
?>