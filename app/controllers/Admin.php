<?php 
class Admin extends Controller{
	public function __construct(){
		Parent::__construct();
		Session::checkSession();
	}
	
	public function Index(){
		$this->adminHome();
	}
	
	public function adminHome(){
		$this->load->view('header');
		$this->load->view('adminSidebar');
		$this->load->view('adminHome');
		$this->load->view('footer');
	}
	
	public function categoryList(){
		$data = array();
		$table = 'category';
		$catModel = $this->load->model('CatModel');
		$data['cat'] = $catModel->catList($table);
		
		$this->load->view('header');
		$this->load->view('adminSidebar');
		$this->load->view('catModel', $data);	
		$this->load->view('footer');
	}
	
	public function addCategory(){
		$this->load->view('header');
		$this->load->view('adminSidebar');
		$this->load->view('category');
		$this->load->view('footer');
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
		
		$url = BASE_URL."/Admin/categoryList?msg=".urlencode(serialize($msg));
		header("Location:$url");
	}
	
	public function catById(){
		if(isset($_GET['action']) && $_GET['action']=='update'){
			$id = (int)$_GET['id'];
			$data = array();
			$table = 'category';
			$catModel = $this->load->model('CatModel');
			$data['cat'] = $catModel->catById($table, $id);
			
			$this->load->view('header');
			$this->load->view('adminSidebar');
			$this->load->view('catUpdate', $data);
			$this->load->view('footer');
		}
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
		
		$url = BASE_URL."/Admin/categoryList?msg=".urlencode(serialize($msg));
		header("Location:$url");
	}
	
	public function deleteCat(){
		if(isset($_GET['action']) && $_GET['action']=='delete'){
			$id = (int)$_GET['id'];
			$table = 'category';
			$cond = "id=$id";
			
			$catModel = $this->load->model('CatModel');
			$result = $catModel->deleteCat($table, $cond);
			
			$msg = array();
			if($result){
			$msg['msg'] = "<span style='color:green;font-weight:bold'>Data Deleted successfully.</span>";
			}else{
				$msg['msg'] = "<span style='color:red;font-weight:bold'>Data Deletion failed.</span>";
			}
			
			$url = BASE_URL."/Admin/categoryList?msg=".urlencode(serialize($msg));
			header("Location:$url");
		}	
	}
	
	public function addArticle(){
		$data = array();
		$table = 'category';
		$catModel = $this->load->model('CatModel');
		$data['catList'] = $catModel->catList($table);
		
		$this->load->view('header');
		$this->load->view('adminSidebar');
		$this->load->view('article', $data);
		$this->load->view('footer');
	}
	
	public function insertArticle(){
		$input = $this->load->helper('Fvalidation');
		$input->post('title')->isEmpty()->length(10, 255);
		$input->post('content')->isEmpty();
		$input->post('cat')->isEmptyCat();
		
		if($input->submit()){
			$table = 'post';
			$name = $input->values['title'];
			$content = $input->values['content'];
			$cat = $input->values['cat'];
			
			$data = array(
			'title' => $name,
			'content' => $content,
			'cat' => $cat
			);
			$PostModel = $this->load->model('PostModel');
			$result = $PostModel->insertPost($table, $data);
			
			$msg = array();
			if($result){
				$msg['msg'] = "<span style='color:green;font-weight:bold'>Data inserted successfully.</span>";
			}else{
				$msg['msg'] = "<span style='color:red;font-weight:bold'>Data insertion failed.</span>";
			}
			
			$url = BASE_URL."/Admin/articleList?msg=".urlencode(serialize($msg));
			header("Location:$url");
		}else{
			$data = array();
			$data['postErrors'] = $input->errors;
			$table = 'category';
			$catModel = $this->load->model('CatModel');
			$data['catList'] = $catModel->catList($table);
			
			$this->load->view('header');
			$this->load->view('adminSidebar');
			$this->load->view('article', $data);
			$this->load->view('footer');
		}	
	}
	
	public function articleList(){
		$data = array();
		$tableCat = 'category';
		$tablePost = 'post';
		$PostModel = $this->load->model('PostModel');
		$data['getAllPost'] = $PostModel->getAllArticle($tablePost);
		
		
		$catModel = $this->load->model('CatModel');
		$data['cat'] = $catModel->catList($tableCat);
		
		$this->load->view('header');
		$this->load->view('adminSidebar');
		$this->load->view('articleList', $data);	
		$this->load->view('footer');
	}
	
	public function deletePost(){
		if(isset($_GET['action']) && $_GET['action']=='delete'){
			$id = (int)$_GET['id'];
			$table = 'post';
			$cond = "id=$id";
			
			$PostModel = $this->load->model('PostModel');
			$result = $PostModel->deletePost($table, $cond);
			
			$msg = array();
			if($result){
			$msg['msg'] = "<span style='color:green;font-weight:bold'>Data Deleted successfully.</span>";
			}else{
				$msg['msg'] = "<span style='color:red;font-weight:bold'>Data Deletion failed.</span>";
			}
			
			$url = BASE_URL."/Admin/articleList?msg=".urlencode(serialize($msg));
			header("Location:$url");
		}	
	}
	
	public function PostById(){
		if(isset($_GET['action']) && $_GET['action']=='update'){
			$id = (int)$_GET['id'];
			$data = array();
			$tablePost = 'post';
			$tableCat = 'category';
			
			$PostModel = $this->load->model('PostModel');
			$data['postbyid'] = $PostModel->postById($tablePost, $tableCat, $id);
			
			$catModel = $this->load->model('CatModel');
			$data['catList'] = $catModel->catList($tableCat);
			
			$this->load->view('header');
			$this->load->view('adminSidebar');
			$this->load->view('postUpdate', $data);
			$this->load->view('footer');
		}
	}
	
	public function updatePost(){
		$table = 'post';
		$id = $_POST['id'];
		$name = $_POST['title'];
		$content = $_POST['content'];
		$cat = $_POST['cat'];
		$cond = "id=$id";
		
		$data = array(
		'title' => $name,
		'content' => $content,
		'cat' => $cat
		);
		
		$PostModel = $this->load->model('PostModel');
		$result = $PostModel->updatePost($table, $data, $cond);
		
		$msg = array();
		if($result){
			$msg['msg'] = "<span style='color:green;font-weight:bold'>Data updated successfully.</span>";
		}else{
			$msg['msg'] = "<span style='color:red;font-weight:bold'>Data update failed.</span>";
		}
		
		$url = BASE_URL."/Admin/articleList?msg=".urlencode(serialize($msg));
		header("Location:$url");
	}
}
?>