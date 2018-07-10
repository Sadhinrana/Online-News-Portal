<?php 
class User extends Controller{
	public function __construct(){
		Parent::__construct();
		$data = array();
		Session::checkSession();
	}
	
	public function Index(){
		$this->makeUser();
	}
	
	public function makeUser(){
		$this->load->view('header');
		$this->load->view('adminSidebar');
		$this->load->view('makeUser');	
		$this->load->view('footer');
	}
	
	public function insertUser(){
		if(!($_POST)){
			header("Location:".BASE_URL."/User");
		}
		$input = $this->load->helper('Fvalidation');
		$input->post('username')->isEmpty();
		$input->post('password')->isEmpty();
		$input->post('level')->isEmptyCat();
		
		if($input->submit()){
			$table = 'user';
			$username = $input->values['username'];
			$password = md5($input->values['password']);
			$level = $input->values['level'];
			
			$data = array(
			'username' => $username,
			'password' => $password,
			'level' => $level
			);
			$UserModel = $this->load->model('UserModel');
			$result = $UserModel->insertUser($table, $data);
			
			$msg = array();
			if($result){
				$msg['msg'] = "<span style='color:green;font-weight:bold'>Data inserted successfully.</span>";
			}else{
				$msg['msg'] = "<span style='color:red;font-weight:bold'>Data insertion failed.</span>";
			}
			
			$url = BASE_URL."/User/userList?msg=".urlencode(serialize($msg));
			header("Location:$url");
		} else{
			$data['postErrors'] = $input->errors;			
			$this->load->view('header');
			$this->load->view('adminSidebar');
			$this->load->view('makeUser', $data);
			$this->load->view('footer');
		} 	
	}
	
	public function userList(){		
		$table = 'user';
		$UserModel = $this->load->model('UserModel');
		$data['user'] = $UserModel->userList($table);
		
		$this->load->view('header');
		$this->load->view('adminSidebar');
		$this->load->view('userList', $data);	
		$this->load->view('footer');
	}
	
	public function deleteUser(){
		if(isset($_GET['action']) && $_GET['action']=='delete'){
			$id = (int)$_GET['id'];
			$table = 'user';
			$cond = "id=$id";
			
			$UserModel = $this->load->model('UserModel');
			$result = $UserModel->deleteUser($table, $cond);
			
			$msg = array();
			if($result){
			$msg['msg'] = "<span style='color:green;font-weight:bold'>Data Deleted successfully.</span>";
			}else{
				$msg['msg'] = "<span style='color:red;font-weight:bold'>Data Deletion failed.</span>";
			}
			
			$url = BASE_URL."/User/userList?msg=".urlencode(serialize($msg));
			header("Location:$url");
		}	
	}
	
	public function uiOption(){
		$table = 'uiColor';
		$UiModel = $this->load->model('UiModel');
		$data['color'] = $UiModel->getColor($table);
			
		$this->load->view('header', $data);
		$this->load->view('adminSidebar');
		$this->load->view('uiOption');	
		$this->load->view('footer');
	}
	
	public function changeBcolor(){
		if(!($_POST)){
			header("Location:".BASE_URL."/User");
		}
		$input = $this->load->helper('Fvalidation');
		$input->post('color');
		
		if($input->submit()){
			$table = 'uiColor';
			$color = $input->values['color'];
			$id = 1;
			$cond = "id=$id";
			
			$data = array(
			'color' => $color
			);
			$UiModel = $this->load->model('UiModel');
			$result = $UiModel->changeBcolor($table, $data, $cond);
			
			$msg = array();
			if($result){
				$msg['msg'] = "<span style='color:green;font-weight:bold'>Background Color changed  successfully.</span>";
			}else{
				$msg['msg'] = "<span style='color:red;font-weight:bold'>Could not change background Color.</span>";
			}
			
			$url = BASE_URL."/User/uiOption?msg=".urlencode(serialize($msg));
			header("Location:$url");
		}
	}
}
?>