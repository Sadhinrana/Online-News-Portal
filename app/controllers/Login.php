<?php 
class Login extends Controller{
	public function __construct(){
		Parent::__construct();
	}
	
	public function Index(){
		$this->login();
	}
	
	public function login(){
		Session::init();
		if(Session::getSession("login") == true){
			header("Location:".BASE_URL."/Admin");
		}
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	public function loginAuth(){
		$table = "user";
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		
		$loginModel = $this->load->model('LoginModel');
		echo $count = $loginModel->userControll($table, $username, $password);
		
		if($count > 0){
			$result = $loginModel->getUserData($table, $username, $password);
			Session::init();
			Session::setSession("login", true);
			Session::setSession("username", $result[0]['username']);
			Session::setSession("userid", $result[0]['userid']);
			Session::setSession("level", $result[0]['level']);
			header("Location:".BASE_URL."/Admin");
		}else{
			$msg = array("Invalid Username And / Or Password.");
			$url = BASE_URL."/Login?msg=".urlencode(serialize($msg));
			header("Location:$url");
		}
	}
	
	public function logout(){
		Session::init();
		Session::destroy();
		header("Location:".BASE_URL."/Login");
	}
}
?>