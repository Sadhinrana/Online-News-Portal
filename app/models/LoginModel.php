<?php 
class LoginModel extends Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function userControll($table, $username, $password){
		$sql = "SELECT * FROM $table WHERE username=? AND password=?";
		return $this->db->affectedRows($sql, $username, $password);
	}
	
	public function getUserData($table, $username, $password){
		$sql = "SELECT * FROM $table WHERE username=? AND password=?";
		return $this->db->getUserData($sql, $username, $password);
	}
}
?>