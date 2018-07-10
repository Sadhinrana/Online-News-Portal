<?php 
class Test_controller extends Controller{
	public function __construct(){
		//Parent::__construct();
	}
	
	public function test($param){
		echo "I am test method with parameter $param from Test_controller.";
	}
}
?>