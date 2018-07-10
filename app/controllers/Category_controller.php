<?php
class Category_controller extends Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function categoryList(){
		$data = array();
		$table = 'category';
		$catModel = $this->load->model('CatModel');
		$data['cat'] = $catModel->catList($table);
		$this->load->view('catModel', $data);
	}
	
	public function addCategory(){
		$this->load->view('category');
	}
	
	public function updateCategory(){
		$data = array();
		$table = 'category';
		$id = 4;
		$catModel = $this->load->model('CatModel');
		$data['cat'] = $catModel->catById($table, $id);
		$this->load->view('catUpdate', $data);
	}
	
	public function catById(){
		$data = array();
		$table = 'category';
		$id = 1;
		$catModel = $this->load->model('CatModel');
		$data['cat'] = $catModel->catById($table, $id);
		$this->load->view('catById', $data);
	}
	
	public function insertCat(){
		$table = 'category';
		
		$name = $_POST['name'];
		$title = $_POST['title'];
		
		$data = array(
		'category' => $name,
		'title' => $title
		);
		$catModel = $this->load->model('CatModel');
		$result = $catModel->insertCat($table, $data);
		
		$msg = array();
		if($result){
			$msg['msg'] = "<span style='color:green;font-weight:bold'>Data inserted successfully.</span>";
		}else{
			$msg['msg'] = "<span style='color:red;font-weight:bold'>Data insertion failed.</span>";
		}
		
		$this->load->view('category', $msg);
	}
	
	public function updateCat(){
		$table = 'category';
		$id = $_POST['id'];
		$name = $_POST['name'];
		$title = $_POST['title'];
		$cond = "id=$id";
		
		$data = array(
		'category' => $name,
		'title' => $title
		);
		
		$catModel = $this->load->model('CatModel');
		$result = $catModel->updateCat($table, $data, $cond);
		
		$msg = array();
		if($result){
			$msg['msg'] = "<span style='color:green;font-weight:bold'>Data updated successfully.</span>";
		}else{
			$msg['msg'] = "<span style='color:red;font-weight:bold'>Data update failed.</span>";
		}
		
		$this->load->view('catUpdate', $msg);
	}
	
	public function deleteCat(){
		$table = 'category';
		$cond = 'id=5';
		
		$catModel = $this->load->model('CatModel');
		$result = $catModel->deleteCat($table, $cond);
	}
}
?>