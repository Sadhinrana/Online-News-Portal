<?php 
class PostModel extends Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function getAllPost($table){
		$sql = "SELECT * FROM $table ORDER BY ID DESC LIMIT 3";
		return $this->db->select($sql);
	}
	
	public function getAllArticle($table){
		$sql = "SELECT * FROM $table";
		return $this->db->select($sql);
	}
	
	public function getLatestPost($table){
		$sql = "SELECT * FROM $table ORDER BY ID DESC LIMIT 5";
		return $this->db->select($sql);
	}
	
	public function insertPost($table, $data){
		return $this->db->insert($table, $data);
	}
	
	public function postById($tablePost, $tableCat, $id){
		$sql = "SELECT $tablePost.*, $tableCat.category FROM $tablePost INNER JOIN $tableCat ON $tablePost
		.cat = $tableCat.id WHERE $tablePost.id = $id";
		return $this->db->select($sql);
	}
	
	public function postByCat($tablePost, $tableCat, $id){
		$sql = "SELECT $tablePost.*, $tableCat.category FROM $tablePost INNER JOIN $tableCat ON $tablePost
		.cat = $tableCat.id WHERE $tableCat.id = $id";
		return $this->db->select($sql);
	}
	
	public function postBySearch($tablePost, $keyword, $cat){
		if(isset($keyword) && !empty($keyword)){
			$sql = "SELECT * FROM $tablePost WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%'";
		}elseif(isset($cat)){
			$sql = "SELECT * FROM $tablePost WHERE cat=$cat";
		}
		return $this->db->select($sql);
	}
	
	public function deletePost($table, $cond){
		return $this->db->delete($table, $cond);
	}
	
	public function updatePost($table, $data, $cond){
		return $this->db->update($table, $data, $cond);
	}
}
?>