<?php 
class Fvalidation{
	public $fieldName;
	public $values = array();
	public $errors = array();
	
	public function __construct(){
		
	}
	
	public function post($key){
		$this->values[$key] = trim($_POST[$key]);
		$this->fieldName = $key;
		return $this;
	}
	
	public function isEmpty(){
		if(empty($this->values[$this->fieldName])){
			$this->errors[$this->fieldName]['empty'] = "Field must not be empty.";
		}
		return $this;
	}
	
	public function isEmptyCat(){
		if($this->values[$this->fieldName] == 0){
			$this->errors[$this->fieldName]['empty'] = "Field must not be empty.";
		}
		return $this;
	}
	
	public function length($min=0, $max){
		if(strlen($this->values[$this->fieldName]) < $min OR strlen($this->values[$this->fieldName]) > $max){
			$this->errors[$this->fieldName]['length'] = "Should be minimum ".$min." and maximum ".$max." character.";
		}
		return $this;
	}
	
	public function submit(){
		if(empty($this->errors)){
			return true;
		}else{
			return false;
		}
	}
}
?>