<?php 
class Home_controller extends Controller{
	public function __construct(){
		parent::__construct();
		$data = array();
	}
	
	public function Index(){
		$this->Home();
	}
	
	public function Home(){
		$tablePost = 'post';
		$tableCat = 'category';
		
		$this->load->view('header');
		
		$catModel = $this->load->model('CatModel');
		$data['catList'] = $catModel->catList($tableCat);
		$this->load->view('search', $data);
		
		$postModel = $this->load->model('PostModel');
		$data['getAllPost'] = $postModel->getAllPost($tablePost);
		$this->load->view('home', $data);
		
		$data['getLatestPost'] = $postModel->getLatestPost($tablePost);
		
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}
	
	public function postDetails($id){
		$tablePost = 'post';
		$tableCat = 'category';
		$this->load->view('header');
		
		$catModel = $this->load->model('CatModel');
		$data['catList'] = $catModel->catList($tableCat);
		$this->load->view('search', $data);
		$this->load->view('search');
		
		$postModel = $this->load->model('PostModel');
		$data['postById'] = $postModel->postById($tablePost, $tableCat, $id);
		$this->load->view('details', $data);

		$data['getLatestPost'] = $postModel->getLatestPost($tablePost);
		
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
		
	}
	
	public function postByCat($id){
		$tablePost = 'post';
		$tableCat = 'category';
		$this->load->view('header');
		
		$catModel = $this->load->model('CatModel');
		$data['catList'] = $catModel->catList($tableCat);
		$this->load->view('search', $data);
		$this->load->view('search');
		
		$postModel = $this->load->model('PostModel');
		$data['postByCat'] = $postModel->postByCat($tablePost, $tableCat, $id);
		$this->load->view('postByCat', $data);
		
		$data['getLatestPost'] = $postModel->getLatestPost($tablePost);
		
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}
	
	public function search(){
		$keyword = $_REQUEST['keyword'];
		$cat = $_REQUEST['cat'];
		
		if(empty($keyword) && $cat==0){
			header("Location:".BASE_URL);
		}
		
		$tablePost = 'post';
		$tableCat = 'category';
		$this->load->view('header');
		
		$catModel = $this->load->model('CatModel');
		$data['catList'] = $catModel->catList($tableCat);
		$this->load->view('search', $data);
		$this->load->view('search');
		
		$postModel = $this->load->model('PostModel');
		$data['postBySearch'] = $postModel->postBySearch($tablePost, $keyword, $cat);
		$this->load->view('postBySearch', $data);
		
		$data['getLatestPost'] = $postModel->getLatestPost($tablePost);
		
		$this->load->view('sidebar', $data);
		$this->load->view('footer');
	}
	
	public function notFound(){
		$tablePost = 'post';
		$tableCat = 'category';
		
		$this->load->view('header');
		
		$catModel = $this->load->model('CatModel');
		$data['catList'] = $catModel->catList($tableCat);
		$this->load->view('search', $data);
		
		$this->load->view('notFound');
		$this->load->view('footer');
	}
}
?>