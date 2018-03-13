<?php
class Login extends CI_Controller{

	public function index(){

		$data['title']='LOGIN';
		

		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	
	public function userlogin(){
		$username	=$this->input->post("username");
		$password	=$this->input->post("password");
		

		$return['message'] = "Oops something went wrong!";
		$return['type']		 = "error";
		$return['status']	 = [];

		if($username==""){
			$return['message'] = "Username is Required!";
		}
		elseif($password==""){
			$return['message'] = "Password is Required!";
		}else{

			//model function
			$this->load->model('loginModel');
			if($this->loginModel->userlogin($username, $password)){
				$return['message']="WELCOME $username";
				$return['type']= "success";
				$return['status'] = 1;
				

			}else{
				$return['message']="invalid username or password!";
				
			}
		}
			echo json_encode($return);
	}

	

}

